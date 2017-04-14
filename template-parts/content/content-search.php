<?php
  if(have_posts()):
    while(have_posts()):the_post(); ?>

    <?php
     the_title('<h2>', '</h2>');
     the_excerpt(); ?>

<?php
   endwhile;
  endif;
?>
