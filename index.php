<?php get_header(); ?>
<main class="page-content">
    <?php get_template_part('inc/page-header'); ?>
    	<section class="section section-md bg-white">
     	    <div class="shell">
		    <p>Welcome to my blog! Here, I'll post about news from the world of franchises, address important industry topics in detail, and answer some of your questions. I hope you'll read and comment and contribute to the discussion.</p>
		    <p>Have a question? Please ask, via the email listed here, or my Contact page on this site.</p>
		    
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
