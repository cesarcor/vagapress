<?php $home_posts_query= new WP_Query(array( 'post_count'=> 3, )); ?>


<div class="col-md-8">
    <?php if ( $home_posts_query->have_posts() ) : ?>
    <?php while ( $home_posts_query->have_posts() ) : $home_posts_query->the_post(); ?>

    <?php if((int) $home_posts_query->current_post === 0): ?>
    <article class="intro-article">
        <div class="intro-article__img">
          <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'large' );?>" class="portrait" alt=""></a>
        </div>
        <div class="post-info">
            <a href="<?php the_permalink(); ?>"><h1 class="post-info__title"><?php the_title(); ?></h1></a>
            <p>published by <span class="post-info__author"><?php the_author_posts_link(); ?></span> on <span class="post-info__date"><?php echo get_the_date();  ?></span></p>
            <?php the_excerpt(); ?>
        </div>
    </article>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="col-md-4">
    <?php if ( $home_posts_query->have_posts() ) : ?>
    <?php  $iterate_hero = 0; ?>
     <?php while ( $home_posts_query->have_posts() ) : $home_posts_query->the_post(); ?>
       <?php $iterate_hero++; ?>
      <?php if((int) $home_posts_query->current_post > 0 && (int) $home_posts_query->current_post < 3 ): ?>
        <article id="<?php echo 'intro-article-'.$iterate_hero; ?>" class="intro-article">
            <div class="intro-article__img intro-article__img_small ">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'medium' );?>" class="portrait" alt=""></a>
            </div>
            <div class="post-info">
                <a href="<?php the_permalink(); ?>"><h1 class="post-info__title post-info__title_small"><?php the_title(); ?></h1></a>
                <p>published by <span class="post-info__author"><?php the_author_posts_link(); ?></span> on <span class="post-info__date"><?php echo get_the_date();  ?></span></p>
            </div>
        </article>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
</div>
