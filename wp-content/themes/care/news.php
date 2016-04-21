<?php
	$args = [
		'posts_per_page' => 6
	];

	$posts = get_posts($args);
?>

<div class="news">
	<div class="container">

		<h2 class="news_header">
			Последние новости
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

		<div class="news_all">
			<a href="<?= get_permalink(get_page_by_path('news')) ?>">
				Посмотреть все новости
			</a>
		</div>

	</div>
</div>