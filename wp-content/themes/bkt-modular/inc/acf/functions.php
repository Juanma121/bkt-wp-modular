<?php

function mod_acf_fieldkey($module_name, $field_name, $parent_field_name = '') {
    $parent_field_name = ( !empty($parent_field_name) ? md5( "_{$parent_field_name}") : '' );
    return "field_{$module_name}_" . md5( "{$module_name}_{$field_name}{$parent_field_name}" );
}

function mod_acf_fieldname($module_name, $field_name) {
    return "{$module_name}_{$field_name}";
}

function mod_get_field($module_name, $field_name, $id=null) {
    return get_field(mod_acf_fieldname($module_name, $field_name), $id);
}

function get_content_types_list() {
    $templates_path = get_template_directory() . '/inc/acf/templates';
    $content_types = array();

    if (is_dir($templates_path)) {
        $dir = opendir($templates_path);
        while (($file = readdir($dir)) !== false) {
            if ($file != '.' && $file != '..' && is_file($templates_path . '/' . $file)) {
                $file_parts = pathinfo($file);
                if ($file_parts['extension'] === 'php') {
                    $content_types[] = str_replace('_', '', $file_parts['filename']);
                }
            }
        }
        closedir($dir);
    }

    return $content_types;
}

function get_flexible_modules_list() {
    $modules = array();
    $path = get_template_directory() . '/inc/acf/flexible_modules';
    if (is_dir($path)) {
        $dir = opendir($path);
        while (($file = readdir($dir)) !== false) {
            if ($file != '.' && $file != '..' && is_dir($path . '/' . $file)) {
                $modules[$file] = ucfirst(str_replace('_', ' ', $file));
            }
        }
        closedir($dir);
    }
    return $modules;
}
