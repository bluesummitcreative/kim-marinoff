<section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/1920x900.jpg)">
  <div class="shell text-center">
	<h1 class="page-heading-title"><?php if ( is_home() ) { echo 'Blog'; } elseif ( is_404() ) { echo '404 Not Found'; } elseif ( is_search() ) { echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"'; } else { echo get_the_title(); } ?></h1>
	<hr class="divider veil reveal-sm-block">
  </div>
</section>
<section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="index.html">Home</a> </li>
          <li class="active">Contacts</li>
        </ul>
      </div>
      <hr class="hr">
    </section>
