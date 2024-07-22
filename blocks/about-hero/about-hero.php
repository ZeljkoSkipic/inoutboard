<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'st_block st_about_hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

 ?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<?php
		$image = get_field('image');
		$size = 'full';
		if( $image ) {
			echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
		} ?>
		<div class="st_about_hero_bottom">
			<div class="left">
				<h2 class="prefix">
					<?php echo wp_kses_post( get_field('prefix_left') ); ?>
				</h2>
				<h3 class="intro_title">
					<?php echo wp_kses_post( get_field('title_left') ); ?>
				</h3>
			</div>
			<div class="right">
				<?php echo wp_kses_post( get_field('text_right') ); ?>
			</div>
		</div>
	</div>
</section>
