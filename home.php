<?php
 get_header();
?>

	<main class="container-fluid">
		<div class="row">
			<?php get_template_part('template-parts/content/content-hero'); ?>
		</div>


		<div class="content-banner row">
			<div class="col-md-6">
        <?php
         dynamic_sidebar('hp-wa-1');
        ?>
			<div class="col-md-6">
        <?php
         dynamic_sidebar('hp-wa-2');
        ?>
			</div>
		</div>


		<div class="row">
      <?php get_template_part('template-parts/content/content-list', 'list'); ?>


			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</main>


<?php
	get_footer();
?>
