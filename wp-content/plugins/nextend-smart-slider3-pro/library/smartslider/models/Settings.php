<?php

class N2SmartsliderSettingsModel extends N2Model {

    public function form() {
        $data = N2SmartSliderSettings::getAll();
        $this->formDefault($data);
    }

    public function save() {
        $namespace = N2Request::getCmd('namespace', 'default');
        $settings  = N2Request::getVar('settings');
        if ($namespace && $settings) {
            if ($namespace == 'default') $namespace = 'settings';
            if ($namespace == 'font' && N2Request::getInt('sliderid')) {
                $namespace .= N2Request::getInt('sliderid');
                self::markChanged(N2Request::getInt('sliderid'));
            }

            N2SmartSliderSettings::store($namespace, json_encode($settings));
        }

        return true;
    }

    public static function markChanged($id) {
        N2SmartSliderHelper::getInstance()
                           ->setSliderChanged($id, 1);
    }

    public function saveDefaults($defaults) {
        if (!empty($defaults)) {
            foreach ($defaults AS $referenceKey => $value) {
                N2StorageSectionAdmin::set('smartslider', 'default', $referenceKey, $value);
            }
        }

        return true;
    }

    private function formDefault($data) {
        N2Loader::import('libraries.form.form');

        $form = new N2Form(N2Base::getApplication('smartslider')
                                 ->getApplicationType('backend'));
        $form->loadArray($data);

        $general = new N2Tab($form, 'general', n2_('General settings'));

        new N2ElementToken($general);

        new N2ElementOnOff($general, 'beacon', n2_('Show help beacon'), 1);
        new N2ElementOnOff($general, 'discover', n2_('Show discover modal'), 1);

        new N2ElementOnOff($general, 'autoupdatecheck', n2_('Automatic update check'), 1);

        $translateUrl = new N2ElementMixed($general, 'translate-url', n2_('Translate url'), '|*|');
        new N2ElementText($translateUrl, 'translate-url-1', n2_('From'), '', array('style' => 'width:200px;'));
        new N2ElementText($translateUrl, 'translate-url-2', n2_('To'), '', array('style' => 'width:200px;'));


        new N2ElementTextarea($general, 'external-css-files', n2_('Editor - additional CSS files'), '', array(
            'fieldstyle' => 'width:300px; height: 100px; resize: vertical;'
        ));

        new N2ElementOnOff($general, 'hardware-acceleration', n2_('Hardware acceleration on sliders'), 1);
        new N2ElementOnOff($general, 'slide-as-file', n2_('Send slide as file'), 0);
        new N2ElementOnOff($general, 'preview-new-window', n2_('Open preview in new window'), 0);
        new N2ElementOnOff($general, 'editor-icon', n2_('Show editor icon'), 1);
        new N2ElementOnOff($general, 'wp-adminbar', n2_('Show in WordPress admin bar'), 1);

        new N2ElementOnOff($general, 'yoast-sitemap', n2_('YOAST SEO sitemap - add images'), 1);

        new N2ElementNumber($general, 'wordpress-widget-areas', n2_('WordPress - Create widget area'), 1, array(
            'unit'  => 'widget area(s)',
            'style' => 'width:40px;',
            'min'   => 0
        ));

        new N2ElementOnOff($general, 'wp-ajax-iframe-slider', n2_('Render sliders as iframe in AJAX calls'), 0);
        new N2ElementOnOff($general, 'lightbox-mobile-new-tab', n2_('Lightbox - Mobile - Open embeds on new tab'), 1);
    

        new N2ElementOnOff($general, 'youtube-privacy-enhanced', n2_('YouTube privacy enhanced mode'), 0);

        new N2ElementNumber($general, 'smooth-scroll-speed', n2_('Smooth scroll speed'), 400, array(
            'style' => 'width:35px;',
            'unit'  => 'ms'
        ));

        $responsive = new N2Tab($form, 'responsive', n2_('Responsive mode'));

        new N2ElementRadio($responsive, 'responsive-basedon', n2_('Based on'), 'combined', array(
            'options' => array(
                'device'   => n2_('Real device detection'),
                'screen'   => n2_('Maximum screen width'),
                'combined' => n2_('Combined')
            )
        ));

        $maximumScreenWidth = new N2ElementGroup($responsive, 'responsive-screen-width', n2_('Maximum screen width'));

        new N2ElementText($maximumScreenWidth, 'responsive-screen-width-desktop-portrait', n2_('Desktop portrait'), 1200, array(
            'style' => 'width:40px;',
            'unit'  => 'px'
        ));

        new N2ElementText($maximumScreenWidth, 'responsive-screen-width-tablet-landscape', n2_('Tablet landscape'), 1024, array(
            'style' => 'width:40px;',
            'unit'  => 'px'
        ));

        new N2ElementText($maximumScreenWidth, 'responsive-screen-width-tablet-portrait', n2_('Tablet portrait'), 800, array(
            'style' => 'width:40px;',
            'unit'  => 'px'
        ));

        new N2ElementText($maximumScreenWidth, 'responsive-screen-width-mobile-landscape', n2_('Mobile landscape'), 740, array(
            'style' => 'width:40px;',
            'unit'  => 'px'
        ));

        new N2ElementText($maximumScreenWidth, 'responsive-screen-width-mobile-portrait', n2_('Mobile portrait'), 440, array(
            'style' => 'width:40px;',
            'unit'  => 'px'
        ));


        $defaultWidthPercentage = new N2ElementGroup($responsive, 'responsive-default-ratio', n2_('Default width percentage'));

        new N2ElementNumber($defaultWidthPercentage, 'responsive-default-ratio-tablet-portrait', n2_('Tablet portrait'), 70, array(
            'style' => 'width:40px;',
            'unit'  => '%',
            'min'   => 0,
            'max'   => 100
        ));
        new N2ElementNumber($defaultWidthPercentage, 'responsive-default-ratio-mobile-portrait', n2_('Mobile portrait'), 50, array(
            'style' => 'width:40px;',
            'unit'  => '%',
            'min'   => 0,
            'max'   => 100
        ));

        new N2ElementOnOff($responsive, 'serversidemobiledetect', n2_('Server side mobile detect'), 0);

        $verticalOffset = new N2ElementGroup($responsive, 'responsive-vertical-offset', n2_('Focus offset'));
        $responsiveHeightOffsetValue = '#wpadminbar';
        new N2ElementTextAutocomplete($verticalOffset, 'responsive-focus-top', n2_('Top') . ' - ' . n2_('CSS selector (sum of heights)'), $responsiveHeightOffsetValue, array(
            'post'   => 'break',
            'style'  => 'width:400px;',
            'values' => array($responsiveHeightOffsetValue)
        ));
        new N2ElementText($verticalOffset, 'responsive-focus-bottom', n2_('Bottom') . ' - ' . n2_('CSS selector (sum of heights)'), '', array(
            'style' => 'width:400px;'
        ));


        $cache = new N2Tab($form, 'cache', n2_('Cache'));

        new N2ElementButton($cache, 'clear-cache', n2_('Cache'), n2_('Clear cache'), array(
            'url' => N2Base::getApplication('smartslider')->router->createUrl(array(
                'settings/clearcache'
            ), true)
        ));

        N2JS::addFirstCode('
            new N2Classes.Form("smartslider-form", ' . $form->toJSON() . ', null);
        ');

        echo $form->render('settings');
    }

} 