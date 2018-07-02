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
          $args = array(
           'cat' => 3,
           'posts_per_page' => -1
             );
             $the_query = new WP_Query( $args );
             // The Loop
             if ( $the_query->have_posts() ) { ?>
             <ol>

                <?php while ( $the_query->have_posts() ) {?>

                   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php } ?>
                
                </ol>
             	<?php }
					get_sidebar();
				?>
			</div>
		  </div>
		</section>
	</main>
<?php get_footer(); ?>
