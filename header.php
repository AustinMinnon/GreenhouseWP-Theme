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
		<!-- Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						Start Bootstrap
					</a>
				</li>
				<li>
					<a href="#">Dashboard</a>
				</li>
				<li>
					<a href="#">Shortcuts</a>
				</li>
				<li>
					<a href="#">Overview</a>
				</li>
				<li>
					<a href="#">Events</a>
				</li>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Services</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</div>
			<!-- /#sidebar-wrapper -->
			<!-- Page Content Wrapper -->
		<div id="page-content-wrapper">
		            <div class="container-fluid">
		                <div class="row">
		                    <div class="col-lg-12">
		                        <h1>Simple Sidebar</h1>
		                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
		                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
		                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
		                    </div>
		                </div>
		            </div>


	<div id="page" class="site">

		<!-- Header Image  -->
		<!-- <section>
			<img class="header-image" src="<?php header_image(); ?>" />
		</section> -->

		<div id="content" class="site-content">
