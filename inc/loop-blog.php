<div class="cell-md-8 cell-lg-9">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post">
	  <?php if(has_post_thumbnail()) { ?>
		<div class="post-image">
		<figure> <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-fluid'));?></a> </figure>
	  </div>
		<?php } else { } ?>
	  <div class="post-heading">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
	  </div>
	  <div class="post-meta">
		<ul>
		  <li> <span class="text-gray-base text-medium">Date:&nbsp;</span>
			<time><?php the_time( get_option( 'date_format' ) ); ?></time>
		  </li>
		  <li> <span class="text-gray-base text-medium">Posted by:&nbsp;</span> <?php the_author(); ?>
		  <li> <span class="text-gray-base text-medium">Categories:&nbsp;</span> <?php the_category(', '); ?></li>
		</ul>
	  </div>
	  <div class="post-body">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink() ?>" class="button button-sm button-primary button-thin">Read More</a> </div>
	</article>
	<?php endwhile; endif; ?>
</div>