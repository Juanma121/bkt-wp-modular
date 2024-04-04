<?php
/*
Plugin Name: Tinymce Editor Custom Buttons
Description: Add new custom buttons to TinyMCE Toolbar
Author: Juan Mayor
*/

// mce_buttons: This is a filter hook used to attach buttons to tinyMCE editor
// mce_external_plugins: used to attaach functionality with our custom added buttons

add_filter('mce_buttons', 'attach_custom_tinymce_buttons');

function attach_custom_tinymce_buttons($buttons) {
    $buttons[] = "editor_dropdown";
    return $buttons;
}

add_filter('mce_external_plugins', 'attach_fns_custom_bottons');

function attach_fns_custom_bottons($plugin_array) {
    $plugin_array['mce_editor_js'] = plugin_dir_url(__FILE__) . 'editor.js';
    return $plugin_array;
}
