<?php

function bkt_flex_module_script_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $script = get_sub_field($module_name.'_script');
    $aligment = get_sub_field($module_name.'_aligment');
    ?>
        <section class="mod-script mod-flexible">
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
                    <?php echo $script; ?>
                </div>
            </div>
        </section>
    <?php
}
