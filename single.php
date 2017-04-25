<?php
 get_header();
?>

  <main class="container-fluid single-post">

    <section class="row">
      <article class="col-md-8 single-post__article">
        <?php while ( have_posts() ) : the_post(); ?>
        <h3 class="single-post__title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </article>

      <aside class="col-md-4">
        <?php get_sidebar(); ?>
      </aside>

    </section>



  </main>

<?php
 get_footer();
?>
