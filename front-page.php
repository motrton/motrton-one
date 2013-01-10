<?php get_header(); ?>
<!-- <h1>THIS IS FRONT PAGE</h1> -->
<div class="container">
    <div class="row">
        <div class="span8 offset2">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1> 
  <p><?php the_content(); ?></p>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>