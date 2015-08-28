<?php get_header(); ?>

  <section class="row" id="mainContent">
    <?php while (have_posts()) : the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-feature', array('class' => 'margin-bottom'));
      } else {
        include_once('slider.php');
      } ?>
		<article <?php post_class('small-12 large-8 columns') ?> id="post-<?php the_ID(); ?>" role="main">
			<div class="entry-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php 
				  $years = get_field('years');
				  if($years){
  				  foreach($years as $year){ ?>
    				  <section class="row">
      				  <div class="small-12 columns">
        				  <b><?php echo $year['year']; ?></b>
        				  <div class="row">
          				  <div class="small-12 columns">
            				  <h2><?php echo $year['winner_name']; ?></h2>
            				  <img src="<?php echo $year['winner_image']['sizes']['medium']; ?>" alt="" class="alignright">
            				  <?php echo $year['winner_bio']; ?>
          				  </div>
        				  </div>
        				  <br>
        				  <p><b>Finalists:</b><br><?php echo $year['finalists']; ?></p>
      				  </div>
    				  </section>
    				  <hr>
    		  <?php
  				  }
				  }
				 ?>
			</div>
		</article>
    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>