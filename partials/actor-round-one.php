<h2>Original Application</h2>

  <div class="actor-information">
  
    <div class="row">
      
      <div class="small-12 large-8 columns">
        
        <h3><?php echo $orEntry['1.3']; ?> <?php echo $orEntry['1.6']; ?></h3>          
        
        
        <div class="wrapper-info">              
          <h6>Email:</h6> 
          <a href="mailto:<?php echo $orEntry['2']; ?>"><?php echo $orEntry['2']; ?></a>
        </div>

        
        <?php if($orEntry['6']){ ?>
        <div class="wrapper-info">
          <h6>Mobile Number:</h6> 
          <a href="tel=<?php echo $orEntry['6']; ?>"><?php echo $orEntry['6']; ?></a>
        </div>
        <?php } ?>


        <?php if($orEntry['3.1']){ ?>
        <div class="wrapper-info">
          <h6>Residential Address:</h6> 
          <p>
            <?php echo $orEntry['3.1']; ?>
            <?php if($orEntry['3.2']){ ?>
              <br><?php echo $orEntry['3.2']; ?>
            <?php } ?>
            <br><?php echo $orEntry['3.3']; ?>
            <br><?php echo $orEntry['3.4']; ?>, <?php echo $orEntry['3.5']; ?>, <?php echo $orEntry['3.6']; ?>
          </p>
        </div>
        <?php } ?>

        
        <?php if($orEntry['4.1']){ ?>
        <div class="wrapper-info">          
          <h6>Seperate Postal Address:</h6> 
          <p>
            <?php echo $orEntry['4.1']; ?>
            <?php if($orEntry['4.2']){ ?>
              <br><?php echo $orEntry['4.2']; ?>
            <?php } ?>
            <br><?php echo $orEntry['4.3']; ?>
            <br><?php echo $orEntry['4.4']; ?>, <?php echo $orEntry['4.5']; ?>, <?php echo $orEntry['4.6']; ?>
          </p>
          
        </div>        
        <?php } ?>

        
        <?php if($orEntry['9']){ ?>
        <div class="wrapper-info">
          <h6>Date of Birth:</h6> 
          <p><?php echo $orEntry['9']; ?></p>
        </div>     
        <?php } ?>


        <?php if($orEntry['10']){ ?>
        <div class="wrapper-info">
          <h6>Australian Citizen:</h6> 
          <p>Yes</p>                
        </div>    
        <?php } ?>

        
        <?php if($orEntry['8']){ ?>
        <div class="wrapper-info">
          <h6>Agents Details:</h6> 
          <p><?php echo $orEntry['8']; ?></p>
        </div>
        <?php } ?>

      </div><!-- /.collumns -->

      
      <?php if($orEntry['13']){ ?>
      <div class="small-12 large-4 columns">
        <?php 
        $headshot = $orEntry['13']; 
        $file_parts = pathinfo($headshot);
          if ($file_parts["extension"] == "pdf") { ?>
          <p><a href="<?php echo $headshot; ?>">VIEW PDF file.</a></p>
            <object data="<?php echo $headshot; ?>" type="application/pdf" id="small-pdf-box" class="print-clear" style="width:150px;height:150px;"></object>
          <?php  
          } else {
          ?>
          <img class="center-block img-responsive" src="<?php echo $headshot; ?>" alt="" style="" />
        <?php } ?>
        <p class="text-right"><small><a href="<?php echo $headshot; ?>" target="_blank" download>Download Headshot</a></small></p>              
      </div><!-- /.collumns -->
      <?php } ?>    
    
    </div><!-- /.row -->



    <?php if($orEntry['17']){ ?>
    <div class="row">

      <div class="small-12 columns">

        <h6>Original Video:</h6>

        <?php if (strpos($orEntry['17'], 'vimeo') !== false) { ?>
        
          <?php //store the URL into a variable
            $vimeo = $orEntry['17'];                    
            //extract the ID
            $url = (int) substr(parse_url($vimeo, PHP_URL_PATH), 1);                    
            //set a custom width and height
            $width = '640';
            $height = '360';                     
            //echo the embed code and wrap it in a class

            echo '<p><b>URL: <a href="https://player.vimeo.com/video/'.$url.'" target="_black">https://player.vimeo.com/video/'.$url.'</a></b>';

            echo '<div class="vimeo-article"><iframe src="https://player.vimeo.com/video/'.$url.'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
          ?>
        
        <?php } else { ?>

          <?php //store the URL into a variable
            $youtube = $orEntry['17'];
            $url = $youtube;               
            //extract the ID
            preg_match(
              '/[\?\&]v=([^\?\&]+)/',
              $url,
              $matches
            );               
            //the ID of the YouTube URL: x6qe_kVaBpg
            $id = $matches[1];               
            //set a custom width and height
            $width = '640';
            $height = '360';               
            //echo the embed code. You can even wrap it in a class
            echo '<p><b>URL: <a href="'.$url.'" target="_black">'.$url.'</a></b>';

            echo '<div class="youtube-article"><iframe class="dt-youtube" width="' .$width. '" height="'.$height.'" src="//www.youtube.com/embed/'.$id.'" frameborder="0" rel="0" modestbranding="1" allowfullscreen></iframe></div>';
          ?>

        <?php }?> 
        <p></p>

      </div>
    </div>
    <?php } ?>



    <?php if($orEntry['12']){ ?>
    <div class="row">
      <div class="small-12 columns">

        <div class="wrapper-info">
          
          <h6>Experience:</h6>               

          <?php 
          $cvUrl = $orEntry['12'];
          if($cvUrl) { ?>
            
            <object class="hidden-print" data="<?php echo $cvUrl; ?>" type="application/pdf" width="100%" height="100%">
              <p>It appears you don't have a PDF plugin for this browser. No biggie... you can <a href="<?php echo $cvUrl; ?>" target="_blank">click here to download the PDF file.</a></p>           
            </object>

            <p class="text-right"><small><a href="<?php echo $cvUrl; ?>" target="_blank" download>Download Resume</a></p>                
                  
          <?php } else { ?>
            <h1>Oops. There doesn't seem to be an actor here.</h1>
          <?php } ?> 
        </div>

      </div> <!-- columns -->
    
    </div><!-- .row -->
    <?php }?>

  </div><!-- .actor-information -->
  
<?php } ?> <!-- Original Application -->








