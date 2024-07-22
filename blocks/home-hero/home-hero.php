<?php
$padding = get_field_object('padding');

$class = 'st_block st_home_hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$VimeoVideoId = get_field('vimeo_id');

?>

<section class="<?php echo $class; ?>">
	<div class="left container">
		<div class="left_inner">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
			<?php echo wp_kses_post( get_field('additional_content') ); ?>
		</div>
	</div>
	<div class="right">

<a href="https://vimeo.com/<?php echo $VimeoVideoId ?>" aria-label="Watch Video" data-fancybox>
	<div class="play-overlay">
	<svg width="228" height="228" viewBox="0 0 228 228" fill="none" xmlns="http://www.w3.org/2000/svg"> 			<g filter="url(#filter0_d_7967_9772)"> 			<circle cx="114" cy="114" r="50" fill="#1B232F"/> 			</g> 			<path d="M128 110.536C130.667 112.075 130.667 115.925 128 117.464L110 127.856C107.333 129.396 104 127.472 104 124.392L104 103.608C104 100.528 107.333 98.604 110 100.144L128 110.536Z" fill="white"/> 			<defs> 			<filter id="filter0_d_7967_9772" x="0" y="0" width="228" height="228" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> 			<feFlood flood-opacity="0" result="BackgroundImageFix"/> 			<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> 			<feOffset/> 			<feGaussianBlur stdDeviation="32"/> 			<feComposite in2="hardAlpha" operator="out"/> 			<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.14 0"/> 			<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7967_9772"/> 			<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7967_9772" result="shape"/> 			</filter> 			</defs> 		</svg>
	</div>
	<?php
		$placeholder_image = get_field('placeholder_image');
		$size = 'full';
		if( $placeholder_image ) {
			echo wp_get_attachment_image( $placeholder_image, $size, "", array( "class" => "placeholder_image" ) );
	} ?>
</a>
	</div>
</section>
