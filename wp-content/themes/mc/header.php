<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="only-tab">
	<div class="container mc__container">
		<div class="mc__logo">
			<?php twentysixteen_the_custom_logo(); ?>
		</div>
		<?php if ( has_nav_menu( 'primary' )) : ?>
			<div class="header__humberg"> 
				<span class="icon-bar icon-bar-a"></span>
				<span class="icon-bar icon-bar-b"></span>
				<span class="icon-bar icon-bar-c"></span>
			</div>
		<?php endif; ?>
	</div>
</header>