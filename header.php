<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title><?php wp_title(); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php include_once("analytics.php"); ?>
<header class="container">
	<div class="row">
		<div class="small-12 columns" id="mainHeader">
			<h1><a href="/"><?php bloginfo('title'); ?></a></h1>
			<ul class="contactInfo show-for-medium-up">
  			<li>
  			  <a href="<?php the_field('facebook_link', 'options'); ?>" class="social facebook" target="_blank">Facebook</a>
  			</li>
  			<li>
  			  <a href="<?php the_field('twitter_link', 'options'); ?>" class="social twitter" target="_blank">Twitter</a>
  		  </li>
  		  <?php $youTubeLink = get_field('youtube_link', 'options');  
    		  if($youTubeLink){
  		  ?>
  		  <li>
  			  <a href="<?php echo $youTubeLink ?>" class="social youtube" target="_blank">YouTube</a>
  		  </li>
  		  <?php 
  		    } // end if youtube link
  		    
  		    $instaLink = get_field('instagram_link', 'options');  
    		  if($instaLink){
  		   ?>
  		  <li>
  			  <a href="<?php echo $instaLink; ?>" class="social instagram" target="_blank">Instagram</a>
  		  </li>
  		  <?php } // end if instalink ?>
  		  <li>
  			  <a href="/contact" class="contact"> | Contact</a>
  		  </li>
  			</li>
			</ul>
		</div>
	</div>
</header>
	<div class="row">
		<!-- Starting the Top-Bar -->
		<nav class="top-bar" data-topbar>
		    <ul class="title-area">
		        <li class="name">
		        </li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		    </ul>
		    <section class="top-bar-section">
		    <?php
		        wp_nav_menu( array(
		            'theme_location' => 'primary',
		            'container' => false,
		            'depth' => 0,
		            'items_wrap' => '<ul class="left">%3$s</ul>',
		            'walker' => new reverie_walker( array(
		                'in_top_bar' => true,
		                'item_type' => 'li'
		            ) ),
		        ) );
		    ?>
		    </section>
		</nav><!-- End of Top-Bar -->
	</div>
