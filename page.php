<?php get_header(); ?>
	<main class="page-content">
		<?php get_template_part('inc/page-header'); ?>
		<section class="section bg-white section-md">
		  <div class="shell">
			<div class="range range-80">
				<?php 
					get_template_part('inc/loop');
					get_sidebar();
				?>
			</div>
		  </div>
		</section>
	</main>
<?php get_footer(); ?>