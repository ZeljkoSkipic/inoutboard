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
		<div class="footer_top container">
			<div class="footer_top_left">
				<p class="prefix"><?php echo wp_kses_post( get_field('footer_top_prefix', 'option') ); ?></p>
				<h2 class="footer_top_title"><?php echo wp_kses_post( get_field('footer_top_title', 'option') ); ?></h2>
				<div class="footer_top_text">
					<?php echo wp_kses_post( get_field('footer_top_text', 'option') ); ?>
				</div>
			</div>
			<div class="footer_top_right">
				<?php
				$footer_top_button = get_field('footer_top_button', 'option');
				if( $footer_top_button ):
					$link_url = $footer_top_button['url'];
					$link_title = $footer_top_button['title'];
					$link_target = $footer_top_button['target'] ? $footer_top_button['target'] : '_self';
					?>
					<a class="footer_top_button btn-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="footer_main">
			<div class="container">
				<div class="footer_menu">
					<h3 class="footer_menu_title">Navigation</h3>
					<?php
						wp_nav_menu(
						array(
							'theme_location' => 'footer_navigation',
						)
						);
					?>
				</div>
				<div class="footer_menu">
					<h3 class="footer_menu_title">Features</h3>
					<?php
						wp_nav_menu(
						array(
							'theme_location' => 'footer_features',
						)
						);
					?>
				</div>
				<div class="footer_menu">
					<h3 class="footer_menu_title">Solutions</h3>
					<?php
						wp_nav_menu(
						array(
							'theme_location' => 'footer_solutions',
						)
						);
					?>
				</div>
				<div class="footer_menu">
					<h3 class="footer_menu_title">Help Center</h3>
					<?php
						wp_nav_menu(
						array(
							'theme_location' => 'footer_support',
						)
						);
					?>
				</div>
				<div class="footer_menu">
					<h3 class="footer_menu_title">Other</h3>
					<?php
						wp_nav_menu(
						array(
							'theme_location' => 'footer_other',
						)
						);
					?>
				</div>
			</div>
		</div>
		<div class="footer_bottom">
			<div class="container">
				<div class="footer_bottom_col">
					<?php
					$footer_logo = get_field('footer_logo', 'option');
					$size = 'full';
					if( $footer_logo ) {
						echo wp_get_attachment_image( $footer_logo, $size, "", array( "class" => "footer_logo" ) );
					} ?>
				</div>
				<div class="footer_bottom_col copy">
					<?php
					$above_copyright_image = get_field('above_copyright_image', 'option');
					if( $above_copyright_image ) {
						echo wp_get_attachment_image( $above_copyright_image, $size, "", array( "class" => "above_copyright_image" ) );
					} ?>
					<?php echo wp_kses_post( get_field('copy', 'option') ); ?>
				</div>
				<div class="footer_bottom_col socials">
					<a href="<?php echo wp_kses_post( get_field('linkedin', 'option') ); ?>" aria-label="LinkedIn" target="_blank">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_9747_2526)"> <path d="M19.5078 0H2.46484C1.64844 0 0.988281 0.644531 0.988281 1.44141V18.5547C0.988281 19.3516 1.64844 20 2.46484 20H19.5078C20.3242 20 20.9883 19.3516 20.9883 18.5586V1.44141C20.9883 0.644531 20.3242 0 19.5078 0ZM6.92187 17.043H3.95312V7.49609H6.92187V17.043ZM5.4375 6.19531C4.48438 6.19531 3.71484 5.42578 3.71484 4.47656C3.71484 3.52734 4.48438 2.75781 5.4375 2.75781C6.38672 2.75781 7.15625 3.52734 7.15625 4.47656C7.15625 5.42188 6.38672 6.19531 5.4375 6.19531ZM18.0312 17.043H15.0664V12.4023C15.0664 11.2969 15.0469 9.87109 13.5234 9.87109C11.9805 9.87109 11.7461 11.0781 11.7461 12.3242V17.043H8.78516V7.49609H11.6289V8.80078H11.668C12.0625 8.05078 13.0313 7.25781 14.4727 7.25781C17.4766 7.25781 18.0312 9.23438 18.0312 11.8047V17.043Z" fill="#98A2B3"/> </g> <defs> <clipPath id="clip0_9747_2526"> <rect width="20" height="20" fill="white" transform="translate(0.988281)"/> </clipPath> </defs> </svg>
					</a>
					<a href="<?php echo wp_kses_post( get_field('facebook', 'option') ); ?>" aria-label="Facebook" target="_blank">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_9747_2527)"> <path d="M20.9883 10C20.9883 4.47715 16.5111 0 10.9883 0C5.46543 0 0.988281 4.47715 0.988281 10C0.988281 14.9912 4.64512 19.1283 9.42578 19.8785V12.8906H6.88672V10H9.42578V7.79688C9.42578 5.29063 10.9188 3.90625 13.2029 3.90625C14.2967 3.90625 15.4414 4.10156 15.4414 4.10156V6.5625H14.1805C12.9383 6.5625 12.5508 7.3334 12.5508 8.125V10H15.3242L14.8809 12.8906H12.5508V19.8785C17.3314 19.1283 20.9883 14.9912 20.9883 10Z" fill="#98A2B3"/> </g> <defs> <clipPath id="clip0_9747_2527"> <rect width="20" height="20" fill="white" transform="translate(0.988281)"/> </clipPath> </defs> </svg>
					</a>
					<a href="<?php echo wp_kses_post( get_field('youtube', 'option') ); ?>" aria-label="YouTube" target="_blank">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_9747_2528)"> <path d="M20.7891 6C20.7891 6 20.5938 4.62109 19.9922 4.01563C19.2305 3.21875 18.3789 3.21484 17.9883 3.16797C15.1914 2.96484 10.9922 2.96484 10.9922 2.96484H10.9844C10.9844 2.96484 6.78516 2.96484 3.98828 3.16797C3.59766 3.21484 2.74609 3.21875 1.98438 4.01563C1.38281 4.62109 1.19141 6 1.19141 6C1.19141 6 0.988281 7.62109 0.988281 9.23828V10.7539C0.988281 12.3711 1.1875 13.9922 1.1875 13.9922C1.1875 13.9922 1.38281 15.3711 1.98047 15.9766C2.74219 16.7734 3.74219 16.7461 4.1875 16.832C5.78906 16.9844 10.9883 17.0313 10.9883 17.0313C10.9883 17.0313 15.1914 17.0234 17.9883 16.8242C18.3789 16.7773 19.2305 16.7734 19.9922 15.9766C20.5938 15.3711 20.7891 13.9922 20.7891 13.9922C20.7891 13.9922 20.9883 12.375 20.9883 10.7539V9.23828C20.9883 7.62109 20.7891 6 20.7891 6ZM8.92188 12.5938V6.97266L14.3242 9.79297L8.92188 12.5938Z" fill="#98A2B3"/> </g> <defs> <clipPath id="clip0_9747_2528"> <rect width="20" height="20" fill="white" transform="translate(0.988281)"/> </clipPath> </defs> </svg>
					</a>
					<a href="<?php echo wp_kses_post( get_field('instagram', 'option') ); ?>" aria-label="Instagram" target="_blank">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_9747_2529)"> <path d="M10.9883 1.80078C13.6602 1.80078 13.9766 1.8125 15.0273 1.85937C16.0039 1.90234 16.5313 2.06641 16.8828 2.20313C17.3477 2.38281 17.6836 2.60156 18.0313 2.94922C18.3828 3.30078 18.5977 3.63281 18.7773 4.09766C18.9141 4.44922 19.0781 4.98047 19.1211 5.95312C19.168 7.00781 19.1797 7.32422 19.1797 9.99219C19.1797 12.6641 19.168 12.9805 19.1211 14.0313C19.0781 15.0078 18.9141 15.5352 18.7773 15.8867C18.5977 16.3516 18.3789 16.6875 18.0313 17.0352C17.6797 17.3867 17.3477 17.6016 16.8828 17.7813C16.5313 17.918 16 18.082 15.0273 18.125C13.9727 18.1719 13.6563 18.1836 10.9883 18.1836C8.31641 18.1836 8 18.1719 6.94922 18.125C5.97266 18.082 5.44531 17.918 5.09375 17.7813C4.62891 17.6016 4.29297 17.3828 3.94531 17.0352C3.59375 16.6836 3.37891 16.3516 3.19922 15.8867C3.0625 15.5352 2.89844 15.0039 2.85547 14.0313C2.80859 12.9766 2.79688 12.6602 2.79688 9.99219C2.79688 7.32031 2.80859 7.00391 2.85547 5.95312C2.89844 4.97656 3.0625 4.44922 3.19922 4.09766C3.37891 3.63281 3.59766 3.29688 3.94531 2.94922C4.29688 2.59766 4.62891 2.38281 5.09375 2.20313C5.44531 2.06641 5.97656 1.90234 6.94922 1.85937C8 1.8125 8.31641 1.80078 10.9883 1.80078ZM10.9883 0C8.27344 0 7.93359 0.0117187 6.86719 0.0585938C5.80469 0.105469 5.07422 0.277344 4.44141 0.523438C3.78125 0.78125 3.22266 1.12109 2.66797 1.67969C2.10938 2.23438 1.76953 2.79297 1.51172 3.44922C1.26562 4.08594 1.09375 4.8125 1.04688 5.875C1 6.94531 0.988281 7.28516 0.988281 10C0.988281 12.7148 1 13.0547 1.04688 14.1211C1.09375 15.1836 1.26562 15.9141 1.51172 16.5469C1.76953 17.207 2.10938 17.7656 2.66797 18.3203C3.22266 18.875 3.78125 19.2188 4.4375 19.4727C5.07422 19.7188 5.80078 19.8906 6.86328 19.9375C7.92969 19.9844 8.26953 19.9961 10.9844 19.9961C13.6992 19.9961 14.0391 19.9844 15.1055 19.9375C16.168 19.8906 16.8984 19.7188 17.5313 19.4727C18.1875 19.2188 18.7461 18.875 19.3008 18.3203C19.8555 17.7656 20.1992 17.207 20.4531 16.5508C20.6992 15.9141 20.8711 15.1875 20.918 14.125C20.9648 13.0586 20.9766 12.7188 20.9766 10.0039C20.9766 7.28906 20.9648 6.94922 20.918 5.88281C20.8711 4.82031 20.6992 4.08984 20.4531 3.45703C20.207 2.79297 19.8672 2.23438 19.3086 1.67969C18.7539 1.125 18.1953 0.78125 17.5391 0.527344C16.9023 0.28125 16.1758 0.109375 15.1133 0.0625C14.043 0.0117188 13.7031 0 10.9883 0Z" fill="#98A2B3"/> <path d="M10.9883 4.86328C8.15234 4.86328 5.85156 7.16406 5.85156 10C5.85156 12.8359 8.15234 15.1367 10.9883 15.1367C13.8242 15.1367 16.125 12.8359 16.125 10C16.125 7.16406 13.8242 4.86328 10.9883 4.86328ZM10.9883 13.332C9.14844 13.332 7.65625 11.8398 7.65625 10C7.65625 8.16016 9.14844 6.66797 10.9883 6.66797C12.8281 6.66797 14.3203 8.16016 14.3203 10C14.3203 11.8398 12.8281 13.332 10.9883 13.332Z" fill="#98A2B3"/> <path d="M17.5273 4.66016C17.5273 5.32422 16.9883 5.85938 16.3281 5.85938C15.6641 5.85938 15.1289 5.32031 15.1289 4.66016C15.1289 3.99609 15.668 3.46094 16.3281 3.46094C16.9883 3.46094 17.5273 4 17.5273 4.66016Z" fill="#98A2B3"/> </g> <defs> <clipPath id="clip0_9747_2529"> <rect width="20" height="20" fill="white" transform="translate(0.988281)"/> </clipPath> </defs> </svg>
					</a>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>
