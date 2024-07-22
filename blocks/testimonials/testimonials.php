<?php
$cols = get_field_object('columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');

$padding = get_field_object('padding');

$class = 'st_block st_testimonials';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $class .=  ' ' . $mob_cols['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

?>

<section class="<?php echo $class ?>">
	<div class="container">
		<?php get_template_part('components/intro'); ?>
        <div class="st_testimonials_inner">
        <?php
            // Columns repeater
            if( have_rows('testimonials') ):

                while( have_rows('testimonials') ) : the_row();

				$person_name = get_sub_field('person_name');
				$position = get_sub_field('position');
                $testimonial = get_sub_field('testimonial');
				$person_image = get_sub_field('person_image');
                $size = 'full'; ?>
                <div class="st_testimonial column">
					<div class="st_testimonial_top">
						<figure class="left">
							<?php
							if( $person_image ) {
								echo wp_get_attachment_image( $person_image, $size, "", array( "class" => "person_image" ) );
							} ?>
						</figure>
						<div class="right">
							<h3 class="st_person_name"><?php echo $person_name; ?></h3>
							<p class="position"><?php echo $position; ?></p>
						</div>
					</div>
					<svg width="116" height="20" viewBox="0 0 116 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_7967_9904)"> <path d="M9.53834 1.60996C9.70914 1.19932 10.2909 1.19932 10.4617 1.60996L12.5278 6.57744C12.5998 6.75056 12.7626 6.86885 12.9495 6.88383L18.3123 7.31376C18.7556 7.3493 18.9354 7.90256 18.5976 8.19189L14.5117 11.6919C14.3693 11.8139 14.3071 12.0053 14.3506 12.1876L15.5989 17.4208C15.7021 17.8534 15.2315 18.1954 14.8519 17.9635L10.2606 15.1592C10.1006 15.0615 9.89938 15.0615 9.73937 15.1592L5.14806 17.9635C4.76851 18.1954 4.29788 17.8534 4.40108 17.4208L5.64939 12.1876C5.69289 12.0053 5.6307 11.8139 5.48831 11.6919L1.40241 8.19189C1.06464 7.90256 1.24441 7.3493 1.68773 7.31376L7.05054 6.88383C7.23744 6.86885 7.40024 6.75056 7.47225 6.57744L9.53834 1.60996Z" fill="#F2F4F7"/> <g clip-path="url(#clip1_7967_9904)"> <path d="M9.53834 1.60996C9.70914 1.19932 10.2909 1.19932 10.4617 1.60996L12.5278 6.57744C12.5998 6.75056 12.7626 6.86885 12.9495 6.88383L18.3123 7.31376C18.7556 7.3493 18.9354 7.90256 18.5976 8.19189L14.5117 11.6919C14.3693 11.8139 14.3071 12.0053 14.3506 12.1876L15.5989 17.4208C15.7021 17.8534 15.2315 18.1954 14.8519 17.9635L10.2606 15.1592C10.1006 15.0615 9.89938 15.0615 9.73937 15.1592L5.14806 17.9635C4.76851 18.1954 4.29788 17.8534 4.40108 17.4208L5.64939 12.1876C5.69289 12.0053 5.6307 11.8139 5.48831 11.6919L1.40241 8.19189C1.06464 7.90256 1.24441 7.3493 1.68773 7.31376L7.05054 6.88383C7.23744 6.86885 7.40024 6.75056 7.47225 6.57744L9.53834 1.60996Z" fill="#FEC84B"/> </g> </g> <g clip-path="url(#clip2_7967_9904)"> <path d="M33.5383 1.60996C33.7091 1.19932 34.2909 1.19932 34.4617 1.60996L36.5278 6.57744C36.5998 6.75056 36.7626 6.86885 36.9495 6.88383L42.3123 7.31376C42.7556 7.3493 42.9354 7.90256 42.5976 8.19189L38.5117 11.6919C38.3693 11.8139 38.3071 12.0053 38.3506 12.1876L39.5989 17.4208C39.7021 17.8534 39.2315 18.1954 38.8519 17.9635L34.2606 15.1592C34.1006 15.0615 33.8994 15.0615 33.7394 15.1592L29.1481 17.9635C28.7685 18.1954 28.2979 17.8534 28.4011 17.4208L29.6494 12.1876C29.6929 12.0053 29.6307 11.8139 29.4883 11.6919L25.4024 8.19189C25.0646 7.90256 25.2444 7.3493 25.6877 7.31376L31.0505 6.88383C31.2374 6.86885 31.4002 6.75056 31.4722 6.57744L33.5383 1.60996Z" fill="#F2F4F7"/> <g clip-path="url(#clip3_7967_9904)"> <path d="M33.5383 1.60996C33.7091 1.19932 34.2909 1.19932 34.4617 1.60996L36.5278 6.57744C36.5998 6.75056 36.7626 6.86885 36.9495 6.88383L42.3123 7.31376C42.7556 7.3493 42.9354 7.90256 42.5976 8.19189L38.5117 11.6919C38.3693 11.8139 38.3071 12.0053 38.3506 12.1876L39.5989 17.4208C39.7021 17.8534 39.2315 18.1954 38.8519 17.9635L34.2606 15.1592C34.1006 15.0615 33.8994 15.0615 33.7394 15.1592L29.1481 17.9635C28.7685 18.1954 28.2979 17.8534 28.4011 17.4208L29.6494 12.1876C29.6929 12.0053 29.6307 11.8139 29.4883 11.6919L25.4024 8.19189C25.0646 7.90256 25.2444 7.3493 25.6877 7.31376L31.0505 6.88383C31.2374 6.86885 31.4002 6.75056 31.4722 6.57744L33.5383 1.60996Z" fill="#FEC84B"/> </g> </g> <g clip-path="url(#clip4_7967_9904)"> <path d="M57.5383 1.60996C57.7091 1.19932 58.2909 1.19932 58.4617 1.60996L60.5278 6.57744C60.5998 6.75056 60.7626 6.86885 60.9495 6.88383L66.3123 7.31376C66.7556 7.3493 66.9354 7.90256 66.5976 8.19189L62.5117 11.6919C62.3693 11.8139 62.3071 12.0053 62.3506 12.1876L63.5989 17.4208C63.7021 17.8534 63.2315 18.1954 62.8519 17.9635L58.2606 15.1592C58.1006 15.0615 57.8994 15.0615 57.7394 15.1592L53.1481 17.9635C52.7685 18.1954 52.2979 17.8534 52.4011 17.4208L53.6494 12.1876C53.6929 12.0053 53.6307 11.8139 53.4883 11.6919L49.4024 8.19189C49.0646 7.90256 49.2444 7.3493 49.6877 7.31376L55.0505 6.88383C55.2374 6.86885 55.4002 6.75056 55.4722 6.57744L57.5383 1.60996Z" fill="#F2F4F7"/> <g clip-path="url(#clip5_7967_9904)"> <path d="M57.5383 1.60996C57.7091 1.19932 58.2909 1.19932 58.4617 1.60996L60.5278 6.57744C60.5998 6.75056 60.7626 6.86885 60.9495 6.88383L66.3123 7.31376C66.7556 7.3493 66.9354 7.90256 66.5976 8.19189L62.5117 11.6919C62.3693 11.8139 62.3071 12.0053 62.3506 12.1876L63.5989 17.4208C63.7021 17.8534 63.2315 18.1954 62.8519 17.9635L58.2606 15.1592C58.1006 15.0615 57.8994 15.0615 57.7394 15.1592L53.1481 17.9635C52.7685 18.1954 52.2979 17.8534 52.4011 17.4208L53.6494 12.1876C53.6929 12.0053 53.6307 11.8139 53.4883 11.6919L49.4024 8.19189C49.0646 7.90256 49.2444 7.3493 49.6877 7.31376L55.0505 6.88383C55.2374 6.86885 55.4002 6.75056 55.4722 6.57744L57.5383 1.60996Z" fill="#FEC84B"/> </g> </g> <g clip-path="url(#clip6_7967_9904)"> <path d="M81.5383 1.60996C81.7091 1.19932 82.2909 1.19932 82.4617 1.60996L84.5278 6.57744C84.5998 6.75056 84.7626 6.86885 84.9495 6.88383L90.3123 7.31376C90.7556 7.3493 90.9354 7.90256 90.5976 8.19189L86.5117 11.6919C86.3693 11.8139 86.3071 12.0053 86.3506 12.1876L87.5989 17.4208C87.7021 17.8534 87.2315 18.1954 86.8519 17.9635L82.2606 15.1592C82.1006 15.0615 81.8994 15.0615 81.7394 15.1592L77.1481 17.9635C76.7685 18.1954 76.2979 17.8534 76.4011 17.4208L77.6494 12.1876C77.6929 12.0053 77.6307 11.8139 77.4883 11.6919L73.4024 8.19189C73.0646 7.90256 73.2444 7.3493 73.6877 7.31376L79.0505 6.88383C79.2374 6.86885 79.4002 6.75056 79.4722 6.57744L81.5383 1.60996Z" fill="#F2F4F7"/> <g clip-path="url(#clip7_7967_9904)"> <path d="M81.5383 1.60996C81.7091 1.19932 82.2909 1.19932 82.4617 1.60996L84.5278 6.57744C84.5998 6.75056 84.7626 6.86885 84.9495 6.88383L90.3123 7.31376C90.7556 7.3493 90.9354 7.90256 90.5976 8.19189L86.5117 11.6919C86.3693 11.8139 86.3071 12.0053 86.3506 12.1876L87.5989 17.4208C87.7021 17.8534 87.2315 18.1954 86.8519 17.9635L82.2606 15.1592C82.1006 15.0615 81.8994 15.0615 81.7394 15.1592L77.1481 17.9635C76.7685 18.1954 76.2979 17.8534 76.4011 17.4208L77.6494 12.1876C77.6929 12.0053 77.6307 11.8139 77.4883 11.6919L73.4024 8.19189C73.0646 7.90256 73.2444 7.3493 73.6877 7.31376L79.0505 6.88383C79.2374 6.86885 79.4002 6.75056 79.4722 6.57744L81.5383 1.60996Z" fill="#FEC84B"/> </g> </g> <g clip-path="url(#clip8_7967_9904)"> <path d="M105.538 1.60996C105.709 1.19932 106.291 1.19932 106.462 1.60996L108.528 6.57744C108.6 6.75056 108.763 6.86885 108.949 6.88383L114.312 7.31376C114.756 7.3493 114.935 7.90256 114.598 8.19189L110.512 11.6919C110.369 11.8139 110.307 12.0053 110.351 12.1876L111.599 17.4208C111.702 17.8534 111.231 18.1954 110.852 17.9635L106.261 15.1592C106.101 15.0615 105.899 15.0615 105.739 15.1592L101.148 17.9635C100.769 18.1954 100.298 17.8534 100.401 17.4208L101.649 12.1876C101.693 12.0053 101.631 11.8139 101.488 11.6919L97.4024 8.19189C97.0646 7.90256 97.2444 7.3493 97.6877 7.31376L103.051 6.88383C103.237 6.86885 103.4 6.75056 103.472 6.57744L105.538 1.60996Z" fill="#F2F4F7"/> <g clip-path="url(#clip9_7967_9904)"> <path d="M105.538 1.60996C105.709 1.19932 106.291 1.19932 106.462 1.60996L108.528 6.57744C108.6 6.75056 108.763 6.86885 108.949 6.88383L114.312 7.31376C114.756 7.3493 114.935 7.90256 114.598 8.19189L110.512 11.6919C110.369 11.8139 110.307 12.0053 110.351 12.1876L111.599 17.4208C111.702 17.8534 111.231 18.1954 110.852 17.9635L106.261 15.1592C106.101 15.0615 105.899 15.0615 105.739 15.1592L101.148 17.9635C100.769 18.1954 100.298 17.8534 100.401 17.4208L101.649 12.1876C101.693 12.0053 101.631 11.8139 101.488 11.6919L97.4024 8.19189C97.0646 7.90256 97.2444 7.3493 97.6877 7.31376L103.051 6.88383C103.237 6.86885 103.4 6.75056 103.472 6.57744L105.538 1.60996Z" fill="#FEC84B"/> </g> </g> <defs> <clipPath id="clip0_7967_9904"> <rect width="20" height="20" fill="white"/> </clipPath> <clipPath id="clip1_7967_9904"> <rect width="20" height="20" fill="white"/> </clipPath> <clipPath id="clip2_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(24)"/> </clipPath> <clipPath id="clip3_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(24)"/> </clipPath> <clipPath id="clip4_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(48)"/> </clipPath> <clipPath id="clip5_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(48)"/> </clipPath> <clipPath id="clip6_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(72)"/> </clipPath> <clipPath id="clip7_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(72)"/> </clipPath> <clipPath id="clip8_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(96)"/> </clipPath> <clipPath id="clip9_7967_9904"> <rect width="20" height="20" fill="white" transform="translate(96)"/> </clipPath> </defs> </svg>
                    <div class="st_testimonial_text">
                        <?php echo $testimonial; ?>
                    </div>
                    <?php
					$button = get_sub_field('button');
					if( $button ):
						$link_url = $button['url'];
						$link_title = $button['title'];
						$link_target = $button['target'] ? $button['target'] : '_self';
						?>
						<a class="learn_more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<span><?php echo esc_html( $link_title ); ?></span>
							<svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.1667 1.66666L16.5 4.99999M16.5 4.99999L13.1667 8.33332M16.5 4.99999L1.5 4.99999" stroke="#1B232F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					<?php endif; ?>
                </div>
                <?php endwhile;
            endif; ?>
        </div>
	</div>
</section>
