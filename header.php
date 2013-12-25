<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package 102Somerton
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>102Somerton.com</title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="icon" href="<?php echo get_template_directory_uri() . '/favicon.ico'; ?>" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.ico'; ?>" type="image/x-icon" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
  
  <div class="row">
    <h1 class="header-title text-center">
      <a class="header-title-link" href=<?php echo "\"".home_url()."\""; ?>>
        <span class="header-102">102</span>/<span class="header-somerton">SomeRton</span>          
      </a>
    </h1>
  </div>

  <div class="row">
    <div class="clearfix">
      <ul class="inline-list right header-links">
        <li class="header-list-item">
          <a class="header-item button tiny" 
             href=<?php echo "\"".home_url()."\""; ?>>Home</a>
        </li>

        <li class="header-list-item">
          <a class="header-item button tiny" 
             href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a>
        </li>
      </ul>
    </div>

    <hr class="header-breaker"/>
  </div>

<div class="row">