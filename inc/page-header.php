<section class="page-heading bg-image section section-sm bg-dark" style="background-image: url(/wp-content/uploads/Gods-Hand-Winter-Park.jpg);background-position:center center;">
  <div class="shell text-center">
	<h1 class="page-heading-title"><?php if ( is_home() ) { echo 'All About Franchising Blog'; } elseif ( is_404() ) { echo '404 Not Found'; } elseif ( is_search() ) { echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"'; } else { echo get_the_title(); } ?></h1>
  </div>
</section>
