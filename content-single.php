<?php
/**
 * Will show list of posts
 *
 * @package 102Somerton
 */
?>

<div class="large-12 columns">
 
	<div class="show-for-small">	
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>

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
