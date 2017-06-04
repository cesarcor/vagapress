  <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>

    <?php if((int) current_post >= 3): ?>

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
