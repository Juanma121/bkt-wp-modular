<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('Hero', BKT_MODULAR_THEME_LANG_DOMINE),
        'display' => 'block',
        'sub_fields' => array_merge(
            array(
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'content' ),
                    'label' => __('Contenido', BKT_MODULAR_THEME_LANG_DOMINE),
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'mode' ),
                    'name' => mod_acf_fieldname( $module_name, 'mode' ),
                    'label' => __('Mode', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'simple' => 'Simple',
                        'slider' => 'Slider',
                    ),
                    'default_value' => 'simple',
                    'return_format' => 'value',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'background_image' ),
                    'name' => mod_acf_fieldname( $module_name, 'background_image' ),
                    'label' => __('Background imagen', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'simple',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'title' ),
                    'name' => mod_acf_fieldname( $module_name, 'title' ),
                    'label' => __('Título', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'simple',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 3,
                    'new_lines' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'subtitle' ),
                    'name' => mod_acf_fieldname( $module_name, 'subtitle' ),
                    'label' => __('Subtítulo', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'simple',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 1,
                    'new_lines' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'text' ),
                    'name' => mod_acf_fieldname( $module_name, 'text' ),
                    'label' => __('Texto', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'simple',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'slider_controls' ),
                    'name' => mod_acf_fieldname( $module_name, 'slider_controls' ),
                    'label' => __('Show slider controls', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'slider',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => __('On', BKT_MODULAR_THEME_LANG_DOMINE),
                    'ui_off_text' => __('Off', BKT_MODULAR_THEME_LANG_DOMINE),
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'slider_indicators' ),
                    'name' => mod_acf_fieldname( $module_name, 'slider_indicators' ),
                    'label' => __('Show slider indicators', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'slider',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => __('On', BKT_MODULAR_THEME_LANG_DOMINE),
                    'ui_off_text' => __('Off', BKT_MODULAR_THEME_LANG_DOMINE),
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'slider_interval' ),
                    'name' => mod_acf_fieldname( $module_name, 'slider_interval' ),
                    'label' => __('Slider interval in seconds', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'slider',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 5,
                    'min' => '5',
                    'max' => '',
                    'placeholder' => '',
                    'step' => '1',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'slider_wrap' ),
                    'name' => mod_acf_fieldname( $module_name, 'slider_wrap' ),
                    'label' => __('Cycle continuously', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'slider',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => __('On', BKT_MODULAR_THEME_LANG_DOMINE),
                    'ui_off_text' => __('Off', BKT_MODULAR_THEME_LANG_DOMINE),
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'slides' ),
                    'name' => mod_acf_fieldname( $module_name, 'slides' ),
                    'label' => __('Slides', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'slider',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => mod_acf_fieldkey( $module_name, 'slide_title' ),
                    'min' => 2,
                    'max' => 0,
                    'layout' => 'row',
                    'button_label' => __('Add slide', BKT_MODULAR_THEME_LANG_DOMINE),
                    'sub_fields' => array(
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'slide_title' ),
                            'label' => __('Slide title', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'slide_title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'slide_subtitle' ),
                            'label' => __('Slide subtitle', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'slide_subtitle',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'slide_text' ),
                            'label' => __('Slide text', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'slide_text',
                            'type' => 'wysiwyg',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'slide_background_image' ),
                            'label' => __('Slide background image', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'slide_background_image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                ),
            ),
            styles_options($module_name, array('bottom', 'aligment')),
        ),
        'min' => '',
        'max' => '',
    )
);
