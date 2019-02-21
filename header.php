<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		  <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	  <?php endif; ?>

    <div class="menu-reveal reveal full" id="menuModal" data-reveal>
      <nav class="menu-sign">
        <a href="#" class="in-menu" data-close>
          status reasearch platform
        </a>
      </nav>
      
      <div class="main-container">
        <div class="main-grid">
          <div class="main-content without-sidebar">
            <nav class="lang-switch">
              <ul>
                <?php pll_the_languages( array('display_names_as' => 'slug') ); ?>
              </ul>
            </nav>
            
            <nav class="links">
              <h1><a href="/"><?php pll_e('Home'); ?></a></h1>
              <h1><a href="<?php srp_the_permalink_by_path('about'); ?>"><?php pll_e('About'); ?></a></h1>
              <h1><a href="<?php srp_the_permalink_by_path('community'); ?>"><?php pll_e('Community'); ?></a></h1>
              <?php get_search_form(); ?>
            </nav>

            <nav class="bottom-links">
              <div class="bottom-links-container">
                <h3><a href="mailto:info@statusproject.net"><?php pll_e('Contact us'); ?></a></h3>
                <h3><a><?php pll_e('Disclaimer'); ?></a></h3>
                <h3><a><?php pll_e('Terms of Use'); ?></a></h3>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="menu-sign">
      <a href="#" data-toggle="menuModal">
        status reasearch platform
      </a>
    </nav>
    

	  <!-- <header class="site-header" role="banner"> -->
	  <!-- 	<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>> -->
	  <!-- 		<div class="title-bar-left"> -->
	  <!-- 			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button> -->
	  <!-- 			<span class="site-mobile-title title-bar-title"> -->
	  <!-- 				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->
	  <!-- 			</span> -->
	  <!-- 		</div> -->
	  <!-- 	</div> -->

	  <!-- 	<nav class="site-navigation top-bar" role="navigation"> -->
	  <!-- 		<div class="top-bar-left"> -->
	  <!-- 			<div class="site-desktop-title top-bar-title"> -->
	  <!-- 				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->
	  <!-- 			</div> -->
	  <!-- 		</div> -->
	  <!-- 		<div class="top-bar-right"> -->
	  <!-- 			<?php foundationpress_top_bar_r(); ?> -->

	  <!-- 			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?> -->
	  <!-- 				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?> -->
	  <!-- 			<?php endif; ?> -->
	  <!-- 		</div> -->
	  <!-- 	</nav> -->

	  <!-- </header> -->
