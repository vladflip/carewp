<?php
	$args = [
		'posts_per_page' => 6,
		'lang' => 'ru'
	];

	$posts = get_posts($args);

	global $_OURCARE_LANG;

	// get news all link by current language
	
	if(function_exists('pll_get_post')){
		$id = pll_get_post(get_page_by_path('news')->ID);
	} else {
		$id = get_page_by_path('news');
	}

?>

<div class="news">
	<div class="container">

		<h2 class="news_header">
			<?= $_OURCARE_LANG['news_latest']; ?>
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
			<a href="<?= get_permalink($id) ?>">
				<?= $_OURCARE_LANG['news_all']; ?>
			</a>
		</div>
	</div>
</div>