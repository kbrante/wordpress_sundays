<?php get_header();?>

<div class="row monMain">
    <section>
        <?php

        $cats = get_categories();
        foreach ($cats as $cat) {
            $args = array('category' => $cat->cat_ID);
?>
            <?php
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <article class="">
                    <img src="http://lorempixel.com/100/200" />
                    <h3><a href=""><?php the_category(); ?></a></h3>
                    <p><?php the_title(); ?></p>
                    <span><?php the_meta(); ?></span>
                </article>
                <?php
            }
        }
        ?>
    </div>



    <?php get_footer();?>
