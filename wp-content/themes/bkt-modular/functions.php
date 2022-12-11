<?php

$required_files = [
    'inc/config/definitions.php',
    'inc/config/theme-config.php',
    'inc/helpers/loader.php',
];

foreach($required_files as $required_file) {
    require_once( trailingslashit( get_stylesheet_directory() ) . $required_file );
}
