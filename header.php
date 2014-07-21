<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Suashiai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link href="<?php bloginfo("template_url")?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url")?>/css/carousel.css" rel="stylesheet">
	<link href="<?php bloginfo("template_url")?>/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

      <?php wp_head()?> 
                                  
  </head>

  <body>
   

      <div class="navbar navbar-inverse " role="navigation">
      <div class="container">
	    
     
     
      <div style="max-width:490px;margin:40px auto">
        <a href="<?php echo get_option("home")?>">
            <img  class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12" src="<?php echo get_theme_mod("logo_image") ?>">
        </a>
      </div>  <!--  end header-left -->

<div class="nav" id="social">

      <ul class="navul col-md-10 col-lg-10 hidden-sm hidden-xs col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs">

        <?php

            query_posts("showposts=10&category_name='social'");
             if ( have_posts() ) : while ( have_posts() ) : the_post(); 
             $url = get_post_meta($post->ID, 'url', true); 
          ?>    

          <li>
            <a target="_blank" title="<?php the_title()?>" href="<?php echo $url?>">
              <?php the_post_thumbnail('social', array('class' => 'img-responsive')); ?>
            </a>
          </li>
       
       <?php 
          
           endwhile;else :  ;
           endif; 

       ?>

      </ul> <!--  end nav -->

     </div>  <!--  end masthead -->

      

		 <div style="max-width:700px;margin:0 auto"> 
		 
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>  <!--  end navbar-header -->

        
        <?php  

           wp_nav_menu(array(
            'menu' => 'primary',
            'theme_location' => 'meu_menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => '',
           'menu_class' => 'nav navbar-nav menu',
            'echo' => true,
            'menu_id' => '',
            'before' => '',
            'after' =>'',
            'link_before' =>'',
            'link_after' =>'',
            'depth' => 0,
            'walker' =>'',
            ) );
          ?>

  
      </div>
    </div>  <!--  end header-left -->
 