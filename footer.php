<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer_inner c-wide">
			<div class="col">
				<h3 class="footer_title">Let's build <br>an S-Tier project</h3>
			</div>
			<div class="col">
				<div class="btns">
					<a class="btn btn-1" target="_blank" href="https://stierdev.com/contact/#start-a-project">Get Started</a>
					<a class="btn btn-2" target="_blank" href="https://stierdev.com/web-development/">Learn More</a>
				</div>
			</div>
			<div class="col">
				<a href="https://stierdev.com/" target="_blank" rel="home">
					<img src="https://stierdev.com/wp-content/uploads/2023/09/s-tier-dev-logo-white.svg" width="250" height="80 " alt="S Tier Dev Footer Logo">
				</a>
			</div>
			<div class="col">
				<h4>Menu</h4>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer-menu',
						)
					);
				?>
			</div>
			<div class="col">
				<h4>Services</h4>
				<ul id="services-menu" class="menu">
					<li><a target="_blank" href="https://stierdev.com/web-development/">Web Development</a></li>
					<li><a target="_blank" href="https://stierdev.com/wordpress-development/">WordPress Development</a></li>
					<li><a target="_blank" href="https://stierdev.com/website-maintenance/">Website Maintenance</a></li>
					<li><a target="_blank" href="https://stierdev.com/website-performance/">Website Performance</a></li>
				</ul>
			</div>
			<div class="col">
				<h4>Say Hello</h4>
				<a href="mailto:office@stierdev.com">office@stierdev.com</a>
			</div>
			<div class="col">
				© 2023 S-Tier Dev Digital Agency
			</div>
			<div class="col">
				<a href="#top" aria-label="Back To Top"><img src="/wp-content/themes/s-playground/assets/images/up.png" alt="Back to top"  width="35" height="35"></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
