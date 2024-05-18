<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => __('Configuración de Módulos', BKT_MODULAR_THEME_LANG_DOMINE),
        'menu_title'    => __('Configuración de Módulos', BKT_MODULAR_THEME_LANG_DOMINE),
        'menu_slug'     => 'module-configuration',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_action('acf/init', 'create_acf_fields_for_modules');
function create_acf_fields_for_modules() {
    if( function_exists('acf_add_local_field_group') ) {

        $content_types = get_content_types_list();
        $modules = get_flexible_modules_list();

        foreach ($content_types as $content_type) {
            $fields = array();

            foreach ($modules as $module_key => $module_label) {
                $fields[] = array(
                    'key' => 'field_' . $content_type . '_' . $module_key,
                    'label' => $module_label,
                    'name' => $content_type . '_' . $module_key,
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => __('Habilitado', BKT_MODULAR_THEME_LANG_DOMINE),
                    'ui_off_text' => __('Deshabilitado', BKT_MODULAR_THEME_LANG_DOMINE),
                );
            }

            acf_add_local_field_group(array(
                'key' => 'group_' . $content_type,
                'title' => ucfirst($content_type) . ' Modules Configuration',
                'fields' => $fields,
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'module-configuration',
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
        }
    }
}
