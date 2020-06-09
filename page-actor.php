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
				        
        <?php
            $entryID = $_GET['id'];
            $entry = GFAPI::get_entry($entryID);
            $entryNext = $entryID+1;
            $entryPrev = $entryID-1;  
          ?>
        
        <hr />
        
        <div class="actor-navigation hidden-print">
          <a href="<?php bloginfo('url'); ?>/index.php/registrations/" class="btn btn-theme">Back to Registrations</a>                    
          <?php if ($entryID == '1288'){ ?>
          <?php } else { ?>  
            <a href="<?php bloginfo('url'); ?>/index.php/actor/?id=<?php echo $entryPrev; ?>" class="btn btn-theme">Previous Actor</a>
          <?php } ?>                  
          <a href="<?php bloginfo('url'); ?>/index.php/actor/?id=<?php echo $entryNext; ?>" class="btn btn-theme">Next Actor</a>
          <!--<a href="javascript:window.print()" class="btn btn-theme">Print this Page</a>-->
        </div>

        <hr />

        <div class="actor-information">
          
          <div class="row">
            
            <div class="small-12 large-8 columns">
              <h3><?php echo $entry['1.3']; ?> <?php echo $entry['1.6']; ?></h3>          
              
              <div class="wrapper-info">              
                <h6>Email:</h6> 
                <a href="mailto:<?php echo $entry['2']; ?>"><?php echo $entry['2']; ?></a>
              </div>

              <div class="wrapper-info">
                <h6>Mobile Number:</h6> 
                <a href="tel:<?php echo $entry['6']; ?>"><?php echo $entry['6']; ?></a>
              </div>

              <div class="wrapper-info">
                <h6>Residential Address:</h6> 
                <p>
                  <?php echo $entry['3.1']; ?>
                  <?php if($entry['3.2']){ ?>
                    <br><?php echo $entry['3.2']; ?>
                  <?php } ?>
                  <br><?php echo $entry['3.3']; ?>
                  <br><?php echo $entry['3.4']; ?>, <?php echo $entry['3.5']; ?>, <?php echo $entry['3.6']; ?>
                </p>
              </div>

              

              <?php if($entry['4.1']){ ?>
                <div class="wrapper-info">
                  <h6>Seperate Postal Address:</h6> 
                  <p>
                    <?php echo $entry['4.1']; ?>
                    <?php if($entry['4.2']){ ?>
                      <br><?php echo $entry['4.2']; ?>
                    <?php } ?>
                    <br><?php echo $entry['4.3']; ?>
                    <br><?php echo $entry['4.4']; ?>, <?php echo $entry['4.5']; ?>, <?php echo $entry['4.6']; ?>
                  </p>
                </div>        
              <?php } ?> 

              <div class="wrapper-info">
                <h6>Date of Birth:</h6> 
                <p><?php echo $entry['9']; ?></p>
              </div>     

              <div class="wrapper-info">
                <h6>Australian Citizen:</h6> 
                <p>Yes</p>                
              </div>    

              <div class="wrapper-info">
                <h6>Agents Details:</h6> 
                <p><?php echo $entry['8']; ?></p>
              </div> 


              <div class="wrapper-info">
                <h6>Video URL:</h6> 
                <a href="<?php echo $entry['17']; ?>" target="_blank"><?php echo $entry['17']; ?></a>
              </div>              

            </div><!-- columns -->

            <div class="small-12 large-4 columns">
              <?php 
              $headshot = $entry['13']; 
              $file_parts = pathinfo($headshot);
                if ($file_parts["extension"] == "pdf") { ?>
                <p><a href="<?php echo $headshot; ?>">VIEW PDF file.</a></p>
                  <object data="<?php echo $headshot; ?>" type="application/pdf" id="small-pdf-box" class="print-clear" style="width:150px;height:150px;"></object>
                <?php  
                } else {
                ?>
                <img class="center-block img-responsive" src="<?php echo $headshot; ?>" alt="" style="" />
              <?php } ?>
              <p><a href="<?php echo $headshot; ?>" target="_blank" download>Download Headshot</a></p>              
            </div><!-- columns -->
          
          </div><!-- .row -->

          <hr>

          <div class="row">
            
            <div class="small-12 columns">
              <h6>Experience:</h6>               

              <?php 
              $cvUrl = $entry['12'];
              if($cvUrl) { ?>
                <object class="hidden-print" data="<?php echo $cvUrl; ?>" type="application/pdf" width="100%" height="100%">
                  <p>It appears you don't have a PDF plugin for this browser. No biggie... you can <a href="<?php echo $cvUrl; ?>" target="_blank">click here to download the PDF file.</a></p>           
                </object>

                <?php 
                $cvUrl = $entry['12']; ?>
                <p><a href="<?php echo $cvUrl ?>" target="_blank" download>Download Resume</a></p>                
                      
              <?php } else { ?>
                <h1>Oops. There doesn't seem to be an actor here.</h1>
              <?php } ?> 

            </div><!-- columns -->
          
          </div><!-- .row -->

        </div><!-- .actor-information -->
            
        <?php
            $entryID = $_GET['id'];
            $entry = GFAPI::get_entry($entryID);
            $entryNext = $entryID+1;
            $entryPrev = $entryID-1;  
          ?>
        
        <hr />
        
        <div class="actor-navigation hidden-print">
          <a href="<?php bloginfo('url'); ?>/index.php/registrations/" class="btn btn-theme">Back to Registrations</a>
          <?php if ($entryID == '1288'){ ?>
          <?php } else { ?>  
            <a href="<?php bloginfo('url'); ?>/index.php/actor/?id=<?php echo $entryPrev; ?>" class="btn btn-theme">Previous Actor</a>
          <?php } ?>          
          <a href="<?php bloginfo('url'); ?>/index.php/actor/?id=<?php echo $entryNext; ?>" class="btn btn-theme">Next Actor</a>
          <!--<a href="javascript:window.print()" class="btn btn-theme">Print this Page</a>-->
        </div>

      </div><!-- #actor .entry-content -->    
    
    </article>         

    <?php endwhile; // End the loop ?>    	
  </section><?php // end section ?>
<?php get_footer(); ?>