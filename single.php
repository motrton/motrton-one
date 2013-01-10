<?php get_header(); ?>
<!-- <h1>THIS IS SINGLE</h1> -->
<div class="container" id="main">
  <section>
  <div class="row">
    <div class="span8">
        <!-- content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
  <h1><?php the_title(); ?></h1>
  <p><em><?php the_time('l, F jS, Y'); ?></em></p>
 <?php the_content(); ?>
</article>
  <hr>

<div >
  <p class="post-subline">Dieser Post wurde von <?php the_author_posts_link(); ?> geschrieben und ist in der/den Kategorie(en) <?php the_category(', '); ?>.<br> <?php edit_post_link('Post editieren', '', ''); ?></p>
  <p>
    <!-- Post navigation -->

<div id="postnav">
  <?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>

<p class="alignleft">     <?php previous_post_link('%link', '<i class="icon-hand-left"></i> Vorheriger Post'); ?></p>

<?php endif; ?>

     <?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>

<p class="alignright">    <?php next_post_link('%link','Nächster Post <i class="icon-hand-right"></i>'); ?></p>

<?php endif; ?>
<div style="clear: both;"></div>
</div>
   <!-- Ende Post navigation -->
  </p> 
</div>

  <?php comments_template(); ?>
</div>

    <div class="span4">
        <!-- sidebar -->
        <?php get_sidebar('primary'); ?>
    </div>
</div>
  <?php endwhile; else: ?>
  <div class="row">
    <div class="span8 offset2">
          <p><?php _e('Sorry, this post does not exist.'); ?></p>
    </div>
  </div>

  <?php endif; ?>
        </section>
    </div> <!-- close container -->



<?php get_footer(); ?>