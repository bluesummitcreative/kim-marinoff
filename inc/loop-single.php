<div class="cell-md-8 cell-lg-9">
	<section class="section">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <article class="post post-single">
			<?php if(has_post_thumbnail()) { ?>
			<div class="post-image">
			  <figure> <?php the_post_thumbnail(array('class' => 'img-fluid'));?> </figure>
			</div>
			<?php } else { } ?>
		<div class="post-meta">
			<ul>
			  <li> <span class="text-gray-base text-medium">Date:&nbsp;</span>
				<time><?php the_time( get_option( 'date_format' ) ); ?></time>
			  </li>
			  <li> <span class="text-gray-base text-medium">Posted by:&nbsp;</span> <a href="#" class="post-meta-admin"><?php the_author(); ?>
			  <li> <span class="text-gray-base text-medium">Categories:&nbsp;</span> <?php the_category(', '); ?></li>
			</ul>
		</div>
		<div class="post-body">
		  <?php the_content(); ?>
		</div>
					
		<div class="post-footer">
		  <h5 class="text-medium">Share this post:</h5>
		  <ul class="inline-list inline-list-sm pull-right">
			<li> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(the_permalink()); ?>" class="icon icon-xxs-variant-1 icon-ship-gray fa-facebook fa-2x"></a> </li>
			<li> <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo urlencode(the_permalink()); ?>" class="icon icon-xxs-variant-1 icon-ship-gray fa-twitter fa-2x"></a> </li>
			<li> <a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>" class="icon icon-xxs-variant-1 icon-ship-gray fa-google-plus-square fa-2x"></a> </li>
			<li> <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(the_permalink()); ?>&title=<?php the_title(); ?>" class="icon icon-xxs-variant-1 icon-ship-gray fa-linkedin fa-2x"></a> </li>
		  </ul>
		</div>
			
		<?php comments_template(); ?>
			
	  </article>
		<?php endwhile; endif; ?>
	</section>

  </div>
