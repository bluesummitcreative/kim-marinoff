<?php 
  /*Template Name: Videos*/
  get_header(); 
?>
	<main class="page-content">
		<?php get_template_part('inc/page-header'); ?>
		<section class="section bg-white section-md">
		  <div class="shell">
			<div class="range range-80">
				<?php 
					get_template_part('inc/loop');
				
					$catquery = new WP_Query( 'cat=72&posts_per_page=5' ); ?>
					<ul>
						<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					</ul>
					<?php 
					wp_reset_postdata();
					get_sidebar();
				?>
			</div>
		  </div>
		</section>
	</main>
<?php get_footer(); ?>
