<!DOCTYPE html>

<html lang="en">
<head>
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header container-fluid">
		<div class="row">
			<div class="col-md-4">
				<?php
				      the_custom_logo();

				      if(!the_custom_logo()):
				      ?>

				<h1 class="header-blogname"><?php bloginfo('name'); ?>
				</h1>
				<?php
				      endif;
				      ?>
			</div>


			<div class="col-md-4">
				<nav class="header-menu">
					<?php
					        wp_nav_menu( array(
					            'theme_location' => 'header-nav',
					            'container' => ''
					          ) );
					        ?>
				</nav>
			</div>


			<div class="col-md-4">
				<?php get_search_form(); ?>
			</div>

		</div>
	</header>
