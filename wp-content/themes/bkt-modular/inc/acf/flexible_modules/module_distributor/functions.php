<?php

function bkt_flex_module_distributor_content () {
    $module_name = basename( __DIR__ );
    $title = get_sub_field($module_name.'_title');
    $subtitle = get_sub_field($module_name.'_subtitle');
    $text = get_sub_field($module_name.'_text');
    $row_items = get_sub_field($module_name.'_row_items');
    $mode = get_sub_field($module_name.'_mode');
    $max_items = get_sub_field($module_name.'_max_items');
    $btn_link = get_sub_field($module_name.'_btn_link');
    $btn_type = get_sub_field($module_name.'_btn_type');
    $posts = array();
    if ($mode == 'manual') {
        $posts = get_sub_field($module_name.'_posts');
    } else {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $max_items,
        );
        $data = new WP_Query( $args );
        $posts = $data->posts;
    }
    if (!is_array($posts) || count($posts)<1) {
        return;
    }
    $col_width = 12/$row_items;

    ?>
        <section class="mod-distributor mod-flexible">
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
                <div class="content">
                    <?php echo $text; ?>
                </div>
                <div class="row items items-posts">
                    <?php
                        foreach($posts as $post) {
                            $post = (array) $post;
                            $link = get_permalink($post['ID']);
                            $image = get_the_post_thumbnail_url($post['ID']);
                            $categories = get_the_category($post['ID']);
                            ?>
                            <div class="col-12 col-lg-<?php echo $col_width; ?>">
                                <article class="item item-post">
                                    <a href="<?php echo $link; ?>" class="link-block">
                                        <div class="item-image">
                                            <div class="image bg-image" style="background-image: url(<?php echo $image;?>)"></div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-categories">
                                                <?php
                                                    if (is_array($categories)){
                                                        foreach($categories as $category) {
                                                            if ('1' !== strtolower($category->term_id)) {
                                                                ?>
                                                                    <div class="item-category"><?php echo $category->name; ?></div>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </div>
                                            <div class="item-title"><?php echo get_the_title($post['ID']); ?></div>
                                            <div class="item-excerpt"><?php echo get_the_excerpt($post['ID']); ?></div>
                                            <div class="item-author"><?php echo get_the_author_meta('display_name', $post['post_author'])?></div>
                                            <div class="item-date"><?php echo get_the_date( 'd F Y' ); ?></div>
                                        </div>
                                        <div class="item-footer"></div>
                                    </a>
                                </article>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <?php
                    if (is_array($btn_link) && $btn_link['url']) {
                        ?>
                            <div class="show-more">
                                <a target="<?php echo $btn_link['target']; ?>" class="<?php echo $btn_type; ?>" href=<?php echo $btn_link['url']; ?>>
                                    <?php echo ( $btn_link['title'] ) ? $btn_link['title'] : __('Show more', BKT_MODULAR_THEME_LANG_DOMINE); ?>
                                </a>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </section>
    <?php
}
