<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('Timeline', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'key' => mod_acf_fieldkey( $module_name, 'title' ),
                    'name' => mod_acf_fieldname( $module_name, 'title' ),
                    'label' => __('Título', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'conditional_logic' => 0,
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
                    'key' => mod_acf_fieldkey( $module_name, 'time_blocks' ),
                    'name' => mod_acf_fieldname( $module_name, 'Time Blocks' ),
                    'label' => __('Time Blocks', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => mod_acf_fieldkey( $module_name, 'title' ),
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'row',
                    'button_label' => __('Add time block', BKT_MODULAR_THEME_LANG_DOMINE),
                    'sub_fields' => array(
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'type' ),
                            'label' => __('Block type', 'beticav2'),
                            'name' => mod_acf_fieldname( $module_name, 'bgcolor' ),
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
                                'simple' => __('Simple', BKT_MODULAR_THEME_LANG_DOMINE),
                                'card' => __('Card', BKT_MODULAR_THEME_LANG_DOMINE),
                            ),
                            'default_value' => array(
                                0 => 'text',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => mod_acf_fieldkey( $module_name, 'title' ),
                            'label' => __('Title', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'title',
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
                            'key' => mod_acf_fieldkey( $module_name, 'text' ),
                            'label' => __('Texto', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'text',
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
                            'key' => mod_acf_fieldkey( $module_name, 'image' ),
                            'label' => __('Image', BKT_MODULAR_THEME_LANG_DOMINE),
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => mod_acf_fieldkey( $module_name, 'type' ),
                                        'operator' => '==',
                                        'value' => 'card',
                                    ),
                                ),
                            ),
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
            styles_options($module_name, array('container','top','bottom','color')),
        ),
        'min' => '',
        'max' => '',
    )
);