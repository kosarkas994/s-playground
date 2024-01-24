<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="theme-color" content="#45eba5" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stier' ); ?></a>
	<?php if( get_field('top_bar_message', 'option') ) { ?>
	<div class="top_bar">
		<div class="top_bar_inner container">
		<?php esc_html_e(the_field('top_bar_message', 'option') ) ?>
		<?php
		$cta_link = get_field('cta_link', 'option');
		if( $cta_link ):
			$cta_link_url = $cta_link['url'];
			$cta_link_title = $cta_link['title'];
			$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>
			<a class="" href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>"><span><?php echo esc_html( $cta_link_title ); ?></span></a>
		<?php endif; ?>
	</div>
	</div>
	<?php } ?>
	<header id="masthead" class="header-main container">
		<figure class="site-logo">
			<a href="https://stierdev.com/" target="_blank" class="custom-logo-link" rel="home" aria-current="page"><img src="https://stierdev.com/wp-content/uploads/2023/09/s-tier-dev-logo.svg" class="custom-logo entered lazyloaded" alt="S Tier Dev" decoding="async" fetchpriority="high" data-lazy-src="https://stierdev.com/wp-content/uploads/2023/09/s-tier-dev-logo.svg" data-ll-status="loaded"><noscript><img width="3270" height="1050" src="https://stierdev.com/wp-content/uploads/2023/09/s-tier-dev-logo.svg" class="custom-logo" alt="S Tier Dev" decoding="async" fetchpriority="high" /></noscript></a>
		</figure>

		<nav id="site-navigation" class="main-navigation">
				<!-- Mobile Nav Button -->
				<div class="hamburger">
				<label for="nav-toggle">Navigation Menu</label>
				<input type="checkbox" class="menu-toggle" id="nav-toggle">

				<div></div></div>
				<!-- Mobile Nav Button -->
				<div class="menu-main-container"><ul id="primary-menu" class="menu"><li id="menu-item-1075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-1075"><a href="https://stierdev.com/" aria-current="page">Home</a></li>

					<li class="menu-item"><a target="_blank" href="https://stierdev.com/about-us/">About Us</a></li>
					<li class="menu-item"><a target="_blank" href="https://stierdev.com/web-development/">Web Development</a></li>
					<li class="menu-item"><a target="_blank"  href="https://stierdev.com/website-maintenance/">Website Maintenance</a></li>
					<li class="menu-item"><a target="_blank"  href="https://stierdev.com/contact/">Contact</a></li>
					</ul>
				</div>
			</nav>
			<div class="nav_btn"><a class="btn btn-1" target="_blank" href="https://stierdev.com/contact#start-a-project">Start a Project</a></div>
	</header><!-- #masthead -->
