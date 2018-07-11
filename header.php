<!doctype html>
<html class="wide wow-animation" <?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122164230-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-122164230-1');
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
<div class="page">
  <header class="rd-navbar-wrap">
    <nav data-layout="rd-navbar-fixed" data-focus-on-hover="false" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-md-stick-up-offset="157px" data-lg-stick-up-offset="157px" class="rd-navbar rd-navbar-default">
      <div class="rd-navbar-inner">
        <div class="rd-navbar-panel">
          <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"> <span></span> </button>
          <div class="brand rd-navbar-brand"> <a href="<?php echo esc_url(home_url()); ?>"> <img class="img-responsive" src="/wp-content/uploads/A2B_1000_final.jpg" alt="logo"> </a> </div>
          <div class="rd-navbar-aside">
          	<div class="header_socials unit unit-horizontal "> <a target="_blank" href="https://www.facebook.com/thefranchiseexplorer/"><i class="fa fa-facebook"></i></a> <a target="_blank" href="https://twitter.com/A2BFranchise"><i class="fa fa-twitter"></i></a> <a target="_blank" href="https://www.youtube.com/channel/UC2I-A9boham5YAWrVKNsGRQ"><i class="fa fa-youtube"></i></a> </div>
            
          </div>
        </div>
	<?php
		wp_nav_menu( array(
		  'container'       => 'div',
		  'container_class' => 'rd-navbar-nav-wrap',
		  'container_id'    => 'navbarSupportedContent',
		  'menu'            => 'Header Menu',
		  'menu_class'      => 'rd-navbar-nav',
		  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		  'depth'           => 0,
		  'walker'          => new bootstrap_4_walker_nav_menu()
	   ) );
	?>
      </div>
    </nav>
  </header>
