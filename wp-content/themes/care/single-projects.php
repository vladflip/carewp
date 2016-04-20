<?php
	get_header();
	$src = get_thumb_src($post->ID);

	$args = [
		'numberposts' => 7,
		'connected_type' => 'posts_to_projects',
		'connected_items' => get_queried_object(),
		'connected_direction' => 'to'
	];

	$connected = get_posts($args);

?>

<?php if( $src ): ?>
	<div class="project_logo">
		<img src="<?=$src?>" alt="">
	</div>
<?php else: ?>
	<div class="hands">
		<img src="<?=THEME_URI?>/img/hands.jpg" alt="">
	</div>
<?php endif; ?>

<div class="project">
	<div class="container">

		<div class="project_left">
			<div class="project_title">
				<?= get_the_title(); ?>
			</div>
			<div class="project_content">
				<?= $post->post_content; ?>
			</div>
		</div>

		<div class="project_right">
			
			<div class="sidebar">
				<div class="sidebar_header">
					Новости проекта
				</div>
				<div class="sidebar_news">
					<?php foreach ($connected as $post): ?>
						
							<div class="sidebar_new">

								<a href="<?= get_permalink($post) ?>">
									<div class="sidebar_title">
										<?= $post->post_title; ?>
									</div>
									<div class="sidebar_date">
										<?= get_the_date('j - m - y') ?>
									</div>
								</a>

							</div>

					<?php endforeach; ?>
				</div>
			</div>

		</div>

	</div>
</div>

<?php
	get_footer(); 
?>