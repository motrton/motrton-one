<?php get_header(); ?>
<!-- <h1>THIS IS INDEX CATEGORIES</h1> -->
<div class="container">
    <div class="row">
        <div class="span8">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
        </div>

                <div class="span4">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
    </div>
</div>



<?php get_footer(); ?>