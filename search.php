<?php get_header(); ?>
<!-- <h1>THIS IS INDEX CATEGORIES</h1> -->
<div class="container">
    <div class="row">
        <div class="span8">
       <?php if (have_posts()) : ?>
         <p class="info">Deine Suchergebnisse f&uuml;r <strong><?php echo $s ?></strong></p>
 
         <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
               <?php the_content(); ?>
            </div>
         <?php endwhile; ?>
 
 <!--         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p> -->
 
      <?php else : ?>
         <h2>Leider nichts gefunden</h2>
 
      <?php endif; ?>
        </div>

                <div class="span4">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
    </div>
</div>



<?php get_footer(); ?>