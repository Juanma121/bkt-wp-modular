<?php

function bkt_flex_module_timeline_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $blocks = get_sub_field($module_name.'_time_blocks');
    ?>
        <section class="mod-timeline">
            <div class="container">
                <div class="mod-content row no-gutters align-items-center">
                    <div class="col-md-6">
                        <div class="container text-wrapper text-center">
                            <h2 class="small-title text-center"><?php echo $title; ?></h2>
                            <h3 class="big-title text-center"><?php echo $subtitle; ?></h3>
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
