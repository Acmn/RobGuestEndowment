<?php get_header(); ?>

  <section class="row" id="mainContent">
     
     <?php while (have_posts()) : the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-feature', array('class' => 'margin-bottom'));
      } else {
        include_once('slider.php');
      } ?>
		
    <article <?php post_class('small-12 large-8 columns') ?> id="post-<?php the_ID(); ?>" role="main">
			<div class="entry-content mb-2">
        
        <?php if( get_field('covid_updates','options') ): ?>

          <div class="covid-updates">
            <?php the_field('covid_updates','options'); ?>
          </div>

        <?php endif; ?>
        
        <h1 class="hide"><?php the_title(); ?></h1>
				
        <?php the_content(); ?>

			</div>
		</article>

    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  
  </section><?php // end section ?>

<?php get_footer(); ?>