<?php

function bkt_flex_module_text_image_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $image = get_sub_field($module_name.'_image');
    $alignment = get_sub_field($module_name.'_alignment');
    $padding_bottom = get_sub_field($module_name.'_padding_bottom');
    $padding_top = get_sub_field($module_name.'_padding_top');
    $blocks_alignment = get_sub_field($module_name.'_blocks_alignment');
    ?>
        <section class="mod-text-image mod-flexible mod-alignment-<?php echo $alignment; ?> mod-padding-top-<?php echo $padding_top; ?> mod-padding-bottom-<?php echo $padding_bottom; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php if ($blocks_alignment == 'left'): ?>
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
                        <?php else : ?>
                            <div class="img-wrapper"><?php echo wp_get_attachment_image( $image, 'large' ); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php if ($blocks_alignment == 'left'): ?>
                            <div class="img-wrapper"><?php echo wp_get_attachment_image( $image, 'large' ); ?></div>
                        <?php else : ?>
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
}

