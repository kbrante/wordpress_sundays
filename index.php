<?php get_header();?>

<body>
    <div class="row">
        <div class="col-md-12">
            <?php

            $cats = get_categories();
            foreach ($cats as $cat) {
                $args = array('category' => $cat->cat_ID);
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                    the_title('<h3>', '</h3>');
                    the_excerpt();
                    the_meta();
                    $mykey_values = get_post_custom_values('Price');
                    foreach ($mykey_values as $value) {
                    }
                }
            }
            ?>
        </div>
    </div>



    <?php get_footer();?>
