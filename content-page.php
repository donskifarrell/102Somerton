<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 102Somerton
 */
?>
	
	<div class="large-12 small-12 columns">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="row">
		<div class="large-9 small-12 columns">
		 	<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', '102Somerton' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
</div>
