<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('Content distributor', BKT_MODULAR_THEME_LANG_DOMINE),
        'display' => 'block',
        'sub_fields' => array_merge(
            array(
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'content' ),
                    'name' => mod_acf_fieldname( $module_name, 'content' ),
                    'label' => __('Content', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'label' => __('Title', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'label' => __('Subtitle', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'key' => mod_acf_fieldkey( $module_name, 'text' ),
                    'name' => mod_acf_fieldname( $module_name, 'text' ),
                    'label' => __('Text', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'maxlength' => '',
                    'rows' => 1,
                    'new_lines' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'row_items' ),
                    'name' => mod_acf_fieldname( $module_name, 'row_items' ),
                    'label' => __('Items per row', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 3,
                    'min' => '1',
                    'max' => '4',
                    'placeholder' => '',
                    'step' => '1',
                    'prepend' => '',
                    'append' => '',
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
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'automatic' => __('Atomatic', BKT_MODULAR_THEME_LANG_DOMINE),
                        'manual'    => __('Manual', BKT_MODULAR_THEME_LANG_DOMINE),
                    ),
                    'default_value' => 'automatic',
                    'return_format' => 'value',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'max_items' ),
                    'name' => mod_acf_fieldname( $module_name, 'max_items' ),
                    'label' => __('Maximum number of items', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'automatic',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 3,
                    'min' => '1',
                    'max' => '',
                    'placeholder' => '',
                    'step' => '1',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'btn_link' ),
                    'name' => mod_acf_fieldname( $module_name, 'btn_link' ),
                    'label' => __('Link to more content', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => '',
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'btn_type' ),
                    'name' => mod_acf_fieldname( $module_name, 'btn_type' ),
                    'label' => __('Button type', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'btn-primary'   => __('Primary square', BKT_MODULAR_THEME_LANG_DOMINE),
                        'btn-secondary' => __('Secondary square', BKT_MODULAR_THEME_LANG_DOMINE),
                        'btn-primary btn-rounded'   => __('Primary rounded', BKT_MODULAR_THEME_LANG_DOMINE),
                        'btn-secondary btn-rounded' => __('Secondary rounded', BKT_MODULAR_THEME_LANG_DOMINE),
                        'btn-link'      => __('Link', BKT_MODULAR_THEME_LANG_DOMINE),
                    ),
                    'default_value' => 'btn-primary',
                    'return_format' => 'value',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'posts' ),
                    'name' => mod_acf_fieldname( $module_name, 'posts' ),
                    'label' => __('Posts', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => mod_acf_fieldkey( $module_name, 'mode' ),
                                'operator' => '==',
                                'value' => 'manual',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => '',
                    'post_status' => '',
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                        2 => 'taxonomy',
                    ),
                    'return_format' => 'object',
                    'min' => '',
                    'max' => '',
                    'elements' => '',
                    'bidirectional' => 0,
                    'bidirectional_target' => array(
                    ),
                ),
            ),
            styles_options(
                $module_name, array(
                    'alignment',
                    'bottom',
                    'top'
                )
            ),
        ),
        'min' => '',
        'max' => '',
    )
);
