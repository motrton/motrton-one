<?php get_header(); ?>
<!-- <h1>THIS IS HOME</h1> -->
<div class="container">
  <div class="row">
    <div class="span8">
        <!-- content -->
        <h1>Blog</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h2><a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>

  <p><em> <?php the_time('l, F jS, Y'); ?></em></p> 
  <hr>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, there is no post'); ?></p>
  <?php endif; ?>
        
    </div>

        <div class="span4">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>

  </div>
<!--   <div class="row">
    <div class="span8 offset2">
        sidebar
        <?php get_sidebar(); ?>
    </div>
  </div> -->
</div> <!-- close container -->
<?php get_footer(); ?>