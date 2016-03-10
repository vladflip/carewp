<?php
	$args = [
		'posts_per_page' => 6
	];

	$posts = get_posts($args);

	get_header();
?>

<div class="posts">

	<div class="container">
		<h2 class="posts_header">
			Новости
		</h2>

		<?php 
			foreach ($posts as $post): 
				$src = get_thumb_src($post->ID);
		?>
			<div class="post">
				<h3 class="post_header">
					<?= $post->post_title ?>
				</h3>

				<div class="post_content">
					<?php if($src): ?>
						<div class="post_thumb" style="background-image:url(<?=$src?>)"></div>
					<?php endif; ?>
					<div class="post_excerpt">
						<?= $post->post_excerpt; ?>
					</div>
				</div>

				<div class="clear-fix"></div>

				<div class="post_info">
					<div class="post_date">
						<?= get_the_date('d - n - Y ', $post->ID); ?>
					</div>
					<div class="post_share">
						
					</div>
					
					<div class="post_read">
						<a href="<?= get_permalink($post->ID); ?>">Читать</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div>

</div>

<?php get_footer(); ?>