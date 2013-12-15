<?php
/**
 * @package 102Somerton
 */
?>

    <div class="large-12 columns">
 
	<div class="show-for-small">	
		<h1 class="entry-title">Shop</h1>
	</div>

 	<div class="entry-content">
 		<h4>Click the purchase button to access the CapsLock Notification installation file. 
 		</h4>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '102Somerton' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
  
    </div>
