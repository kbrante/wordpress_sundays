<?php
/*
Template Name: Blog
*/
?>
<?php get_header() ?>

<div class="row monMain">
    <div class="col-md-12 text-center">
<?php

    $args = array(  'cat' => '5',
                    'posts_per_page' => -1
                );
    $posts = get_posts($args);
    foreach ($posts as $post) {
        setup_postdata($post);
        ?>
        <article class="text-center">
            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
            <p><?php the_content() ?></p>
        </article>
        <?php
    }
?>
</div>
</div>


<?php get_footer() ?>
