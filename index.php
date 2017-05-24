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
                    <?php the_post_thumbnail(); ?>
                    <h3><a href=""><?php the_category(); ?></a></h3>
                    <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                    <span><?php the_meta(); ?></span>
                </article>
                <?php
            }
        ?>
    </div>



    <?php get_footer();?>
