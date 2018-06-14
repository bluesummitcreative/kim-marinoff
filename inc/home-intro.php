<section class="section bg-primary section-md">
    <div class="shell">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_title( '<h1>', '</h1>' ); ?>
        <hr class="divider bg-primary">
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>
