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
					
					query_posts('cat=5'); 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; endif;
					wp_reset_query();		
					get_sidebar();
				?>
			</div>
		  </div>
		</section>
	</main>
<?php get_footer(); ?>
