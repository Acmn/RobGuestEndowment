<?php get_header(); ?>
  <section class="row" id="mainContent">    
    <?php while (have_posts()) : the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-feature', array('class' => 'margin-bottom'));
      } else {
        include_once('slider.php');
      } ?>
		
    <article <?php post_class('small-12 large-12 columns') ?> id="post-<?php the_ID(); ?>" role="main">
			
      <div class="entry-content" id="actor">
				
        <h1 class="page-title">Audition Registree</h1>

        <?php get_template_part('partials/actor', 'entries'); ?>

      </div><!-- #actor .entry-content -->    
    
    </article>

    <hr>


    <?php endwhile; // End the loop ?>    	
  </section><?php // end section ?>
<?php get_footer(); ?>