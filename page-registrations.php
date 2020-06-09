<?php get_header(); ?>

  <section class="row" id="mainContent">
    <?php while (have_posts()) : the_post();
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-feature', array('class' => 'margin-bottom'));
      } else {
        include_once('slider.php');
      } ?>
		

    <article <?php post_class('small-12 large-12 columns') ?> id="post-<?php the_ID(); ?>" role="main">
			<div class="entry-content">
				
        <h1 class="page-title"><?php the_title(); ?></h1>
				
        <?php the_content(); ?>
        
        <?php
        $formid = 13;
        $form_count = RGFormsModel::get_form_counts($formid);
                // Displaying Total Entries
        echo '<p><b>TOTAL ENTRIES:</b> '.$form_count['total'].'</p>';

        $search_criteria = array();
        $sorting = array('key' => 'id', 'direction' => "ASC" );
        $paging = array('offset' => 0, 'page_size' => 9999 );
        $total_count = 0;
        $entries = GFAPI::get_entries('13', $search_criteria, $sorting, $paging, $total_count);
                  // $total_count now contains the total number of entries matching the search criteria. This is useful for displaying pagination controls.

        ?>

        <table id="myTable" class="expand">
          <thead>
            <tr align="left">
              <th>Entry ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            <?php if($entries){ 
              foreach($entries as $entry){
                $id = $entry['id'];
                $link = get_bloginfo('url').'/actor/?id='.$id;
                ?>
                <?php  ?>
                <tr>
                  <td><a href="<?php echo $link; ?>" target="_blank"><?php echo $id; ?></a></td>
                  <td><a href="<?php echo $link; ?>" target="_blank"><?php echo $entry['1.3']; ?></a></td>
                  <td><a href="<?php echo $link; ?>" target="_blank"><?php echo $entry['1.6']; ?></a></td>
                  <td><a href="<?php echo $link; ?>" target="_blank"><?php echo $entry['2']; ?></a></td>

                  <td><a href="<?php echo $link; ?>" target="_blank">
                    <?php 
                    $headshot = $entry['13']; 
                    $file_parts = pathinfo($headshot);
                    if ($file_parts["extension"] == "pdf") { ?>
                      <p><a href="<?php echo $headshot; ?>">VIEW PDF file.</a></p>
                      <object data="<?php echo $headshot; ?>" type="application/pdf" id="small-pdf-box" class="print-clear" style="width:150px;height:150px;"></object>
                      <?php  
                    } else {
                      ?>
                      <img class="center-block img-responsive" src="<?php echo $headshot; ?>" alt="" style="max-width:100px;" />
                    <?php } ?>
                  </a></td>
              </tr>
              <?php
              }// end for each 
            } // end if entries ?>
          </tbody>
        </table>
        
      </div>
		</article>


    <?php endwhile; // End the loop ?>
    	
  </section><?php // end section ?>

<?php get_footer(); ?>