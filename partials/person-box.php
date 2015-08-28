<article>
  <a href="#">
    <?php
      $url = null;
      if ( has_post_thumbnail() ) {
        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-feature');
      }
    ?>
    <figure>
      <img src="<?php echo $url[0]; ?>" alt="" />
    </figure>
    <div class="meta">
      <b><?php the_title(); ?></b>
    </div>
  </a>
  <div class="details">
    <div class="innerDetails">
      <div class="row">
        <div class="small-12 large-6 columns">
          <img src="<?php echo $url[0]; ?>" alt="" />
        </div>
        <div class="small-12 large-6 columns">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</article> 
