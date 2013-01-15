<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title> <?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <meta name="description" content="<?php bloginfo('description'); ?>" /> -->
    <meta name="author" content="fabiantheblind" />
 <!--    <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Le styles -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url');?>" >
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
<header>
    <div class="container">

      <div class="row">
        <div class="span11">
          <div class="themenu"> 


<ul class="sf-menu sf-navbar">

        <?php
        
        $options = get_option('motrton-one_options');

$args = array(
    'depth'        => 0,
    'show_date'    => '',
    'date_format'  => get_option('date_format'),
    'child_of'     => 0,
    'exclude'      =>  $options['excludepages'],
    'include'      => '',
    'title_li'     => __(''),
    'echo'         => 1,
    'authors'      => '',
    'sort_column'  => 'menu_order, post_title',
    'link_before'  => '',
    'link_after'   => '',
    'walker'       => '',
    'post_type'    => 'page',
    'post_status'  => 'publish' 
);
 wp_list_pages( $args );


// wp_page_menu( array( 'show_home' => 'Blog', 'sort_column' => 'menu_order' ) );
?>
<!-- found here:
http://wordpress.org/support/topic/adding-the-searchform-to-the-navbar
-->
 <li class="search pull-right"><?php get_search_form(); ?></li> 
</ul>
</div>
</div>
</div> <!-- close row -->
      <!-- <div class="row"> -->
        <!-- <div class="span11"> -->
          <!-- <div class="themenu">  -->
 <?php 
//  $options = get_option('motrton-one_options');

// // this would list pages
//   $argspagemenu = array(
//     'sort_column' => 'menu_order, post_title',
//     'menu_class'  => 'menu-inner',
//     'include'     => '',
//     'exclude'     => $options['excludepages'],
//     'echo'        => true,
//     'show_home'   => false,
//     'link_before' => '',
//     'link_after'  => '' );
//  wp_page_menu( $argspagemenu );
?>

<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<!--

 <?php 
   //      $defaults = array(
   //              'theme_location'  => 'primary',
   //              'menu'            => 'custom_menu',
   //              'container'       => 'div',
   //              'container_class' => 'themenu',
   //              'container_id'    => '',
   //              'menu_class'      => 'sf-menu sf-navbar',
   //              'menu_id'         => '',
   //              'echo'            => 1,
   //              'fallback_cb'     => 'wp_page_menu',
   //              'before'          => '',
   //              'after'           => '',
   //              'link_before'     => '',
   //              'link_after'      => '',
   //              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
   //              'depth'           => 2,
   //              'walker'          => ''
   //              );

   // wp_nav_menu( $defaults );
 ?>
   
-->


</header>
<hr>
</div> <!-- close container -->