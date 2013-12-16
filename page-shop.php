<?php
/**
 * The template for displaying Shop page.
 *
 * @package 102Somerton
 */

get_header(); ?>
 

	<div class="row shop-title">
		<div class="large-12 columns">
			<div class="show-for-small">	
				<h1 class="entry-title">Shop</h1>
			</div>
			<h4>Here is a selection of our software that is available for you to buy and download.</h4>
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">

		 	<div class="entry-content">
				<?php echo do_shortcode('[downloads number="15" columns="3"]'); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', '102Somerton' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>

		<div class="verticalLine large-4 columns">
			<h4>Your Shopping Cart</h4>
			<?php echo do_shortcode('[download_cart]'); ?>
		</div>
	</div>

<?php get_footer(); ?>
