<?php

$padding = get_field_object('padding');

$anchor = '';

if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'st_block st_faq_banner';
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
		$faq_button = get_field('faq_button');
		if( $faq_button ):
			$link_url = $faq_button['url'];
			$link_title = $faq_button['title'];
			$link_target = $faq_button['target'] ? $faq_button['target'] : '_self';
			?>
			<a class="btn-3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>
