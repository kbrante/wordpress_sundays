
<?php

get_header(); ?>

        <div class="row monMain">
            <div class="col-md-12 text-center">
                <article class="">
                    <?php the_post_thumbnail(); ?>
                    <h3><a href="#"><?php the_category(); ?></a></h3>
                    <p><?php the_title(); ?></p>
                    <span><?php the_meta() ?></span>
                    <p><?php echo get_post_field("post_content") ?></p>
                    <button type="button" name="button">Ajouter au panier</button>
                </article>
            </div>
        </div>

<?php get_footer();
