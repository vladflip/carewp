<?php
	get_header();
	$src = get_thumb_src($post->ID);
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
	
</div>

<?php get_footer(); ?>