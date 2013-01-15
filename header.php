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
<!-- Lets try to get a responsive menu for phones add  visible-phone -->
<div class="navbar navbar-fixed-top visible-phone">  
  <div class="navbar-inner">  
    <div class="container">  
<!-- <ul class="nav">
  <li class="dropdown">  
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
          Services  
          <b class="caret"></b>  
    </a>  
    <ul class="dropdown-menu">  
     <li><a href="#">Web Design</a></li>  
    <li><a href="#">Web development</a></li>  
    <li><a href="#">Wordpress Theme development</a></li>  
    </ul>
  </li>
</ul> -->
<ul class="nav">
  <!-- wp_list_pages start -->
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


?>
<!-- wp_list_pages start -->

</ul>
<!--   <ul class="nav">
  <li><a href="<?php echo get_permalink(69); ?>">Blog</a></li>
</ul>  -->
    </div>  <!-- close container -->
  </div>  <!-- close navbar inner -->
</div> <!-- clse navbar fixed top -->
  <div class="nav pull-right visible-phone" id="phone-search"><?php get_search_form(); ?></div>
    <div class="container hidden-phone">
      <div class="row">
        <div class="span11">
          <div class="themenu"> 


<ul class="sf-menu sf-navbar hidden-phone">
<!-- wp_list_pages start -->
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


?>
<!-- wp_list_pages start -->


<!--
Searchform
found here:
http://wordpress.org/support/topic/adding-the-searchform-to-the-navbar
-->
</ul>
</div>
</div>
 <div class="search pull-right" id="desktop-search"><?php get_search_form(); ?></div> 

</div> <!-- close row -->

</div> <!-- close container -->

</header>
 <!-- <hr class="hidden-phone"> -->
  <!-- <div class="hidden-phone custom-border" id="submenu-border-top"></div> -->
 <div class="hidden-phone custom-border"></div>