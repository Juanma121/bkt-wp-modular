<?php

\add_filter('wp_enqueue_scripts', function() {
    wp_enqueue_script( BKT_MODULAR_THEME_SLUG . '/js/main', \get_stylesheet_directory_uri() . '/dist/js/main.min.js', array('jquery'), BKT_MODULAR_THEME_SCRIPTS_VERSION, true);
    wp_localize_script( BKT_MODULAR_THEME_SLUG .'/js/main', 'theme_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'site_url' => site_url(),
    ));
});

\add_filter('wp_enqueue_scripts', function() {
    $main_style_deps = array();
    if ( file_exists( \get_stylesheet_directory() .'/dist/css/vendor.css' ) ) {
        wp_enqueue_style( BKT_MODULAR_THEME_SLUG .'/css/vendor', \get_stylesheet_directory_uri() . '/dist/css/vendor.css', array(), BKT_MODULAR_THEME_STYLES_VERSION);
        $main_style_deps[] = BKT_MODULAR_THEME_SLUG .'/css/vendor';
    }
    wp_enqueue_style( BKT_MODULAR_THEME_SLUG . '/css/main', \get_stylesheet_directory_uri() . '/dist/css/main.css', $main_style_deps, BKT_MODULAR_THEME_STYLES_VERSION);
});

\add_filter('admin_enqueue_scripts', function() {
    if ( file_exists( \get_stylesheet_directory() .'/dist/js/admin.css' ) ) {
        wp_enqueue_style( BKT_MODULAR_THEME_SLUG . '/admin', \get_stylesheet_directory_uri() . '/dist/css/admin.css', false);
    }
    if ( file_exists( \get_stylesheet_directory() .'/dist/js/admin.min.js' ) ) {
        wp_enqueue_script(BKT_MODULAR_THEME_SLUG .'/admin-scripts', \get_stylesheet_directory_uri() .'/dist/js/admin.min.js', array('jquery'), BKT_MODULAR_THEME_STYLES_VERSION, true);
        wp_localize_script( BKT_MODULAR_THEME_SLUG .'/admin-scripts', 'admin_theme_data', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'site_url' => site_url(),
        ));
    }
});

\add_filter('login_enqueue_scripts', function() {
    if ( file_exists( \get_stylesheet_directory() .'/dist/js/login.css' ) ) {
        wp_enqueue_style( BKT_MODULAR_THEME_SLUG . '/login', \get_stylesheet_directory_uri() . '/dist/css/login.css', false);
    }
    if ( file_exists( \get_stylesheet_directory() .'/dist/js/login.min.js' ) ) {
        wp_enqueue_script(BKT_MODULAR_THEME_SLUG .'/login-scripts', \get_stylesheet_directory_uri() .'/dist/js/login.min.js', array('jquery'), BKT_MODULAR_THEME_STYLES_VERSION, true);
        wp_localize_script( BKT_MODULAR_THEME_SLUG .'/login-scripts', 'login_theme_data', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'site_url' => site_url(),
        ));
    }
});
