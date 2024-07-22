<?php

get_header(); ?>

<main class="site-main">
	<header class="help_articles_hero">
		<div class="container">
			<h1 class="prefix">Help center</h1>
			<h2 class="hc_hero_subtitle"><?php echo wp_kses_post( get_field('hc_archive_subtitle', 'option') ); ?></h2>
		</div>
	</header>
    <section class="help_articles container space_1">
        <h3 class="hc_topics_title"><?php echo wp_kses_post( get_field('topic_title', 'option') ); ?></h3>
        <div class="help_articles_inner">
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'topic',
                'hide_empty' => true,
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) { ?>
					<a class="help_article" href="<?php echo get_term_link($term) ?>">
						<figure>
							<?php
							$topic_icon = get_field('topic_icon', $term);
							$size = 'full';
							if( $topic_icon ) {
								echo wp_get_attachment_image( $topic_icon, $size, "", array( "class" => "topic_icon" ) );
							} ?>
						</figure>
						<h4 class="topic_title"><?php echo $term->name ?></h4>
						<div class="topic_description">
							<?php echo $term->description ?>
						</div>

					</a>
                <?php }
            }
            ?>
        </div>
		<div class="help_articles_banner">
			<div class="help_articles_banner_inner">
				<p><?php echo wp_kses_post( get_field('small_banner_title', 'option') ); ?></p>
				<a class="btn-3" href="/contact">Contact us</a>
				<?php
				$small_banner_button = get_field('small_banner_button');
				if( $small_banner_button ):
					$link_url = $small_banner_button['url'];
					$link_title = $small_banner_button['title'];
					$link_target = $small_banner_button['target'] ? small_banner_button['target'] : '_self';
					?>
					<a class="btn-3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/inner-contact'); ?>
</main>

<?php get_footer(); ?>
