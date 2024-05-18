<?php

foreach ( glob(trailingslashit( __DIR__ ). '_*.cpt.php' ) as $config_file ) {
    require_once($config_file);
}
