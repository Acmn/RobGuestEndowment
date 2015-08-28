<?php get_header(); ?>

  <section class="row" id="mainContent">
    <?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('small-12 large-8 columns') ?> id="post-<?php the_ID(); ?>" role="main">
			<div class="entry-content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</article>
    <?php endwhile; // End the loop ?>
    	<aside class="small-12 large-4 columns">
    		<?php get_sidebar(); ?>
    	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>