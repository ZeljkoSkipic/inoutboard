<?php
$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'st_block st_hf';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if( get_field('stack_hf') ) {
    $class .= ' ' . 'stack_hf';
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

 ?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<?php $item=1; ?>
		<div class="st_hf_inner">
			<div class="st_hf_nav">
				<ul>
					<?php while( have_rows('features') ) : the_row();
						$title = get_sub_field('feature_title');
						$content = get_sub_field('feature_text');
					?>
					<li>
						<a class="st_hf_trigger title-3" data-tab = "<?php echo $item; ?>" href="#">
						<?php echo $item; ?>. <?php echo $title; ?>
						<svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 1L19 5M19 5L15 9M19 5L1 5" stroke="#98A2B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						</a>
						<div class="st_hf_nav_content">
							<div class="st_hf_text"><?php echo $content ?></div>
							<?php get_template_part('components/inner-buttons'); ?>
						</div>
					</li>
					<?php $item++;?>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="st_hf_content">
				<?php $item=1; ?>
				<?php while( have_rows('features') ) : the_row(); ?>
					<div data-tab="<?php echo $item; ?>" class="st_feature">
						<?php
						$feature_image = get_sub_field('feature_image');
						$size = 'full';
						if( $feature_image ) {
							echo wp_get_attachment_image( $feature_image, $size, "", array( "class" => "feature_image" ) );
						} ?>
					</div>
				<?php $item++;?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
