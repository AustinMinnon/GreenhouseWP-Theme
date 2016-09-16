<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenhouse
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo get_bloginfo( 'name'); ?></a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php wp_nav_menu( array( 'items_wrap' => '%3$s' , 'sort_column' => 'menu_order',  'menu' => 'MainMenu', 'container' => '' , 'menu_class' => 'nav navbar-nav' ,'theme_location' => 'primary-menu', ) ); ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seasons <span class="caret"></span></a>


						<?php wp_nav_menu( array( 'sort_column' => 'menu_order',  'menu' => 'SecondaryMenu', 'container_id' => 'dropdown' , 'container_class' => 'dropdown-menu dropdown-menu-left', 'menu_class' => 'secondary-ul' ,'theme_location' => 'primary-menu', ) ); ?>

					</li>
					</ul>
				<ul class="nav navbar-nav navbar-right">

				</ul>
			</div>
		</div>
	</nav>




	<!-- Header Image  -->
	<section>
		<img class="featured__Image" src="<?php header_image(); ?>" />
	</section>

	<div id="content" class="site-content">
