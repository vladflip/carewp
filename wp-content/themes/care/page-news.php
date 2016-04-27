<?php
/*
Template Name: News Page
*/

	$args = [
		'posts_per_page' => 0
	];

	$posts = get_posts($args);

	global $_OURCARE_LANG;

	get_header();
?>

<div class="news">
	<div class="container">

		<h2 class="news_header">
			<?= $_OURCARE_LANG['news']; ?>
		</h2>

		<div class="news_list">
			
			<?php foreach ($posts as $post): ?>
				<div class="new">
					<a href="<?= get_permalink($post->ID); ?>">
						<h3 class="new_header">
							<?= $post->post_title ?>
						</h3>
						<div class="new_excerpt">
							<?= $post->post_excerpt; ?>
						</div>
					</a>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>