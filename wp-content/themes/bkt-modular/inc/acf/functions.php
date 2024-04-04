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

