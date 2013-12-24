<?php
/**
 * The template for displaying CapsLock Notification sales page.
 *
 * @package 102Somerton
 */

get_header(); ?>

<div class="">
  <div class="large-12 columns">

    <div class="show-for-small">  
      <h1 class="entry-title">CapsLock Notification for Windows 8</h1>
    </div>


    <!-- Header Content -->

    <div class="row">
      <div class="large-6 columns">
        <a class="pics" 
        	href="<?php echo get_template_directory_uri() . '/images/capslocknotification.png'; ?>" 
        	data-lightbox="capslock" >
          <img
              alt="CapsLock Notification" 
              src="<?php echo get_template_directory_uri() . '/images/capslocknotification.png'; ?>"
          />
        </a>
      </div>

      <div class="large-6 columns">
        <div class="panel about-panel">
          <h4>About<hr/></h4>
          <h5 class="subheader"><i>CapsLock Notification</i> is a utility that allows a Windows 8 or Windows 8.1 computer to display on-screen notifications to the user describing the current state of the Capitals Lock Key - a key that determines whether alphabetic characters are in uppercase or not. It is intended to be simple and clear to use.</h5>
        </div>

        <div class="row">
          <div class="large-12 small-12 columns">
            <h4 class="right">Get it now - only $1!</h4>
            <hr/>
            <div class="row">
              <div class="large-12 small-12 columns">
                <h6 class="large-6 small-6 columns subheader">For $1 you get unlimited downloads and access to any future updates!</h6>
                <a class="large-6 small-6 columns large button success radius" 
                  href=<?php echo "\"".home_url()."/downloads/caps-lock-notification/\""; ?>>
                  Buy
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <br>

    <div class="row">

      <div class="small-12 columns">
        <h4><b>Benefits</b><hr/></h4>
        <div class="row ">
          <!-- Thumbnails -->

          <div class="large-4 small-12 columns">
            <a class="pics" href="<?php echo get_template_directory_uri() . '/images/notifications.png'; ?>" data-lightbox="capslock" >
              <img class="site-imgs"
                  alt="Notifications" 
                  src="<?php echo get_template_directory_uri() . '/images/notifications.png'; ?>"
              />
            </a>
            <h6 class="panel"><b>Notifications</b><br>When you enable or disable the Capitals key, there are clear and easy to see notifications displayed on-screen. A sound can also be played alongside to alert you.</h6>
          </div>

          <div class="large-4 small-12 columns">
            <a class="pics" href="<?php echo get_template_directory_uri() . '/images/settings.png'; ?>" data-lightbox="capslock" >
              <img class="site-imgs"
                  alt="Settings" 
                  src="<?php echo get_template_directory_uri() . '/images/settings.png'; ?>"
              />
            </a>
            <h6 class="panel"><b>Settings</b><br>The system tray icon makes it quick to disable the notifications and the notification sound. These settings are retained for when you restart the application or computer.</h6>
          </div>

          <div class="large-4 small-12 columns">           
            <a class="pics" href="<?php echo get_template_directory_uri() . '/images/taskbar.png'; ?>" data-lightbox="capslock" >
              <img class="site-imgs"
                  alt="Taskbar" 
                  src="<?php echo get_template_directory_uri() . '/images/taskbar.png'; ?>"
              />
            </a>
            <h6 class="panel"><b>System Tray</b><br>It stays out of your way! There is no need for it to be on your taskbar so CapsLock Notification adds itself as a simple tray icon, letting you know it's running.</h6>
          </div>
          <!-- End Thumbnails -->
        </div>

        <div class="row">
          <div class="small-3 small-centered columns">
            <h4>Get it now for $1! </h4>
            <a class="button success radius bottom-buy" href=<?php echo "\"".home_url()."/downloads/caps-lock-notification/\""; ?>>Buy</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
