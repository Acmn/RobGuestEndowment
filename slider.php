<?php 
  $images = get_field('slider_images','options'); 
  if($images){
  ?>
    <ul class="slider" data-orbit>
      <?php foreach($images as $image) {?>
      <li>
        <?php if($image['link']) { echo '<a href="' . $image['link'] . '">'; }?>
        <img src="<?php echo $image['image']['sizes']['page-feature']; ?>" alt="" />
        <?php if($image['link']) { echo '</a>'; }?>
      </li>
      <?php } // end foreach $images ?>
    </ul>
<?php 
  } // end if $images
  ?>