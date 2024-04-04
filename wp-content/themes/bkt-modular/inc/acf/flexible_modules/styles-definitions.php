<?php

function styles_options($module_name, $allowed = array()) {
    $styles = array();
    $tab = array(
        'key' => mod_acf_fieldkey( $module_name, 'styles' ),
        'label' => __('Styles', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => __('Styles', BKT_MODULAR_THEME_LANG_DOMINE),
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
    );
    array_push($styles, $tab);

    $container = array(
        'key' => mod_acf_fieldkey( $module_name, 'container_type' ),
        'label' => __('Container width', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'container_type' ),
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
            'wide' => __('Narrow', BKT_MODULAR_THEME_LANG_DOMINE),
            'normal' => __('Normal', BKT_MODULAR_THEME_LANG_DOMINE),
            'narrow' => __('Wide', BKT_MODULAR_THEME_LANG_DOMINE),
        ),
        'default_value' => array(
            0 => 'normal',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
    );
    if (in_array( 'container', $allowed))
        array_push($styles, $container);

    $padding_top = array(
        'key' => mod_acf_fieldkey( $module_name, 'padding_top' ),
        'label' => __('Padding top', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'padding_top' ),
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
            'normal' => __('Normal', BKT_MODULAR_THEME_LANG_DOMINE),
            'narrow' => __('Narrow', BKT_MODULAR_THEME_LANG_DOMINE),
            'wide'   => __('Wide', BKT_MODULAR_THEME_LANG_DOMINE),
            'none'   => __('None', BKT_MODULAR_THEME_LANG_DOMINE)
        ),
        'default_value' => array(
            0 => 'normal',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
    );
    if (in_array( 'top', $allowed))
        array_push($styles, $padding_top);

    $padding_bottom = array(
        'key' => mod_acf_fieldkey( $module_name, 'padding_bottom' ),
        'label' => __('Padding bottom', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'padding_bottom' ),
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
            'normal' => __('Normal', BKT_MODULAR_THEME_LANG_DOMINE),
            'narrow' => __('Narrow', BKT_MODULAR_THEME_LANG_DOMINE),
            'wide'   => __('Wide', BKT_MODULAR_THEME_LANG_DOMINE),
            'none'   => __('None', BKT_MODULAR_THEME_LANG_DOMINE)
        ),
        'default_value' => array(
            0 => 'normal',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
    );
    if (in_array( 'bottom', $allowed))
        array_push($styles, $padding_bottom);

    $bg_color = array(
        'key' => mod_acf_fieldkey( $module_name, 'bgcolor' ),
        'label' => __('Color de fondo', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'bgcolor' ),
        'type' => 'color_picker',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '50',
            'class' => '',
            'id' => '',
        ),
        'default_value' => '#ffffff',
        'enable_opacity' => 0,
        'return_format' => 'string',
    );
    if (in_array( 'bgcolor', $allowed))
        array_push($styles, $bg_color);

    $color = array(
        'key' => mod_acf_fieldkey( $module_name, 'color' ),
        'label' => __('Color de texto', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'color' ),
        'type' => 'color_picker',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '50',
            'class' => '',
            'id' => '',
        ),
        'default_value' => '#000000',
        'enable_opacity' => 0,
        'return_format' => 'string',
    );
    if (in_array( 'color', $allowed))
        array_push($styles, $color);

    $alignment = array(
        'key' => mod_acf_fieldkey( $module_name, 'alignment' ),
        'label' => __('Alignment', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'alignment' ),
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
            'left' => __('Left', BKT_MODULAR_THEME_LANG_DOMINE),
            'center' => __('Center', BKT_MODULAR_THEME_LANG_DOMINE),
            'right' => __('Right', BKT_MODULAR_THEME_LANG_DOMINE),
        ),
        'default_value' => array(
            0 => 'left',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
    );
    if (in_array( 'alignment', $allowed))
        array_push($styles, $alignment);

    return $styles;
};
