<?php get_header(); ?>
<!-- <h1>THIS IS HOME</h1> -->
<div class="container" id="main">

  <h1>Blog</h1>
  <div class="row" id="masterrow">

<div class="linked">
    <div class="span8" id="outer">
        <div class="linked">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row">
<!--             <h2><a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>-->
            <h2><?php the_title(); ?></h2>

        <?php 
            /**
             * Get the images thumbnails
             */
            
             $argsThumb = array(
                  'order'          => 'ASC',
                  'post_type'      => 'attachment',
                  'post_parent'    => $post->ID,
                  'post_mime_type' => 'image',
                  'post_status'    => null
                  );
            $attachments = get_posts($argsThumb);
            if ($attachments) {
            // http://wordpress.org/support/topic/getting-thumbnails-of-images-attached-to-a-post  
            $images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
            //foreach( $images as $imageID => $imagePost ){
              echo '<div class="span2 image-container-inner-home animated fadeIn">';
              // echo wp_get_attachment_image($imageID , 'thumbnail', false);
              // 
              $firstImageSrc = wp_get_attachment_image_src(
                                array_shift(
                                  array_keys($images)
                                  )
                                );

              echo "<img src=\"{$firstImageSrc[0]}\" alt=\"\" />"; 
              echo "</div>"; // close span2 image-container-inner-home
              //}
            echo '<div class="span6" >';
            }else{
          echo '<div class="span8" >';
          }
      ?>
      <!-- content -->
       <?php the_excerpt()?><a href= "<?php the_permalink(); ?>" ><?php _e('Mehr?','motrton-one'); ?> </a>
      <p><em><?php echo date_i18n(get_option('date_format') ); ?> <?php _e('um','motrton-one'); ?> <?php echo date_i18n(get_option('time_format')); ?></em> </p> 
    </div> <!-- close div span 6 id text-excerpt -->
    </div> <!-- close row inner -->
    <hr>
    <?php endwhile; else: ?>

    <p>
  <?php _e('Leider gibt es keinen Post'); ?>
    </p>
    <?php endif; ?>
    </div> <!-- close lined class -->

          </div> <!-- close span8 id outer -->
</div>
    <div class="span4" id="sidebar">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div> <!-- close sidebar span4 sidebar -->
  </div> <!-- close masterrow -->
</div> <!-- close container -->

<?php get_footer(); ?>