<?php

N2Loader::import('libraries.renderable.layers.itemFactory', 'smartslider');

N2Loader::import('libraries.icons.icons');

class N2SSItemIcon2 extends N2SSItemAbstract {

    protected $type = 'icon2';

    public function render() {

        if ($this->hasLink()) {
            return $this->getLink($this->getHtml(false), array(
                'style' => 'display:inline-block;',
                'class' => 'n2-ss-item-content n2-ow'
            ));
        }

        return $this->getHtml();
    }

    public function _renderAdmin() {
        return $this->getHtml();
    }

    private function getHtml($isContent = true) {
        $owner = $this->layer->getOwner();

        $iconData = N2Icons::render($this->data->get('icon'));
        if (!$iconData) {
            return '';
        }

        $styleClass = $owner->addStyle($this->data->get('style'), 'heading');

        $selector = 'div#' . $owner->getElementID() . ' .' . $this->id;
        $color    = N2Color::colorToRGBA($this->data->get('color', '00000080'));
        $style    = $selector . '{color:' . $color . '}';
        if (substr($this->data->get('colorhover', '00000000'), 6, 2) != '00') {
            $colorHover = N2Color::colorToRGBA($this->data->get('colorhover', '00000000'));
            $style      .= $selector . ':HOVER,' . $selector . ':FOCUS,' . $selector . ':VISITED{color:' . $colorHover . '}';
        }

        $owner->addCSS($style);


        return '<i class="n2i ' . $styleClass . ' ' . $this->id . ' ' . $iconData['class'] . ($isContent ? ' n2-ss-item-content' : '') . '" style="font-size:' . ($this->data->get('size') / 16 * 100) . '%;">' . $iconData['ligature'] . '</i>';
    }
}