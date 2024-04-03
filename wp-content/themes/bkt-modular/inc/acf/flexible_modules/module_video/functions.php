<?php

function bkt_flex_module_video_content () {
    $module_name    = basename( __DIR__ );
    $title      = get_sub_field($module_name.'_title');
    $subtitle   = get_sub_field($module_name.'_subtitle');
    $source     = get_sub_field($module_name.'_source');
    ?>
        <section class="mod-video mod-flexible">
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
                <div class="video-content">
                    <?php ($source == 'youtube') ? render_video_youtube($module_name) : render_video_file($module_name); ?>
                </div>
            </div>
        </section>
    <?php
}

function render_video_youtube($module_name) {
    $url = get_sub_field($module_name.'_url');
    $preview = get_sub_field($module_name.'_preview_image');
    ?>
        <div class="video-wrapper video-wrapper-iframe">
            <div class="bg-image" style="background-image: url(<?php echo $preview; ?>)"></div>
            <div class="play-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-play-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                </svg>
            </div>
            <?php echo $url; ?>
        </div>
    <?php
}

function render_video_file($module_name) {
    $file = get_sub_field($module_name.'_file');
    $preview = get_sub_field($module_name.'_preview_image');
    ?>
        <div class="video-wrapper">
            <div class="bg-image" style="background-image: url(<?php echo $preview; ?>)"></div>
            <div class="play-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-play-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                </svg>
            </div>
            <video class="video-player" controls autoplay="false" preload="none">
                <source src="<?php echo $file['url']; ?>" type="<?php echo $file['mime_type']; ?>">
            </video>
        </div>
    <?php
}
