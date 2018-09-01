<div class="cell-md-8 cell-lg-9">
<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		the_content();
	endwhile; endif;
	
	if( is_page('20')) {
	   $args = array(
			'cat'              => 87,
		   	'post_type'        => array( 'post' ),
			'post_status'      => array( 'publish' ),
			'order'            => 'ASC',
			'orderby'          => 'date',
		);
		$catquery = new WP_Query( $args ); ?>
		<ol>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ol>
		<?php 
		wp_reset_postdata();
	}
	else {}
?>
</div>
