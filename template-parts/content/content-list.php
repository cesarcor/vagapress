<?php $home_posts_list_query = new WP_Query(array( 'post_count'=> 5, )); ?>


<div class="col-md-9">
  <?php if ( $home_posts_list_query->have_posts() ) : ?>
   <?php while ( $home_posts_list_query->have_posts() ) : $home_posts_list_query->the_post(); ?>

    <?php if((int) $home_posts_list_query->current_post >= 3): ?>

    <div class="list-post row">
      <div class="col-md-6">
        <img src="<?php the_post_thumbnail_url( 'large' );?>" class="list-post-thumbnail" alt=""><!--
        -->
      </div>
      <div class="col-md-6">
        <div class="list-post-info">
          <a href="<?php the_permalink(); ?>"><h2 class="list-post-info__title"><?php the_title(); ?></h2></a>
          <p>published by <span class="list-post-info__author"><?php the_author_posts_link(); ?></span> -- on <span><?php echo get_the_date(); ?></span></p>
          <?php the_excerpt(); ?>
        </div>
      </div>

    </div>

    <?php endif; ?>
   <?php endwhile; ?>
  <?php endif; ?>

</div>
