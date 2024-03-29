<?php
N2Loader::import('libraries.renderable.layers.itemFactory', 'smartslider');

class N2SSItemCircleCounter extends N2SSItemAbstract {

    protected $type = 'circlecounter';

    public function render() {
        return $this->getHtml();
    }

    public function _renderAdmin() {
        return $this->getHtml();
    }

    private function getHtml() {
        $owner = $this->layer->getOwner();

        $this->loadResources($owner);

        $value       = intval($this->data->get('value'));
        $min         = min(0, $value);
        $strokeWidth = intval($this->data->get('strokewidth'));
        $size        = max(intval($this->data->get('size')), $strokeWidth + 1);
        $startValue  = max(intval($this->data->get('startvalue')), $min);
        $total       = max(max(intval($this->data->get('total')), $startValue), $value);
        $duration    = max(0, intval($this->data->get('animationduration')));

        $center = $size / 2;
        $r      = ($size - $strokeWidth) / 2;
        $c      = pi() * $r * 2;

        if ($total != $min) {
            $toPercent = (min($value, $total) - $min) / ($total - $min);

            if ($duration == 0) {
                // We do not have animation
                $fromPercent = $toPercent;
            } else {
                $fromPercent = (min($startValue, $total) - $min) / ($total - $min);
            }
        } else {
            $duration    = 0;
            $fromPercent = $toPercent = 0;
        }

        $pct = (1 - $fromPercent) * $c;

        $labelHTML = '';
        $label     = $this->data->get('label');
        $placement = '';
        if (!empty($label)) {
            $fontLabel = $owner->addFont($this->data->get('fontlabel'), 'simple', 'div#' . $owner->getElementID() . ' .n2-ss-layer ');

            $labelHTML = N2Html::tag('div', array(
                'class' => $fontLabel
            ), $label);
            $placement = $this->data->get('labelplacement');
        }


        $html = '';

        if ($placement == 'before') {
            $html .= $labelHTML;
        }

        $font = $owner->addFont($this->data->get('font'), 'simple', 'div#' . $owner->getElementID() . ' .n2-ss-layer ');

        $pre             = $this->data->get('pre');
        $post            = $this->data->get('post');
        $countingDivHTML = N2Html::tag('div', array(
            'class' => 'n2-ss-item-circlecounter-counting-div n2-ow ' . $font
        ), $pre . round($min + $fromPercent * ($total - $min)) . $post);

        $html .= N2Html::openTag('div', array(
            'id'    => $this->id,
            'class' => 'n2-ow n2-ss-item-circlecounter-svg-container',
            'style' => 'width:' . $size . 'px;'
        ));

        $color  = $this->data->get('color');
        $color2 = $this->data->get('color2');
        $html   .= '<svg class="svg" viewBox="0 0 ' . $size . ' ' . $size . '" version="1.1" style="width:' . $size . 'px;height:' . $size . 'px;" preserveAspectRatio="xMinYMin meet">';
        $html   .= '<circle class="fl-bar-bg" r="' . $r . '" cx="' . $center . '" cy="' . $center . '" stroke="#' . substr($color, 0, 6) . '" stroke-opacity="' . N2Color::hex2alpha($color) / 127 . '" stroke-width="' . $strokeWidth . '" stroke-dashoffset="0" stroke-dasharray="' . $c . '" stroke-dashoffset="0" fill="transparent"></circle>';
        $html   .= '<circle class="fl-bar" r="' . $r . '" cx="' . $center . '" cy="' . $center . '" stroke="#' . substr($color2, 0, 6) . '" stroke-opacity="' . N2Color::hex2alpha($color2) / 127 . '" stroke-width="' . $strokeWidth . '" stroke-dasharray="' . $c . '" stroke-dashoffset="' . $pct . '" transform="rotate(-90 ' . $center . ' ' . $center . ')" fill="transparent"></circle>';
        $html   .= '</svg>';

        $html .= N2Html::openTag('div', array(
            'class' => 'n2-ow n2-ss-item-circlecounter-svg-overlay'
        ));

        if ($placement == 'innerbefore') {
            $html .= $labelHTML;
        }

        $html .= $countingDivHTML;


        if ($placement == 'innerafter') {
            $html .= $labelHTML;
        }

        $html .= '</div>';
        $html .= '</div>';


        if ($placement == 'after') {
            $html .= $labelHTML;
        }

        if ($duration != 0) {

            $jsData = array(
                'name'        => 'circlecounter',
                'pre'         => $pre,
                'post'        => $post,
                'fromPercent' => $fromPercent,
                'toPercent'   => $toPercent,
                'duration'    => $duration,
                'delay'       => $this->data->get('animationdelay'),
                'min'         => $min,
                'total'       => $total,
                'c'           => $c,
                'counting'    => '.n2-ss-item-circlecounter-counting-div',
                'displayMode' => 'circle',
                'display'     => 'circle:eq(1)'
            );

            if ($this->isEditor && $owner->underEdit) {
                $owner->addScript('new N2Classes.CounterItemAdmin(this, "#' . $this->id . '", ' . json_encode($jsData) . ');');
            } else {
                $owner->addScript('new N2Classes.FrontendItemCounter(this, "#' . $this->id . '", ' . json_encode($jsData) . ');');
            }
        }

        return N2Html::tag('div', array(
            'class' => 'n2-ss-item-content n2-ow'
        ), $html);
    }

    /**
     * @param N2SmartSliderComponentOwnerAbstract $owner
     */
    public function loadResources($owner) {
        $owner->addLess(dirname(__FILE__) . "/circlecounter.n2less", array(
            "sliderid" => $owner->getElementID()
        ));
    }
}
