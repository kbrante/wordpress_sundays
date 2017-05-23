<?php
foreach ($posts as $post) {

    setup_postdata($post);
    ?>
    <h3><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php edit_post_link('Editer');?> </p>
    <?php  get_post_meta( $key = 'Date debut')
     ?>
    <p><?php the_content(); ?></p>

    <?php } ?>
