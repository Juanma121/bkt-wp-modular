<?php

function styles_options($module_name, $allowed = array()) {
    $styles = array(
            'key' => mod_acf_fieldkey( $module_name, 'styles' ),
            'label' => __('Estilos', BKT_MODULAR_THEME_LANG_DOMINE),
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
    );

    $container = array(
        'key' => mod_acf_fieldkey( $module_name, 'container_type' ),
        'label' => __('Tipo de contendor', BKT_MODULAR_THEME_LANG_DOMINE),
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
            'wide' => __('Ancho', BKT_MODULAR_THEME_LANG_DOMINE),
            'normal' => __('Normal', BKT_MODULAR_THEME_LANG_DOMINE),
            'narrow' => __('Estrecho', BKT_MODULAR_THEME_LANG_DOMINE),
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
        $styles = array($styles, $container);

    $padding_top = array(
        'key' => mod_acf_fieldkey( $module_name, 'padding_top' ),
        'label' => __('Separación superior', BKT_MODULAR_THEME_LANG_DOMINE),
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
            'narrow' => __('Estrecho', BKT_MODULAR_THEME_LANG_DOMINE),
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
        'label' => __('Separación inferior', BKT_MODULAR_THEME_LANG_DOMINE),
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
            'narrow' => __('Estrecho', BKT_MODULAR_THEME_LANG_DOMINE),
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

    $aligment = array(
        'key' => mod_acf_fieldkey( $module_name, 'aligment' ),
        'label' => __('Aligment', BKT_MODULAR_THEME_LANG_DOMINE),
        'name' => mod_acf_fieldname( $module_name, 'aligment' ),
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
            0 => 'normal',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
    );
    if (in_array( 'aligment', $allowed))
        array_push($styles, $aligment);


    return $styles;
};
