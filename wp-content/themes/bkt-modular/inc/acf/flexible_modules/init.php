<?php

require_once(__DIR__ . '/styles-definitions.php');

function tpl_load_modules($modules_names = array()) {
    $modules_dir = __DIR__;
    $mods = array();
    foreach ($modules_names as $module_name) {
        $module_definition = "$modules_dir/$module_name/definition.php";
        $module_functions = "$modules_dir/$module_name/functions.php";
        if(file_exists($module_definition) && file_exists($module_functions)) {
            $fields = require($module_definition);
            require_once($module_functions);
            if(is_array($fields)) {
                $mods = array_merge($mods, $fields);
            }
        }
    }

    return $mods;
}

function tpl_renders($field_name) {
    if(have_rows($field_name)) {
        while (have_rows($field_name)) : the_row();
            $module_name = get_row_layout();
            $function_to_call = "bkt_flex_{$module_name}_content";
            if(function_exists($function_to_call)) {
                $function_to_call();
            }
        endwhile;
    }
}
