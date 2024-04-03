<?php

function bkt_flex_module_separator_content () {
    $module_name = basename( __DIR__ );
    $desktop = get_sub_field($module_name.'_desktop');
    $mobile = get_sub_field($module_name.'_mobile');
    ?>
        <section class="mod-separator mod-flexible <?php echo $desktop  . ' ' . $mobile; ?>"></section>
    <?php
}
