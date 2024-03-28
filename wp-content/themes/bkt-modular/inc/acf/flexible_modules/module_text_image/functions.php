<?php

function bkt_flex_module_text_image_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $image = get_sub_field($module_name.'_image');
    $color = get_sub_field($module_name.'_color');
    $bg_color = get_sub_field($module_name.'_bgcolor');
    $aligment = get_sub_field($module_name.'_aligment');
    $blocks_alignment = get_sub_field($module_name.'_blocks_alignment');
    ?>
        <section class="mod-text-image <?php echo 'bg-'. $bg_color; ?> <?php echo 'c-'. $color; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php if ($blocks_alignment == 'left'): ?>
                            <?php if($title) : ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <?php if($subtitle) : ?>
                                <h3><?php echo $subtitle; ?></h3>
                            <?php endif; ?>
                            <?php echo $text; ?>
                        <?php else : ?>
                            <div class="img-wrapper"><?php echo wp_get_attachment_image( $image, 'large' ); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php if ($blocks_alignment == 'left'): ?>
                            <div class="img-wrapper"><?php echo wp_get_attachment_image( $image, 'large' ); ?></div>
                        <?php else : ?>
                            <?php if($title) : ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <?php if($subtitle) : ?>
                                <h3><?php echo $subtitle; ?></h3>
                            <?php endif; ?>
                            <?php echo $text; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
}

