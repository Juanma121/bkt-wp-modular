<?php

function bkt_flex_module_hero_content () {
    $module_name    = basename( __DIR__ );
    $mode           = get_sub_field($module_name.'_mode');
    ?>
        <section class="mod-hero mod-flexible">
            <?php ($mode == 'simple') ? render_hero_simple($module_name) : render_hero_slider($module_name); ?>
        </section>
    <?php
}

function render_hero_simple ($module_name) {
    $bg_image   = get_sub_field($module_name.'_background_image');
    $title      = get_sub_field($module_name.'_title');
    $subtitle   = get_sub_field($module_name.'_subtitle');
    $text       = get_sub_field($module_name.'_text');
    ?>
        <div class="hero-bg">
            <div class="background-wrapper" style="background-image: url(<?php echo $bg_image; ?>);"></div>
            <div class="container container-hero">
                <div class="text-content">
                    <header>
                        <?php if($title): ?>
                            <h1 class="title"><?php echo $title; ?></h1>
                        <?php endif; ?>
                        <?php if($subtitle): ?>
                            <div class="subtitle"><?php echo $subtitle; ?></div>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="text"><?php echo $text; ?></div>
                        <?php endif; ?>
                    </header>
                </div>
            </div>
        </div>
    <?php
}

function render_hero_slider ($module_name) {
    $slider_controls    = get_sub_field($module_name.'_slider_controls');
    $slider_indicators  = get_sub_field($module_name.'_slider_indicators');
    $slides             = get_sub_field($module_name.'_slides');
    $carousel_id        = uniqid('carousel-', false);
    $interval           = get_sub_field($module_name.'_slider_interval') * 1000;
    $wrap               = get_sub_field($module_name.'_slider_wrap');
    ?>
        <div id="<?php echo $carousel_id; ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo $interval ? : '5000';?>" data-bs-wrap=<?php echo $wrap ? 'true' : 'false';?>>
            <?php if ($slider_indicators) : ?>
                <div class="carousel-indicators">
                    <?php for($i=0; $i<count($slides); $i++): ?>
                        <button type="button" data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i==0 ? 'active' : ''; ?>"></button>
                    <?php endfor; ?>
                    </div>
            <?php endif; ?>
            <div class="carousel-inner">
                <?php
                    $i = 0;
                    foreach($slides as $slide) {
                        $slide_title    = $slide['slide_title'];
                        $slide_subtitle = $slide['slide_subtitle'];
                        $slide_text     = $slide['slide_text'];
                        $slide_bg_image = $slide['slide_background_image']['url'];
                        ?>
                            <div class="carousel-item <?php echo $i==0 ? 'active' : '';  ?>">
                                <div class="carousel-item-bg" style="background-image: url(<?php echo $slide_bg_image; ?>);"></div>
                                <div class="carousel-text-slide">
                                    <div class="container">
                                        <div class="text-content">
                                            <header>
                                                <?php if($slide_title): ?>
                                                    <h1 class="title"><?php echo $slide_title; ?></h1>
                                                <?php endif; ?>
                                                <?php if($slide_subtitle): ?>
                                                    <div class="subtitle"><?php echo $slide_subtitle; ?></div>
                                                <?php endif; ?>
                                                <?php if($slide_text): ?>
                                                    <div class="text"><?php echo $slide_text; ?></div>
                                                <?php endif; ?>
                                            </header>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        $i++;
                    }
                ?>
            </div>
            <?php if ($slider_controls) : ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            <?php endif; ?>
        </div>
    <?php
}
