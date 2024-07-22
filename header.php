<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="theme-color" content="#00AEEF" />

	<?php echo get_field('head_script', 'option'); ?> <!-- Head External Code -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_field('body_top_script', 'option'); ?> <!-- Body Top External Code -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stier' ); ?></a>
	<header id="masthead" class="header-main">
		<div class="header-main_inner">
			<figure class="site-logo">
				<?php
				the_custom_logo(); ?>
			</figure><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<!-- Mobile Nav Button -->
				<div class="hamburger">
				<label for="nav-toggle">Navigation Menu</label>
				<input type="checkbox" class="menu-toggle" id="nav-toggle">

				<div></div></div>
				<!-- Mobile Nav Button -->
				<div class="nesto">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div class="header-main_right">
						<?php
						$nav_btn_1 = get_field('nav_btn_1', 'option');
						if( $nav_btn_1 ):
							$nav_btn_1_url = $nav_btn_1['url'];
							$nav_btn_1_title = $nav_btn_1['title'];
							$nav_btn_1_target = $nav_btn_1['target'] ? $nav_btn_1['target'] : '_self';
							?>
							<a class="btn-2 btn-icon" href="<?php echo esc_url( $nav_btn_1_url ); ?>" target="<?php echo esc_attr( $nav_btn_1_target ); ?>">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8ZM10 5C10 6.10457 9.10457 7 8 7C6.89543 7 6 6.10457 6 5C6 3.89543 6.89543 3 8 3C9.10457 3 10 3.89543 10 5ZM7.99993 9C5.98239 9 4.24394 10.195 3.45374 11.9157C4.55403 13.192 6.18265 14 7.99998 14C9.81728 14 11.4459 13.1921 12.5462 11.9158C11.756 10.195 10.0175 9 7.99993 9Z" fill="#98A2B3"/>
								</svg>
								<span><?php echo esc_html( $nav_btn_1_title ); ?></span>
							</a>
						<?php endif; ?>

						<?php
						$nav_btn_2 = get_field('nav_btn_2', 'option');
						if( $nav_btn_2 ):
							$nav_btn_2_url = $nav_btn_2['url'];
							$nav_btn_2_title = $nav_btn_2['title'];
							$nav_btn_2_target = $nav_btn_2['target'] ? $nav_btn_2['target'] : '_self';
							?>
							<a class="btn-1" href="<?php echo esc_url( $nav_btn_2_url ); ?>" target="<?php echo esc_attr( $nav_btn_2_target ); ?>">
								<span><?php echo esc_html( $nav_btn_2_title ); ?></span>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->
