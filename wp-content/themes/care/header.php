<?php
	$args = array(
		'theme_location' => 'header_menu',
		'container' => false,
		'menu_id' => '',
		'menu_class' => 'menu_list'
	);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=get_bloginfo('name')?></title>
	<link rel="icon" type="image/png" href="<?=THEME_URI?>/favicon.png">
	<meta name="Description" content="благотворительная организация">
	<meta name="author" content="vladflip">
	<meta name="Keywords" content="благотворительная организация, наша турбота">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<?php wp_enqueue_style('main-style'); ?>
	<?php wp_head(); ?>
</head>
<body>
	
	<div id="header" class="header">
		<div class="container">
			<div class="header_left">
				<div class="header_logo">
					<img src="<?=THEME_URI?>/img/iconlogo.jpg" alt="">
				</div>
			</div>
			<div class="header_right">
				<div class="header_info">
					<div class="header_title">
						<div class="header_icon">
							<img src="<?=THEME_URI?>/img/iconname.jpg" alt="">
						</div>
						<div class="header_quote">
							ОО "Iнститут правових дослiджень та стратегiй"
						</div>
					</div>
					<div class="header_phone">
						<span>+380 (44)</span>
						<span>371-45-80</span>
					</div>
					<ul class="header_lang">
						<?php 
							if(function_exists('pll_the_languages'))
								pll_the_languages(); 
						?>
					</ul>
				</div>
				<div class="header_menu">
					<div class="menu">
						<?php wp_nav_menu($args); ?>

						<!-- <ul class="menu_list">
							<li>
								<a href="">О нас</a>
							</li>
							<li>
								<a href="">Наши проекты</a>
								<ul class="menu_sub">
									<li>
										<a href="">Проект первый</a>
									</li>
									<li>
										<a href="">Проект второй</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="">Партнеры</a>
							</li>
							<li>
								<a href="">Как поддержать</a>
							</li>
							<li>
								<a href="">Полезная информация</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(get_post_type() !== 'projects'): ?>
		<div class="hands">
			<img src="<?=THEME_URI?>/img/hands.jpg" alt="">
		</div>
	<?php endif; ?>