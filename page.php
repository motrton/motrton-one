<?php get_header(); ?>
<!-- <h1>THIS IS PAGE</h1>-->
<div class="container">
  <div class="row">
    <div class="span8 offset2">
        <!-- content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
  <?php the_content(); ?>

<!--   DEV -->
<div>
  <p>
    DEVELOPMENT only <?php
    echo $post->ID ." page ID";
    ?> 
  </p>

</div>
<!-- DEV -->
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>
        
    </div>
  </div>
</div> <!-- close container -->

<?php get_footer(); ?>