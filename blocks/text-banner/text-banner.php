<?php

$style = get_field_object('style');

$prefix = get_field('prefix');

$class = 'st_block st_text-banner container';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $style ) ) {
    $class .=  ' ' . $style['value'];
}


?>
<section class="<?php echo $class ?>">
	<div class="st_text-banner_inner">
		<?php if($prefix) { ?>
		<h2 class="prefix"><?php echo $prefix; ?></h2>
		<?php } ?>

		<div class="st_banner-text">
			<?php echo wp_kses_post( get_field('text') ); ?>
		</div>
		<?php
		$button = get_field('button');
		if( $button ):
			$link_url = $button['url'];
			$link_title = $button['title'];
			$link_target = $button['target'] ? button['target'] : '_self';
			?>
			<a class="btn-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>
