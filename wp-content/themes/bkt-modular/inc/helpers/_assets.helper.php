<?php
namespace Brooktec\Helpers;

class Assets {
    public static function getUri( $name, $parent = false ) {
        return trailingslashit( ( $parent ? \get_template_directory_uri() : \get_stylesheet_directory_uri() ) ) . "dist/img/${name}";
    }

    public static function getSrc( $name, $parent = false ) {
        return trailingslashit( ( $parent ? \get_template_directory() : \get_stylesheet_directory() ) ) . "dist/img/${name}";
    }

    public static function getSvgContents( $name, $parent = false ) {
        return @file_get_contents( self::getSrc($name, $parent) );
    }
}
