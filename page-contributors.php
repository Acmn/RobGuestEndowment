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
				  $sections = get_field('sections');
				  if ($sections){
  				  foreach ($sections as $section){ ?>

  				  <section class="row">
  				    <div class="small-12 columns">
    				    <h2 class="h3"><?php echo $section['title']; ?></h2>
    				    <?php
    				      $members = $section['members'];
    				      if ($members) {
      				      foreach ($members as $member) { ?>
      				        <h5><b><?php echo $member['title']; ?></b></h5>
      				        <?php
      				          $image = null;
      				          $image = $member['image'];
      				          if ($image) {
        				          echo '<img class="alignleft contributor-image" src="' . $image['url'] . '" alt="' . $member['title'] . '">';
      				          } // end if image
      				          echo $member['description'];
      				        ?>
        				    <?php
      				      }
    				      } // end if $members
    				     ?>
  				    </div>
  				  </section>
  				  <hr>
    		  <?php
  				  } // end foreach $sections
				  } // end if $sections ?>
          <section class="row">
				    <div class="small-12 columns">
  				    <?php
  				      $major_sponsors = get_field('major_cash_sponsors');
  				      if($major_sponsors){ ?>
  				      <h3>Partners</h3>
  				       <div class="sponsors">
  				       <?php
    				      foreach($major_sponsors as $partner){ ?>
    				      <div class="partner small-12 medium-6 columns">
    				        <a href="<?php echo $partner['link']; ?>" target="_blank">
    				          <img src="<?php echo $partner['image']; ?>" />
    				        </a>
    				      </div>
      				    <?php
    				      } ?>
  				     </div>
  				     <?php
  				      }
  				     ?>
				    </div>
				  </section>
          <section class="row">
				    <div class="small-12 columns">
  				    <?php
  				      $minor_sponsors = get_field('minor_cash_sponsors');
  				      if($minor_sponsors){ ?>
  				       <div class="sponsors">
  				       <?php
    				      foreach($minor_sponsors as $partner){ ?>
    				      <div class="partner small-12 medium-6 columns">
    				        <a href="<?php echo $partner['link']; ?>" target="_blank">
    				          <img src="<?php echo $partner['image']; ?>" />
    				        </a>
    				      </div>
      				    <?php
    				      } ?>
  				     </div>
  				     <?php
  				      }
  				     ?>
				    </div>
				  </section>
          <section class="row">
            <div class="small-12 columns">
              <?php
                $minor_sponsors = get_field('in_kind_sponsors');
                if($minor_sponsors){ ?>
                 <div class="sponsors">
                 <?php
                  foreach($minor_sponsors as $partner){ ?>
                  <div class="partner small-12 medium-6 columns">
                    <a href="<?php echo $partner['link']; ?>" target="_blank">
                      <img src="<?php echo $partner['image']; ?>" />
                    </a>
                  </div>
                  <?php
                  } ?>
               </div>
               <?php
                }
               ?>
            </div>
          </section>
          
			</div>
			<hr>
		</article>
    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>
