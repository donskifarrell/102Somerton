<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package 102Somerton
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', '102Somerton' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the buttons below?', '102Somerton' ); ?></p>

					<ul class="inline-list">
					  <li><a class="button secondary" href=<?php echo "\"".home_url()."\""; ?>>Home</a></li>
					  <li><a class="button secondary" href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></li>
					  <li><a class="button secondary" href="<?php echo get_permalink( get_page_by_path( 'about-contact-us' ) ); ?>">About Us</a></li>
					</ul>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
