<?php

function bkt_flex_module_text_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $alignment = get_sub_field($module_name.'_alignment');
    $padding_bottom = get_sub_field($module_name.'_padding_bottom');
    $padding_top = get_sub_field($module_name.'_padding_top');
    ?>
        <section class="mod-text mod-flexible mod-alignment-<?php echo $alignment; ?> mod-padding-top-<?php echo $padding_top; ?> mod-padding-bottom-<?php echo $padding_bottom; ?>">
            <div class="container">
                <?php if($title || $subtitle) : ?>
                    <header class="header">
                        <?php if($title) : ?>
                            <h2 class="title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($subtitle) : ?>
                            <div class="subtitle"><?php echo $subtitle; ?></div>
                        <?php endif; ?>
                    </header>
                <?php endif; ?>
                <div class="content">
                    <div class="text"><?php echo $text; ?></div>
                </div>
            </div>
        </section>
    <?php
}
