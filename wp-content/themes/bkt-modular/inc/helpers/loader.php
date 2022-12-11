<?php

$required_files = [
    'assets',
    'attachment',
    'taxonomy',
];

foreach( $required_files as $required_file) {
    require_once( trailingslashit( __DIR__ ) . "_{$required_file}.helper.php" );
}
