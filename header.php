<!DOCTYPE html>

<html lang="en">
<head>
	<title><?php echo get_the_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<?php
				if(has_custom_logo()):
				?>
				<div class="header-logo">
					<?php
					 the_custom_logo();
					?>
				</div>
			 <?php
			 else:
				 ?>
				<h1 class="header-blogname"><?php bloginfo('name'); ?></h1>
				<?php
				endif;
				      ?>
			</div>


			<div class="col-md-4 col-xs-6">

				<nav class="header-menu">
					<?php
					        wp_nav_menu( array(
					            'theme_location' => 'header-nav',
					            'container' => ''
					          ) );
					        ?>
				</nav>
			</div>


			<div class="col-md-4 col-xs-12">
				<div class="vagap-social-header">
					<a href="#" class="vagap-social-header__links vagap-social-header__links_fb"><i class="fa fa-facebook" aria-hidden="true"></i></a><!--
					--><a href="#" class="vagap-social-header__links vagap-social-header__links_tw"><i class="fa fa-twitter" aria-hidden="true"></i></a><!--
					--><a href="#" class="vagap-social-header__links vagap-social-header__links_in"><i class="fa fa-instagram" aria-hidden="true"></i></a><!--
					--><a href="#" class="vagap-social-header__links vagap-social-header__links_pi"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				</div>
				<?php get_search_form(); ?>
			</div>

		</div>
	</header>
