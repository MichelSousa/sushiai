 <?php get_header()?>

<div id="bg-container" style="position:relative;">
   <div class="wraper-slide" style="">
 <div class="container" >
 
 
	  
	  <?php query_posts("showposts=1&category_name=slide")?>
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  
             <?php the_content()?>

        <?php endwhile;else : ?>
		<?php endif; ?>
			 
        

	
  
  </div><!-- /.container -->
  
 
  </div><!-- /.wraper-bg -->	


      
  
	  
	 
	  <div class="container bt"> <!-- marketing -->

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6">
         <img class="" src="<?php bloginfo("template_url")?>/img/banner2pequeno.png" alt="Generic placeholder image" style="width:100%; height: 215px;">
        
         
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <img class="" src="<?php bloginfo("template_url")?>/img/banner3pequeno.png" style="width:100%; height: 215px;">
         
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->

 </div><!-- /.marketing   -->
	 
	 
	 
	 
  </div>
  </div> 
  </div><!-- /.carousel -->
  
 

     

    

    </div><!-- /.container -->
 </div><!-- /.bg-container -->
 <div id="bg-container-center">
 
      <div style="max-width:1477px !important" class="row-cardapio container" id="cardapio">
  
	  
	  
	  <div class="row title-cardapio" id="carte">
	  
	   <div  style="margin:90px 0px 61px 0px;max-width:500px !important;margin:103px auto" class="">
	   
	 <img style="text-align: center "  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  src=" <?php echo get_theme_mod("logo_image_cardapio") ?>">
		 
	   </div>
	   
	</div>
	
     

 <div class="marketing tabs-center">
	 
	
	   
	   <!---------------------------------------------------------------------------------->
	   
	   
	   	<ul id="filters" class="clearfix nav nav-tabs">
			<li><span class="filter active" data-filter="card icon logo web">Todos</span></li>
			
			<li><span class="filter" data-filter="card">Gastronomia Oriental</span></li>
			<li><span class="filter" data-filter="icon">Massas</span></li>
			<li><span class="filter" data-filter="logo">Hamburguer</span></li>
			<li><span class="filter" data-filter="web">Porções</span></li>
		</ul>

		<div id="portfoliolist">
			
			

			

			

				
			
			
			
			    <?php 
		   
		         $category_id = get_category_by_slug( 'cardapio-gastronomia-oriental' );
                 
			  
				$args = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=>$category_id->term_id,
				  'hide_empty'=> 0
				  );
				  
				  $categories0 = get_categories($args);
				  
				
				  
				   $contar =count($categories0);
				   
				    if($contar > 0 )
					
					{
				  
				  foreach($categories0 as $category)  
				  {
			   ?>
			       <div class="col-lg-4" >
			       
				
				<?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
				 <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>  
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper ">			
					  <div class="col-lg-12 hover">
							<div class="col-lg-6">
							 <a href="<?php the_Permalink()?>"> <?php the_post_thumbnail('cardapio', array('class' => 'img-responsive')); ?> </a>
							</div>  
							 <h2><?php the_title(); ?></h2>
								 <?php $price = get_post_meta($post->ID, 'price', true); ?>
								<div class="price">
								   <?php echo $price ?>
								</div> <!------------ end price ------->
						   <div class="col-lg-6">
						  <p><?php echo excerpt('12'); ?></p>
						</div> <!------------ end col-lg-6 -------> 
					 
						</div> <!------------ end col-lg-6 -------> 	
				</div>
			</div>
		
			
			  <?php endwhile;else : ?>
			 <?php endif; ?>
  </div>
			 <?php  } }?>			 
						
			
			
		
			  <?php
			    $category_id3 = get_category_by_slug( 'cardapio-porcoes' );
				
				$args4 = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=> $category_id3->term_id,
				  'hide_empty'=> 0
				  );
				  
				  $categories4 = get_categories($args4);
				  
				 
				  
				  
				  $contar4 = count($categories4);
				  
				  if($contar4 > 0)
				  
				  {
				  
				  
				  foreach($categories4 as $category)  
				  
				  
				  {
			   ?>
	

              <div class="col-lg-4" >
			 
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
				
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="<?php bloginfo("template_url")?>/img/portfolios/logo/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">KittyPic</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																							
			
														
			
	
			  <?php endwhile;else : ?>
			 <?php endif; ?>
  </div>
			 <?php  } }?>			 
								
													

													
			
			  <?php  
		 
		        $category_id1 = get_category_by_slug( 'cardapio-massas' );
			   
				$args1 = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=> $category_id1->term_id,
				  'hide_empty'=> 0
				  );
				  
				  $categories1 = get_categories($args1);
				  
				  $contar1 = count($categories1);
				  
				  if($contar1 > 0)
				  
				  {
				  
				  foreach($categories1 as $category)  
				  {
			   ?>
	

              <div class="col-lg-4" >
			  
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
			
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
					 <div class="col-lg-12 hover">
							<div class="col-lg-6">
							 <a href="<?php the_Permalink()?>"> <?php the_post_thumbnail('cardapio', array('class' => 'img-responsive')); ?> </a>
							</div>  
							 <h2><?php the_title(); ?></h2>
								 <?php $price = get_post_meta($post->ID, 'price', true); ?>
								<div class="price">
								   <?php echo $price ?>
								</div> <!------------ end price ------->
						   <div class="col-lg-6">
						  <p><?php echo excerpt('12'); ?></p>
						</div> <!------------ end col-lg-6 -------> 
					 
						</div> <!------------ end col-lg-6 -------> 	
							</div>
						</div>							
			  <?php endwhile;else : ?>
						 <?php endif; ?>
			  </div>
						 <?php  } }?>		
																						

		
																	
 <?php
			     $category_id2 = get_category_by_slug( 'cardapio-hamburguer' );
				 
				$args2 = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=> $category_id2->term_id,
				  'hide_empty'=> 0
				  );
				  
				  $categories2 = get_categories($args2);
				  
				  $contar2 = count($categories2);
				  
				  if($contar2 > 0)
				  
				  {
				  
				
					
				  foreach($categories2 as $category)  
				  {
				  ?>
			       <div class="col-lg-4" >
			       
				
				<?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
				 <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>  
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper ">			
					  <div class="col-lg-12 hover">
							<div class="col-lg-6">
							 <a href="<?php the_Permalink()?>"> <?php the_post_thumbnail('cardapio', array('class' => 'img-responsive')); ?> </a>
							</div>  
							 <h2><?php the_title(); ?></h2>
								 <?php $price = get_post_meta($post->ID, 'price', true); ?>
								<div class="price">
								   <?php echo $price ?>
								</div> <!------------ end price ------->
						   <div class="col-lg-6">
						  <p><?php echo excerpt('12'); ?></p>
						</div> <!------------ end col-lg-6 -------> 
					 
						</div> <!------------ end col-lg-6 -------> 	
				</div>
			</div>
		
			
			  <?php endwhile;else : ?>
			 <?php endif; ?>
  </div>
			 <?php  } }?>			 
																									
			
						
			
		</div>
	   
	   <!----------------------------------------------------------------------------------->
	 
	     </div> 
    </div>
	
   </div>
  
   </div>
   
   
    <div id="bg-container-blog">
   
    <div class="row  blog" id="blog">
  
	
		 <script>
		 var b= jQuery.noConflict() 
		 
		   b(document).ready(function(){
		    
			b(".leia").click(function(){
			  
			  var post_id = b(this).attr("id");
			  
			  b(".wpblog").css({display:"block"})
			  b("#postCarousel,.setas").css({display:"none"})
			   
			      b.ajax({
				  
				  data:{post_id:post_id},
				  url:"<?php echo get_bloginfo('template_url')?>/blog-post.php",
				  type:"post",
				 
				  
				  success:function(data){
				  
				      b(".wpblog").html(data);
					  
		
				  }, 
				  
				  error:function(){
				    alert("erro")
				  }
				  
				  })
			  })
		   
		     
		   
		   })
		  
		 </script>

	
<div class="container blog-post" style="max-width:1477px !important">
 <h1><img class="img-responsive"  src="<?php bloginfo("template_url")?>/img/blog.png"></h1>
  <div class="row">
    <div class="col-sm-12">
	
	
   <div id="postCarousel" style="display:block" class="carousel slide slide-blog" data-ride="carousel">
      <div class="carousel-inner">
					<?php
					$args = array( 'posts_per_page' => 100 ,'category_name'=>'blog'  );
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
					$i = 0;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					if ( $i == 1 ) {

					    ?> 

					    <div class="item active">
					            <?php } ?>
					         <div class="col-md-6">

					             <h2><?php echo get_the_title();?></h2>

					           <?php the_post_thumbnail('blog'); ?>
					  
					    		 <span class="details"><?php the_time(' j ') ?>de<?php the_time(' F Y ') ?> </span>

					             <?php $content = get_the_content();?>
					       
					         <p><?php echo wp_trim_words($content, 40);?></p>

					         <p class="leia"  id="<?php echo get_the_ID(); ?>">
			                      Leia mais +
						     </p>

					         </div>

					

						

                    <?php 

					if ( $i % 2 == 0 && $i != 10 ) { echo '</div><div class="item">'; }
					endwhile;
					           echo '</div>';
					wp_reset_postdata();
					endif;
					?>
      </div>
    

				    

     
	   
    </div><!-- /.carousel -->
			 
	   
    </div> <!-- /col-sm-6 -->
         
         <div class="setas" style="display:block">		 
          <a class="left carousel-control" data-slide="prev" href="#postCarousel">
			<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
            <a  class="right carousel-control " href="#postCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
            </a>	
         </div>
		 
			<div class="wpblog" style="dislay:block">
					
			</div>
			
  </div> <!-- /row -->
         
</div> <!-- /container -->

    <style type="text/css">
       .certo
       {
       		float: right;
       	    z-index: 10;
       	    position: relative;
       		top:29px;
       		right: 5px
       }

			

    </style>




	
    </div><!-- end bg-blog -->	 
	
    <div  id="location">
	  <div class="headerlocation">
	  <div class="location">
	   <div class="container" style="max-width:1477px !important">
		 <h1>LOCALIZAÇÃO</h1>
		<p>Rua Lucia Madalena Strapassoni, 154 | Sala 5, Quatro Barras</p> 
	  </div>	
	 </div><!-- endcontainer -->	  
	   <?php query_posts("showposts=1&category_name=mapa")?>
	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      <?php the_content()?>
	     <?php endwhile;else : ?>
        <?php endif; ?>
	 </div>
   </div>
	
	<div class="row bgcontato">
	<div class=" headercontato">
	<div  id="contact" class="container contato" style="max-width:1477px !important">

	   <div class="col-xs-12 col-sm-6 col-md-6">
	    <div class="wrapperxxx">
		    <h2>CONTATO</h2>
			<h3><?php echo get_theme_mod("text_fone") ?></h3>

		     <ul>
			   <?php

            query_posts("showposts=10&category_name='social_footer_min'");
             if ( have_posts() ) : while ( have_posts() ) : the_post(); 
             $url = get_post_meta($post->ID, 'url', true); 
             $class = get_post_meta($post->ID, 'class', true); 
          ?>  


       
		  <li>
            <a target="_blank" title="<?php the_title()?>"  href="<?php echo $url?>">    </a>

            	

                <style type="text/css"> 
                      .<?php echo $class?>
                      {
                       
                        background: url("<?php bloginfo('template_url')?>/img/<?php echo $class?>_off.png");
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
 				
        
          </li>
        
  

            <?php 
          
           endwhile;else :  ;
           endif; 

              ?>
			</ul>
			
			
			 <ul>
			   <?php

            query_posts("showposts=10&category_name='social_footer_medium'");
             if ( have_posts() ) : while ( have_posts() ) : the_post(); 
             $url = get_post_meta($post->ID, 'url', true); 
             $class = get_post_meta($post->ID, 'class', true); 
          ?>  


       
		  <li>
            <a target="_blank" title="<?php the_title()?>"  href="<?php echo $url?>">

            	

                <style> 
                      .<?php echo $class?>
                      {
                       
                        background: url("<?php bloginfo('template_url')?>/img/<?php echo $class?>_off.png");
                        float:left;
                        
                      }

                       .<?php echo $class?>:hover
                       {
                       	  background: url("<?php bloginfo('template_url')?>/img/<?php echo $class?>_on.png");
                       	   transform: scale(1.1);
   						   transition: all 0.5s ease 0s;

                       }
   
                </style> 
                
                

                  <span class="<?php echo $class?>"></span>
 				
            </a>
          </li>
        
  

            <?php 
          
           endwhile;else :  ;
           endif; 

              ?>
			</ul>
			
			<div class="face">
			   <div class="fb-like-box" data-href="<?php echo get_theme_mod("ur_like_facebook") ?>" data-width="300" data-height="240" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
			</div><!-- end face -->
			
		  </div><!-- end wrapper -->	
		 </div><!-- end col-xs-12 col-sm-6 col-md-6 -->
		 
		 	
	
	  
	  	<div class="col-xs-12 col-sm-6 col-md-6">
		 <div class="wrapperxxx">
		  <?php query_posts("category_name=contato")?>
	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <?php the_content(); ?>
		  <?php endwhile;else : ?>
          <?php endif; ?>
		 </div> 
		</div> 
	  
	
	  
	  </div>
	 
	</div>  
	 
</div>  
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_url")?>/js/jquery.mixitup.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/layout.css">
	   
	   		
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>

	   
	   
	
 <?php get_footer()?>

  