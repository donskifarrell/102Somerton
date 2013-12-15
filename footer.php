<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package 102Somerton
 */
?>

    
	  <footer class="row">
	    <div class="large-12 columns">
	      <hr>
	      <div class="row">
	        <div class="large-6 columns">
	          <p>© Copyright <a href="<?php echo get_permalink( get_page_by_path( 'about-contact-us' ) ); ?>">102Somerton Ltd</a></p>
	        </div>

	        <div class="large-6 columns">
	          <ul class="inline-list right">
	            <li><a href="<?php echo get_permalink( get_page_by_path( 'about-contact-us' ) ); ?>">Contact Us</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </footer>

</div><!-- #row -->

<?php wp_footer(); ?>

</body>
</html>