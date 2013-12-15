<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 102Somerton
 */

get_header(); ?> 
 
  <div class="row">
    <div class="large-12 columns">
 
 
    <!-- Desktop Slider -->
 
      <div class="show-for-small">
        <div id="featured">
              <img src="http://placehold.it/1000x400&text=Title Image" alt="title image">
          </div>
        </div>
 
    <!-- End Desktop Slider -->
 
    </div>
  </div><br>
  
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
    <!-- Content -->
 
        <div class="large-8 columns">
          <div class="panel radius">
 
          <div class="row">
          <div class="large-6 small-6 columns">
            <div class="site-branding">
              <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
            </div>
            <hr/>
            <h5 class="subheader">
              A Windows 8 desktop application that provides on-screen notifications showing the CapsLock state
            </h5>
 
          </div>
          <div class="large-6 small-6 columns">
 
            <p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.
          </p>
        </div>
 
        </div>
        </div>
        </div>
 
        <div class="large-4 columns hide-for-small">
 
          <h4>Get it now!</h4>
          <hr/>
          <h5>For $1 you get unlimited downloads and access to any future updates!</h5>
          <a class="large button success expand radius" href="<?php echo get_permalink( 36 ); ?>">
            Buy
          </a>
        </div>
 
    <!-- End Content -->
 
      </div>
    </div>
  </div>

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
        <div class="large-4 columns">
        </div>
        <div class="large-8 columns">
          <h4>Get it now for $1! </h4>
          <a class="button success radius bottom-buy" href="<?php echo get_permalink( 36 ); ?>">Buy</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
