<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	<main role="main" class="mc__main">
		<div class="container mc__container">	
			<div class="mc__content">
				<?php if ( has_nav_menu( 'primary' )) : ?>
					<div id="site-header-menu" class="mc__content--nav">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
				<div class="mc__content--details <?php if ( !is_front_page() && !is_home() ) : ?>rest-of-the-home<?php endif; ?>
				">
					<?php
					// Start the loop.
					while ( have_posts() ) :
						the_post();

						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

						// End of the loop.
					endwhile;
					?>
				</div>
			</div>
			<div class="mc__sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>	
	</main>
<?php get_footer(); ?>
