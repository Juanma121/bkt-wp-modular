<?php

function bkt_flex_module_faqs_content () {
    $module_name  = basename( __DIR__ );
    $accordion_id = uniqid('accordion-', false);
    $title        = get_sub_field($module_name.'_title');
    $subtitle     = get_sub_field($module_name.'_subtitle');
    $text         = get_sub_field($module_name.'_text');
    $faqs         = get_sub_field($module_name.'_faqs');
    $alignment = get_sub_field($module_name.'_alignment');
    $padding_bottom = get_sub_field($module_name.'_padding_bottom');
    $padding_top = get_sub_field($module_name.'_padding_top');
    ?>
        <section class="mod-faqs mod-flexible mod-alignment-<?php echo $alignment; ?> mod-padding-top-<?php echo $padding_top; ?> mod-padding-bottom-<?php echo $padding_bottom; ?>">
            <div class="container">
                <?php if($title || $subtitle || $text) : ?>
                    <header class="header">
                        <?php if($title) : ?>
                            <h2 class="title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($subtitle) : ?>
                            <h3 class="subtitle"><?php echo $subtitle; ?></h3>
                        <?php endif; ?>
                        <?php if($text) : ?>
                            <div class="text">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                    </header>
                <?php endif; ?>
                <div class="accordion" id="<?php echo $accordion_id; ?>">
                    <?php
                        $i = 0;
                        foreach ($faqs as $faq) {
                            $faq_question = $faq['faq_question'];
                            $faq_answer   = $faq['faq_answer'];
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="<?php echo $accordion_id . '-heading-' . $i; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordion_id . '-collapse-' . $i; ?>" aria-expanded="true" aria-controls="<?php echo $accordion_id . '-collapse-' . $i; ?>">
                                            <?php echo $faq_question; ?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo $accordion_id . '-collapse-' . $i; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $accordion_id . '-heading-' . $i; ?>" data-bs-parent="#<?php echo $accordion_id; ?>">
                                        <div class="accordion-body">
                                        <?php echo $faq_answer; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </section>
    <?php
}
