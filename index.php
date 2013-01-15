<?php get_header(); ?>
<!-- <h1>THIS IS INDEX</h1> -->
<div class="container">

  <h1>Index</h1>
  <div class="row" id="masterrow">


    <div class="span8 offset1" id="outer">
        <div class="linked">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row" id="inner">
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
              echo '<div class="span2" id="image-container-inner-home">';
              // echo wp_get_attachment_image($imageID , 'thumbnail', false);
              // 
              $firstImageSrc = wp_get_attachment_image_src(
                                array_shift(
                                  array_keys($images)
                                  )
                                );

              echo "<img src=\"{$firstImageSrc[0]}\"  />"; 
              echo "</div>"; // close span2 image-container-inner-home
              //}
            echo '<div class="span5" id="text-excerpt">';
            }else{
          echo '<div class="span8 offset1" id="text-excerpt">';
          }
      ?>
      <!-- content -->
       <p><?php the_excerpt()?> <a href= "<?php the_permalink(); ?>" > Mehr? </a></p>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p> 
    </div> <!-- close div span 6 id text-excerpt -->
    </div> <!-- close row inner -->
    <hr>
    <?php endwhile; else: ?>

    <p>
  <?php _e('Sorry, there is no post'); ?>
    </p>
    <?php endif; ?>
    </div> <!-- close lined class -->

          </div> <!-- close span8 id outer -->

    <div class="span4" id="sidebar">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div> <!-- close sidebar span4 sidebar --> 
  </div> <!-- close masterrow -->
</div> <!-- close container -->

<?php get_footer(); ?>