<?php
	$args = array(
		'post_type' => 'projects'
	);

	$projects = get_posts($args);
?>	
<div class="projects">
	<div class="container">
		<?php
			foreach($projects as $project):
				$link = get_permalink($project);
		?>
			<a href="<?=$link?>">
				<div class="project">
					<div class="project_container">
						<div class="project_header">
							<?= $project->post_title; ?>
						</div>
						<div class="project_excerpt">
							<?= $project->post_excerpt; ?>
						</div>
					</div>
				</div>
			</a>
		<?php endforeach ?>
	</div>
</div>