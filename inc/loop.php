<div class="cell-md-8 cell-lg-9">
<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		the_content();
	endwhile; endif;
?>
</div>