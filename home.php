<?php
 get_header();
?>

<body>
	<main class="container-fluid">
		<div class="row">
			<?php get_template_part('template-parts/content/content'); ?>
		</div>


		<div class="content-banner row">
			<div class="col-md-6"><!--
      --><div style="background-color:red; width:50%; height:180px; display:inline-block;"></div><!--
      --><div style="background-color:blue; width:50%; height:180px; display:inline-block;"></div><!--
      --><div style="background-color:green; width:50%; height:180px; display:inline-block;"></div><!--
      --><div style="background-color:pink; width:50%; height:180px; display:inline-block;"></div><!--
      --></div>
			<div class="col-md-6"></div>
		</div>


		<div class="row">
      <?php get_template_part('template-parts/content/content', 'list'); ?>


			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>
	<?php
	 get_footer();
	?>
