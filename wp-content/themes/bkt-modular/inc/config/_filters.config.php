<?php

add_filter(
    'init',
    function(){
        add_theme_support('editor-styles');

        $content_css = get_stylesheet_directory_uri() . '/dist/css/tinymce.css';
        add_editor_style($content_css);
    }
);

add_filter(
    'tiny_mce_before_init',
    function($settings) {

        // Content CSS
        $content_css = get_stylesheet_directory_uri() . '/dist/css/tinymce.css';
        if ( isset($settings['content_css']) ) {
            $content_css = $settings['content_css'] . ',' . $content_css;
        }
        $settings['content_css'] = $content_css;

        // Style Formats

        $style_formats = array(
            array(
                'title'   =>  __('Button Primary Contanier', BKT_MODULAR_THEME_LANG_DOMINE),
                'block'   =>  'div',
                'classes' =>  'btn-primary'
            ),
            array(
                'title'   =>  __('Button Secondary Contanier', BKT_MODULAR_THEME_LANG_DOMINE),
                'block'   =>  'div',
                'classes' =>  'btn-secondary'
            ),
            array(
                'title'   =>  __('Button Rounded Contanier', BKT_MODULAR_THEME_LANG_DOMINE),
                'block'   =>  'div',
                'classes' =>  'btn-rounded'
            ),
            array(
                'title'   =>  __('Button Link Contanier', BKT_MODULAR_THEME_LANG_DOMINE),
                'block'   =>  'div',
                'classes' =>  'btn-link'
            )
        );
        $settings['style_formats'] = json_encode ($style_formats);

        return $settings;
    }
);
