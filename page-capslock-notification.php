<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package 102Somerton
 */

get_header(); ?>

<div class="row">
	<div class="large-12 columns">

		<div class="show-for-small">	
			<h1 class="entry-title"><?php bloginfo( 'name' ); ?></h1>
		</div>


		<!-- Header Content -->

		<div class="row">
			<div class="large-6 columns">
				<img src="http://placehold.it/500x500&text=Image"><br>
			</div>

			<div class="large-6 columns">
				<div class="panel">
					<h4 class="hide-for-small">About<hr/></h4>
					<h5 class="subheader">A Windows 8 desktop application that provides on-screen notifications showing the CapsLock state</h5>
				</div>

				<div class="row">
					<div class="large-12 small-12 columns">
						<h4 class="right">Get it now!</h4>
						<hr/>
						<div class="row">
							<div class="large-12 small-12 columns">
								<h6 class="large-6 small-6 columns subheader">For $1 you get unlimited downloads and access to any future updates!</h6>
								<a class="large-6 small-6 columns large button success radius" href="<?php echo get_permalink( 36 ); ?>">
									Buy
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- End Header Content -->

		<br>

		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<!-- Thumbnails -->

					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&text=Thumbnail" />
						<h6 class="panel">Screen notification</h6>
					</div>

					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&text=Thumbnail" />
						<h6 class="panel">System Tray</h6>
					</div>

					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&text=Thumbnail" />
						<h6 class="panel">Customisation?</h6>
					</div>

					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&text=Thumbnail" />
						<h6 class="panel">How about a long desctiotion that takses asa few lines to write and see how it does?</h6>
					</div>

					<!-- End Thumbnails -->
				</div>

				<div class="row">
					<div class="small-3 small-centered columns">
						<h4>Get it now for $1! </h4>
						<a class="button success radius bottom-buy" href="<?php echo get_permalink( 36 ); ?>">Buy</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>
