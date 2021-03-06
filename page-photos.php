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
				<?php the_content(); ?>
				<?php 
				  $galleries = get_field('galleries'); 
				  if ($galleries){
  				  foreach ($galleries as $gallery) { ?>
  				  
  				  <section class="row">
  				    <div class="small-12 columns">
      				  <h2><?php echo $gallery['title']; ?></h2>
      				  <?php echo $gallery['description']; ?>
      				  <?php 
                    $images = null;
                    $images = $gallery['images'];
                    if ($images){
                      echo '<b>Images</b>:<br>'; 
                      $galleryTitle = null;
                      $galleryTitle = preg_replace('/\s+/', '', $gallery['title']);
                      ?>
                      <div class="image-gallery">
                        <ul>
                          <?php foreach ($images as $image){ ?>
                          <li>
                            <a href="<?php echo $image['url']; ?>" rel="<?php echo $galleryTitle; ?>">
                              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" />
                            </a>
                          </li>
                         <?php   
                          }// end foreach 
                          ?>
                        </ul>
                      </div>
                   <?php
                    } // end if images
                   ?>
  				    </div>
  				  </section>
    				  <hr>
    				<?php
  				  } // end foreach $galleries
				  } // end if $galleries
				?>
			</div>
		</article>
    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>