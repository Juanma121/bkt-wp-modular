<?php

function bkt_flex_module_distributor_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $color = get_sub_field($module_name.'_color');
    $bg_color = get_sub_field($module_name.'_bgcolor');
    $aligment = get_sub_field($module_name.'_aligment');
    ?>
        <section class="mod-distributor mod-flexible <?php echo 'bg-'. $bg_color; ?> <?php echo 'c-'. $color; ?>">
            <div class="container">
                <?php if($title || $subtitle) : ?>
                    <header class="header">
                        <?php if($title) : ?>
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($subtitle) : ?>
                            <h3><?php echo $subtitle; ?></h3>
                        <?php endif; ?>
                    </header>
                <?php endif; ?>
                <div class="content">
                    <?php echo $text; ?>
                </div>
            </div>
        </section>
    <?php
}
