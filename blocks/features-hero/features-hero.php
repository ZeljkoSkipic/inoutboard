<?php
$padding = get_field_object('padding');

$class = 'st_block st_features_hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

?>

<section class="<?php echo $class ?>">
	<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<?php
		$button = get_field('button');
		if( $button ):
			$link_url = $button['url'];
			$link_title = $button['title'];
			$link_target = $button['target'] ? $button['target'] : '_self';
			?>
			<a class="btn-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>
<div class="st_features_hero_bottom">
	<figure>
		<?php
			$testimonials_image = get_field('testimonials_image');
			$size = 'full';
			if( $testimonials_image ) {
				echo wp_get_attachment_image( $testimonials_image, $size, "", array( "class" => "testimonials_image" ) );
		} ?>
	</figure>
</div>
