<?php
	global $_OURCARE_OPTIONS;
?>

	<div class="footer">
		<div class="container">
			<div class="footer_logo">
				<div class="footer_image">
					<img src="<?=THEME_URI?>/img/logo1.png" alt="">
				</div>
			</div>
			<!-- <div class="footer_list">
				<div><a href="">О нас</a></div>
				<div><a href="">Наши проекты</a></div>
				<div><a href="">Партнеры</a></div>
				<div><a href="">Как поддержать</a></div>
				<div><a href="">Полезная информация</a></div>
			</div> -->
			<div class="footer_contacts">
				<div>
					<div class="footer_header">Контакты</div>
					<div class="footer_phone"><?= $_OURCARE_OPTIONS['phone'] ?></div>
					<div class="footer_mail"><?= $_OURCARE_OPTIONS['mail'] ?></div>
					<div class="footer_mail"><?= $_OURCARE_OPTIONS['address'] ?></div>
				</div>
				<div class="footer_developer">
					<span class="footer_span">developer: </span><a href="https://vk.com/vladflip" target="_blank">vladflip</a>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>