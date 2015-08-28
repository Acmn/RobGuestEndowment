<?php get_header(); ?>

  <section class="row" id="mainContent">
    <?php the_post();
        include_once('slider.php');
     ?>
		<article class="small-12 large-8 columns" role="main">
			<div class="entry-content">
				<h1 class="page-title">Page not found.</h1>
				<p>Oops... we can't find what you are looking for</p>
			</div>
		</article>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>