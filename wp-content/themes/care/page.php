<?php get_header(); ?>

	<div class="page">
		
		<div class="container">
			
			<div class="page_title">
				<?= get_the_title(); ?>
			</div>

			<div class="page_content">
				<?php 
					the_post();
					the_content(); 
				?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>