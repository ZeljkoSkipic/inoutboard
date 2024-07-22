<?php


get_header();

$term = get_queried_object();
$term_name = single_term_title('', false);
$term_count = $term->count;
?>


<header class="help_articles_hero">
	<div class="container">
		<span class="prefix">Topic</span>
		<h1 class="hc_hero_subtitle"><?php echo $term_name; ?></h1>
	</div>
</header>
<?php
if ( have_posts() ) : ?>
	<main class="help_articles_category space_1 container">
		<div class="help_articles_category_inner">
		<header class="ha_head">
			<div class="left">
				<?php
				$topic_icon = get_field('topic_icon', $term);
				$size = 'full';
				if( $topic_icon ) {
					echo wp_get_attachment_image( $topic_icon, $size, "", array( "class" => "topic_icon" ) );
				} ?>
			</div>
			<div class="mid">
				<h2 class="title-3"><?php echo $term_name; ?></h2>
			</div>
			<div class="right">
				<?php echo $term_count; ?> articles
			</div>
		</header>
		<?php while ( have_posts() ) :
			the_post();	?>
			<article class="ha_article st_accordion-item">
				<h2 class="article_title st_accordion-header"><?php the_title(); ?></h2>
				<div class="article_content st_accordion-body"><?php the_content(); ?></div>
			</article>

		<?php endwhile; ?>
		</div>
		<aside class="hc_sidebar">
			<h2>All Topics</h2>
		<?php

			// Get all terms in the 'topic' taxonomy
			$terms = get_terms(array(
				'taxonomy' => 'topic',
				'hide_empty' => false,
			));

			// Check if there are any terms in the taxonomy
			if (!is_wp_error($terms) && !empty($terms)) { ?>
				<ul>
				<?php
				foreach ($terms as $term) { ?>
					<li>
					<a href="<?php echo get_term_link($term) ?>">
						<div class="top">
							<?php
								$topic_icon = get_field('topic_icon', $term);
								$size = 'full';
								if( $topic_icon ) {
									echo wp_get_attachment_image( $topic_icon, $size, "", array( "class" => "topic_icon" ) );
							} ?>
						</div>
						<h4 class="bottom">
							<?php echo $term->name; ?>
						</h4>
						</a>
					</li>
				<?php } ?>
				</ul>
		<?php }	?>
		</aside>
	</main>
	<?php get_template_part('template-parts/inner-contact'); ?>
<?php endif; ?>

<?php get_footer();
