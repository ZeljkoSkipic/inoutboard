<?php

$padding = get_field_object('padding');

$class = 'st_block st_price_slider';

if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$values = get_field('price_ranges');
$steps = array_map(function($value) {
	return $value['value'];
}, (array) $values);

$min_value = min($steps);
$max_value = max($steps);

$values_json = json_encode($values);

$phone = get_field('phone_number');

?>

<section class="<?php echo $class ?>">
    <?php get_template_part('components/background'); ?>
    <div class="container">
        <?php get_template_part('components/intro'); ?>

        <div class="slider-container">
            <div class="number_of_users">Number of Users<span id="sliderValue"><?php echo $min_value; ?></span></div>
            <input data-values='<?php echo $values_json; ?>' type="range" id="customRange" step="1" min="0" max="<?php echo count($steps) - 1 ?>" value="0">
            <div class="user_range">
                <span><?php echo get_field('lowest') ?></span>
                <span><?php echo get_field('highest') ?></span>
            </div>
        </div>
        <div class="slider-container-after">
            <div class="estimated-price"><span class="frequency_text">Your price:</span>
                <div class="right range_price">
					<span class="price">
					<span class="currency">$</span><span id="fieldValue" class="price_value"><?php echo isset($values[0]['price']) ? $values[0]['price'] : ""; ?></span>
					</span>
					<span class="frequency">/ month</span>
				</div>
            </div>

            <div class="anual-price">
				<span class="frequency_text"><?php echo wp_kses_post( get_field('annual_text') ); ?></span>
				<div class="right range_price">
					<span class="price">
						$<span id="yearValue"><?php echo isset($values[0]['yearly_price']) ? $values[0]['yearly_price'] : ""; ?></span>
					</span>
					<span class="frequency">/ year</span>
				</div>
			</div>
			<a class="phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>

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
    </div>
</section>
