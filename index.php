<?php get_header(); ?>
<main class="page-content">
    <?php get_template_part('inc/page-header'); ?>
    	<section class="section section-md bg-white">
     	    <div class="shell">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, sapien id egestas blandit, mi purus laoreet neque, semper congue erat eros id nisi. Interdum et malesuada fames ac ante.</p>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, sapien id egestas blandit, mi purus laoreet neque, semper congue erat eros id nisi. Interdum et malesuada fames ac ante.</p>
		    
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
