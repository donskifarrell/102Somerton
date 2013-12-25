<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 102Somerton
 */
?>

	<h1 class="entry-title"><?php the_title(); ?>-COntent-Page</h1>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '102Somerton' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	