<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>

  <body <?php body_class(); ?>>
    
    <!-- Site -->
    <div id="site">

      <!-- Header -->
      <header>
        <div>
          <?php if ( has_custom_logo() ): ?>
            <?php the_custom_logo(); ?>
          <?php else: ?>
            <a class="logo" href="<?php echo home_url(); ?>" title="Zur Startseite">
              <?php echo get_bloginfo('name'); ?>
            </a>
          <?php endif; ?>
          
          <div>
            <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false ) ); ?>
          </div>
        </div>
      </header>

      <!-- Content -->
      <main id="content">
