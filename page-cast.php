<?php 
  /*
    Template Name: Cast
  */
  get_header(); ?>

  <section class="row" id="mainContent">
    <?php while (have_posts()) : the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-feature', array('class' => 'margin-bottom'));
      } else {
        include_once('slider.php');
      } ?>
		<article <?php post_class('small-12 large-8 columns people') ?> id="post-<?php the_ID(); ?>" role="main">
			<div class="entry-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
					<div class="entry-content cast-list flex-box">
            <?php
              $args = array( 
                  'post_type' => 'cast',  
                  'posts_per_page' => -1,
                  'order' => 'DESC',
                  'orderby' => 'menu_order'
                  );
              $the_query = new WP_Query( $args );
              
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part( 'partials/person', 'box' );
              endwhile;
              endif;
              wp_reset_postdata();
            ?>  
            <div class="content"></div>
    			</div>				
			</div>
		</article>
    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>