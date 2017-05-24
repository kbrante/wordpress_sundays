<?php get_header();?>

<div class="row monMain">
    <section>
        <?php

            $args = array(  'cat' => '2,3,4',
                            'posts_per_page' => -1
                        );
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
        ?>
    </div>



    <?php get_footer();?>
