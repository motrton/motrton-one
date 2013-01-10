<?php
/*
Template Name: Zwei-Splaten-Seite
*/
?>

<?php get_header(); ?>
<!-- <h1>THIS IS PAGE</h1>-->
<div class="container">


    <div class="row">
        <div class="span4">
            <?php
            $argsThumb = array(
            'order'          => 'ASC',
            'post_type'      => 'attachment',
            'post_parent'    => $post->ID,
            'post_mime_type' => 'image',
            'post_status'    => null
            );
        $attachments = get_posts($argsThumb);
        if ($attachments) {
            foreach ($attachments as $attachment) {
            //echo apply_filters('the_title', $attachment->post_title);
            echo '<img src="'.wp_get_attachment_url($attachment->ID, 'thumbnail', false, false).'" />';
        }
    }
?>


        </div>
 <!--    </div> -->
 <!--  <div class="row"> -->
    <div class="span8">
        <!-- content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
  <?php 
    $content = get_the_content();
    $postOutput = preg_replace('/<img[^>]+./','', $content);
    echo $postOutput;

  // the_content();

  ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>
        
    </div>
  </div>
</div> <!-- close container -->

<?php get_footer(); ?>