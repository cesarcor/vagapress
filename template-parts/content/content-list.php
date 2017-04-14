<?php $home_posts_list_query = new WP_Query(array( 'post_count'=> 5, )); ?>


<div class="col-md-9">
  <?php if ( $home_posts_list_query->have_posts() ) : ?>
   <?php while ( $home_posts_list_query->have_posts() ) : $home_posts_list_query->the_post(); ?>

    <?php if((int) $home_posts_list_query->current_post >= 3): ?>

    <div class="list-post">
      <img src="<?php the_post_thumbnail_url( 'large' );?>" class="list-post-thumbnail" alt=""><!--
      --><div class="list-post-info">
        <h2 class="list-post-info__title"><?php the_title(); ?></h2>
        <p>published by <span class="list-post-info__author"><?php the_author_posts_link(); ?></span>
        <?php the_excerpt(); ?>
      </div>
    </div>

    <?php endif; ?>
   <?php endwhile; ?>
  <?php endif; ?>

</div>
