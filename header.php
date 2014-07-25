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
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
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
	    
     
     
      <div style="max-width:490px;margin:40px auto;">
        <a href="<?php echo get_option("home")?>">
            <img  class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12" src="<?php echo get_theme_mod("logo_image") ?>">
        </a>
      </div>  <!--  end header-left -->

<div class="" id="social">

      <ul class="navul col-md-10 col-lg-10 hidden-sm hidden-xs col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs">

        <?php

            query_posts("showposts=10&category_name='social'");
             if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              $class = get_post_meta($post->ID, 'class', true); 
          ?>    

          <li>
            <a target="_blank" title="<?php the_title()?>" href="<?php echo $url?>">
                <style type="text/css"> 
                      .<?php echo $class?>
                      {
                       
                        background: url("<?php bloginfo('template_url')?>/img/<?php echo $class?>.png");
                        float:left;
                        
                      }

                       .<?php echo $class?>:hover
                       {
                          background: url("<?php bloginfo('template_url')?>/img/<?php echo $class?>_on.png");
                           transform: scale(1.1);
                 transition: all 0.5s ease 0s;

                       }
   
                </style> 
             
                

                  <span class="<?php echo $class?>">  </span>
        
        

            </a>
          </li>
       
       <?php 
          
           endwhile;else :  ;
           endif; 

       ?>

      </ul> <!--  end nav -->

     </div>  <!--  end masthead -->

      

		 <div style="max-width:770px;margin:0 auto;margin-bottom:10px"> 
		 
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
 