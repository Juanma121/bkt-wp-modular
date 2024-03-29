<?php

$template_modules = array (
    'module_hero',
    'module_text',
    'module_text_image',
    'module_banner',
    'module_distributor',
    'module_faqs',
    'module_timeline'
);

if( function_exists('acf_add_local_field_group') ):
    $module_name = 'acf_page';
    $group_{$module_name} = "bkt_{$module_name}_" . md5( $module_name );

    acf_add_local_field_group(array(
        'key' => $group_{$module_name},
        'title' => __('Módulos', BKT_MODULAR_THEME_LANG_DOMINE),
        'fields' => array(
            array(
                'key' => mod_acf_fieldkey( $module_name, 'flexible_content' ),
                'name' => mod_acf_fieldname( $module_name, 'flexible_content' ),
                'label' => '',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => tpl_load_modules( $template_modules ),
                'button_label' => __('Agregar módulo', BKT_MODULAR_THEME_LANG_DOMINE),
                'min' => '',
                'max' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;
