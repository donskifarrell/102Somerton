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
    <a class="header-item button tiny" href=<?php echo "\"".home_url()."\""; ?>>Home</a>
  </div>

<?php get_footer(); ?>
