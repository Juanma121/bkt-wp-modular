<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('Banner', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'key' => mod_acf_fieldkey( $module_name, 'bg_image' ),
                    'name' => mod_acf_fieldname( $module_name, 'bg_image' ),
                    'label' => __('Imagen', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
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
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'delay' => 0,
                ),
                array(
                    'key' => mod_acf_fieldkey( $module_name, 'btn_link' ),
                    'name' => mod_acf_fieldname( $module_name, 'btn_link' ),
                    'label' => __('Link', BKT_MODULAR_THEME_LANG_DOMINE),
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => '',
                    'wrapper' => array(
                        'width' => '50',
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
                        'width' => '50',
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
            ),
            styles_options($module_name, array('container','top','bottom','bgcolor','color')),
        ),
        'min' => '',
        'max' => '',
    )
);
