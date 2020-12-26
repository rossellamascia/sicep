<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sicep
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  <?php wp_head(); ?>
</head>

<body id="page-top">

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="http://localhost:8888/wp-content/uploads/2020/08/logo.png" alt="logo" class="logo">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse menu-right" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#chisiamo">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#comelavoriamo">Come lavoriamo</a>
          </li>
          <li class="nav-item">
          <a class="nav-link bottone js-scroll-trigger" href="#contattaci" style="color:#ffffff !important;">Contattaci</a>
          </li>
        </ul>
		  <?php 
		  /*wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 3,
                    'container' => false,
                    'menu_class' => 'navbar-nav ml-auto'
                ));
                */?> 
                
        </div>
      </div>
    </nav>

  