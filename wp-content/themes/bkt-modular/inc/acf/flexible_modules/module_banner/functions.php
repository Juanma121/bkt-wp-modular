<?php

function bkt_flex_module_banner_content () {
    $module_name = basename( __DIR__ );
    $bg_image = get_sub_field($module_name.'_bg_image');
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $link = get_sub_field($module_name.'_btn_link');
    $btn_type = get_sub_field($module_name.'_btn_type');
    $alignment = get_sub_field($module_name.'_alignment');
    $padding_bottom = get_sub_field($module_name.'_padding_bottom');
    $padding_top = get_sub_field($module_name.'_padding_top');
    ?>
        <section class="mod-banner mod-flexible mod-alignment-<?php echo $alignment; ?> mod-padding-top-<?php echo $padding_top; ?> mod-padding-bottom-<?php echo $padding_bottom; ?>">
            <div class="content">
                <div class="image-wrapper" style="background-image: url('<?php echo $bg_image;?>');">
                    <div class="container text-wrapper">
                        <?php if($title || $subtitle) :?>
                            <header class="header">
                                <?php if($title) :?>
                                    <h2 class="title"><?php echo $title; ?></h2>
                                <?php endif; ?>
                                <?php if($subtitle) :?>
                                    <div class="subtitle"><?php echo $subtitle; ?></div>
                                <?php endif; ?>
                            </header>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="text"><?php echo $text; ?></div>
                        <?php endif; ?>
                        <?php
                            if (is_array($link) && $link['url']) :
                                ?>
                                    <a target="<?php echo $link['target']; ?>" class="<?php echo $btn_type; ?>" href=<?php echo $link['url']; ?>>
                                        <?php echo ( $link['title'] ) ? $link['title'] : __('Ver más', BKT_MODULAR_THEME_LANG_DOMINE); ?>
                                    </a>
                                <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
