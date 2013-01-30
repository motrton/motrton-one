<?php get_header(); ?>
<!-- <h1>THIS IS SINGLE</h1> -->
<div class="container" id="main">
  <section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>


  <div class="row">

    <div class="span8">
        <!-- content -->
  <h1><?php the_title(); ?></h1>
  <p><em><?php echo date_i18n(get_option('date_format') ); ?> <?php _e('um','motrton-one'); ?> <?php echo date_i18n(get_option('time_format')); ?></em></p>

  <?php 
    // $content = get_the_content();
    // $postOutput = preg_replace('/<img[^>]+./','', $content);
    // echo $postOutput;

   the_content();

  ?>
  <hr>

<div >
  <p class="post-subline"><?php _e('Dieser Post wurde von','motrton-one'); ?> <?php the_author_posts_link(); ?> <?php _e('geschrieben und ist in der/den Kategorie(en)','motrton-one'); ?> <?php the_category(', '); ?>.<br> <?php 
  if ( is_user_logged_in() ) {
    edit_post_link( __('Post editieren','motrton-one'), '', '');
  }
     ?></p>
  <p>
    <!-- Post navigation -->

<div id="postnav">
  <?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>

<p class="alignleft"><?php previous_post_link('%link', '<i class="icon-hand-left"></i> ' . _e('Vorheriger Post','motrton-one')); ?></p>

<?php endif; ?>

     <?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>

<p class="alignright"><?php next_post_link('%link', _e('Nächster Post','motrton-one') . '<i class="icon-hand-right"></i>'); ?></p>

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
</div> <!-- end row1 -->
</article>
<!-- END OF LOOP -->
  <?php endwhile; else: ?>

<!-- FALL BACK -->
  <div class="row">
    <div class="span8 offset2">
          <p><?php _e('Sorry, dieser Post existiert nicht'); ?></p>
    </div>
  </div>

  <?php endif; ?>
        </section>
    </div> <!-- close container -->



<?php get_footer(); ?>