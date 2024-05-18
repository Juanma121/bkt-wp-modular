<?php

require_once(trailingslashit(__DIR__) . 'config.php');

foreach( glob( trailingslashit( __DIR__ ) . '*/init.php' ) as $config_file ) {
    require_once($config_file);
}

foreach ( glob(trailingslashit( __DIR__ ). 'templates/_*.php' ) as $config_file ) {
    require_once($config_file);
}
