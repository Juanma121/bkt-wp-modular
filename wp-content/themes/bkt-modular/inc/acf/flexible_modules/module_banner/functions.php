<?php

function bkt_flex_module_banner_content () {
    $module_name = basename( __DIR__ );
    $bg_image = get_sub_field($module_name.'_bg_image');
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $link = get_sub_field($module_name.'_btn_link');
    $btn_type = get_sub_field($module_name.'_btn_type');
    $bg_color = get_sub_field($module_name.'_bgcolor');
    ?>
        <section class="mod-banner mod-flexible <?php echo $bg_color; ?>">
            <div class="content">
                <div class="image-wrapper" style="background-image: url('<?php echo $bg_image;?>');">
                    <div class="container text-wrapper">
                        <?php if($title) :?>
                            <h2 class="small-title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($subtitle) :?>
                            <h3 class="big-title"><?php echo $subtitle; ?></h3>
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
