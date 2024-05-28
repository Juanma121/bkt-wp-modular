<?php

function bkt_flex_module_timeline_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $blocks = get_sub_field($module_name.'_time_blocks');
    ?>
        <section class="mod-timeline mod-flexible">
            <div class="container">
                <div class="mod-content row no-gutters align-items-center">
                    <div class="col-md-6">
                        <div class="container text-wrapper text-center">
                            <h2 class="title"><?php echo $title; ?></h2>
                            <div class="subtitle"><?php echo $subtitle; ?></div>
                            <?php
                                echo $blocks;
                                if ((is_array($blocks)) && (count($blocks) > 0) ) :
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
