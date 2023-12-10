<?php

function bkt_flex_module_banner_content () {
    $module_name = basename( __DIR__ );
    $image = get_sub_field($module_name.'_image');
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $link = get_sub_field($module_name.'_btn_link');
    $bg_color = get_sub_field($module_name.'_bgcolor');
    ?>
        <section class="mod-banner <?php echo $bg_color; ?>">
            <div class="container">
                <div class="mod-content row no-gutters align-items-center">
                    <div class="col-md-6">
                        <div class="container text-wrapper text-center">
                            <h2 class="small-title text-center"><?php echo $title; ?></h2>
                            <h3 class="big-title text-center"><?php echo $subtitle; ?></h3>
                            <?php
                                if ($link['url']) :
                                    ?>
                                        <a target="<?php echo $link['target']; ?>" class="btn white-btn" href=<?php echo $link['url']; ?>>
                                            <?php echo ( $link['title'] ) ? $link['title'] : __('Ver más', BKT_MODULAR_THEME_LANG_DOMINE); ?>
                                        </a>
                                    <?php
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-wrapper" style="background-image: url('<?php echo $image;?>');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
