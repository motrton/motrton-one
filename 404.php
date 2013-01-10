<?php get_header(); ?>
<!-- <h1>THIS IS PAGE</h1>-->
<div class="container">
  <div class="row">
    <div class="span8 offset2">
        <!-- content -->
      <h2>Error 404 - Page Not Found.</h2>

<p>Search:</p>
<?php include(TEMPLATEPATH . "/searchform.php"); ?>

<!--   DEV -->
<div>
  <p>
    DEVELOPMENT only <?php
    echo $post->ID ." page ID";
    ?> 
  </p>

</div>
<!-- END DEV -->

    </div>
  </div>
</div> <!-- close container -->

<?php get_footer(); ?>