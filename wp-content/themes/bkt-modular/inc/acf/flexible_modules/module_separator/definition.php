<?php
$module_name = basename( __DIR__ );
$group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

return array(
    $group_{$module_name} => array(
        'key' => $group_{$module_name},
        'name' => $module_name,
        'label' => __('Separator', BKT_MODULAR_THEME_LANG_DOMINE),
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => mod_acf_fieldkey( $module_name, 'content' ),
                'label' => __('Settings', BKT_MODULAR_THEME_LANG_DOMINE),
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
                'key' => mod_acf_fieldkey( $module_name, 'Desktop' ),
                'name' => mod_acf_fieldname( $module_name, 'desktop' ),
                'label' => __('Desktop separation', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'desktop-narrow-separation' => __('Narrow (60px)', BKT_MODULAR_THEME_LANG_DOMINE),
                    'desktop-normal-separation' => __('Normal (90px)', BKT_MODULAR_THEME_LANG_DOMINE),
                    'desktop-wide-separation'   => __('Wide (120px)', BKT_MODULAR_THEME_LANG_DOMINE),
                ),
                'default_value' => 'desktop-normal-separation',
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => mod_acf_fieldkey( $module_name, 'Mobile' ),
                'name' => mod_acf_fieldname( $module_name, 'mobile' ),
                'label' => __('Mobile separation', BKT_MODULAR_THEME_LANG_DOMINE),
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
                    'mobile-narrow-separation'  => __('Narrow (40px)', BKT_MODULAR_THEME_LANG_DOMINE),
                    'mobile-normal-separation'  => __('Normal (60px)', BKT_MODULAR_THEME_LANG_DOMINE),
                    'mobile-wide-separation'    => __('Wide (90px)', BKT_MODULAR_THEME_LANG_DOMINE),
                ),
                'default_value' => 'mobile-normal-separation',
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
        'min' => '',
        'max' => '',
    )
);
