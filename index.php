<?php get_header(); ?>
<main class="page-content">
    <?php get_template_part('inc/page-header'); ?>
    	<section class="section section-md bg-white">
     	    <div class="shell">
		    <?php the_field('blog_intro', get_option('page_for_posts')); ?>	    
	    </div>
	</section>
	 
      <div class="shell">
        <div class="range range-80">
          <?php
				get_template_part('inc/loop-blog');
				get_sidebar(); 
			?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
