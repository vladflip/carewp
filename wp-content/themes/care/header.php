<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Care</title>
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
					<div class="header_icon">
						<img src="<?=THEME_URI?>/img/iconname.jpg" alt="">
					</div>
					<div class="header_phone">
						<span>+380 (44)</span>
						<span>371-45-80</span>
					</div>
					<div class="header_lang">
						<div><span>рус</span></div>
						<div><span>укр</span></div>
						<div><span>eng</span></div>
					</div>
				</div>
				<div class="header_menu">
					<div class="menu">
						<ul class="menu_list">
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
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="hands">
		<img src="<?=THEME_URI?>/img/hands.jpg" alt="">
	</div>