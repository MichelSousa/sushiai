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

      	<?php query_posts("showposts=10&category_name=miniatura")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	           
				  <?php $url = get_post_meta($post->ID, 'url', true); ?>

        <div class="col-lg-6">
                 
			         <a href="<?php echo $url?>">
			         	   <?php the_post_thumbnail('minuatura', array('id' => 'img-miniatura')); ?> 
			         </a>
         
          
        </div><!-- /.col-lg-4 -->

        <?php endwhile;else : ?>
			 <?php endif; ?>
      
        
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
	 
	 
	 <!-------------  tabs -------->
	 
	<ul class="nav nav-tabs" id="myTab">
		<li class="active"><a href="#todos">Todos</a></li>
		<li><a href="#gastronomia-oriental">Gastronomia Oriental</a></li>
		<li><a href="#massas">Massas</a></li>
		<li><a href="#hamburguer">Hamburguer</a></li>
		<li><a href="#por">Porções</a></li>
		<li><a href="#jantar-individual">Jantar individual </a></li>
    </ul>
     
    <div class="tab-content">
	
		<div class="tab-pane active" id="todos">
			
			 <!------------ fim tabs ------->
	 
              <div class="marketing tabs-center">
               
			    
					
					
						
						

				 <?php 
		   
		         $category_id = get_category_by_slug( 'cardapio-all' );
                 
			  
				$args = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=>$category_id->term_id,
				  'hide_empty'=> 0,
				  'exclude'  => '',
				  );
				  
				  $categories0 = get_categories($args);
				  
				
				  
				   $contar =count($categories0);
				   
				    if($contar > 0 )
					
					{
				  
				  foreach($categories0 as $category)  
				  {
				  
				  if($category->name <> "cardapio-gastronomia-oriental" ){
				  
				   if($category->name <> "cardapio-hamburguer"){
				  
				    if($category->name <> "cardapio-jantar-individual"){
				     
					 if($category->name <> "cardapio-porçoes"){
							
					   if($category->name <> "cardapio-massas"){
					
					
			   ?>
			   
			   
	

              <div class="col-lg-4" >
			   
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
			
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2 class="col-sx col-sm col-lg col-sx"><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php  } }}
			     }
				 }
				} 
			   }
			   
			  ?>
	   
	  </div>
	  
    </div>
		
		<div class="tab-pane" id="gastronomia-oriental"> 
		  <div class="row-fluid tabs-center">
		
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
			   
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
			
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php  } 
			 
			   }
			   
			   else
			   {
			   
			    ?>
				
				
				  	<?php 
					
					 $count_post1 = count(query_posts("showposts=10&category_name='cardapio-gastronomia-oriental'"));
						
						     if($count_post1 <= 0)
							 {
							   ?>
							   
							    <div class="col-lg-12"> 
							      <h1 style="text-align:center">Não possui nenhum post nesta categoria</h1>
							    </div> 
						<?php }
					
					
					query_posts("showposts=10&category_name='cardapio-gastronomia-oriental'")?>
						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  
						 
						  <div class="col-lg-4">
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
					  <?php endwhile;else : ?>
					 <?php endif; ?>
				
				
			    <?php
			   }
			 
			 ?> 

	   </div>
	   
	     </div>
	   
	   
		<div class="tab-pane" id="massas"> <div class="row-fluid tabs-center">
	   
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
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php }
    			 } 
			    else
			   {
			   
			    ?>
				
				
				  	     <?php 
					
					
					 $count_post2 = count(query_posts("showposts=10&category_name='cardapio-massas'"));
						
						     if($count_post2 <= 0)
							 {
							   ?>
							   
							    <div class="col-lg-12"> 
							      <h1 style="text-align:center">Não possui nenhum post nesta categoria</h1>
							    </div> 
						<?php }
						 
						 
						 query_posts("showposts=10&category_name='cardapio-massas'")?>
						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  
						 
						  <div class="col-lg-4">
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
					  <?php endwhile;else : ?>
					 <?php endif; ?>
				
				
			    <?php
			   }
			 
			 ?> 
			
	  
	  </div></div>
	  
		<div class="tab-pane" id="hamburguer"> <div class="row-fluid tabs-center">
	     
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
			  
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
				
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php  }
					
					 } 
			    else
			   {
			   
			    ?>
				   
				
				  	   
						
							
				  	     <?php 
					
					
					        $count_post3 = count(query_posts("showposts=10&category_name='cardapio-hamburguer'"));
						
						     if($count_post3 <= 0)
							 {
							   ?>
							   
							    <div class="col-lg-12"> 
							      <h1 style="text-align:center">Não possui nenhum post nesta categoria</h1>
							    </div> 
						<?php }
						 

						 query_posts("showposts=10&category_name='cardapio-hamburguer'")?>
						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  
						 
						  <div class="col-lg-4">
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
					  <?php endwhile;else : ?>
					 <?php endif; ?>
				
				
			    <?php
			   }
			 
			 ?> 
 
	  
	  </div></div>
		<div class="tab-pane" id="por"> <div class="row-fluid tabs-center">
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
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php  }  } 
			    else
			   {
			   
			    ?>
				        
				
				  	     <?php
							
							 
					
					
					         $count_post4 = count(query_posts("showposts=10&category_name='cardapio-porcoes'"));
						
						     if($count_post4 <= 0)
							 {
							   ?>
							   
							    <div class="col-lg-12"> 
							      <h1 style="text-align:center">Não possui nenhum post nesta categoria</h1>
							    </div> 
						<?php } 

						 query_posts("showposts=10&category_name='cardapio-porcoes'")?>
						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  
						 
						  <div class="col-lg-4">
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
					  <?php endwhile;else : ?>
					 <?php endif; ?>
				
				
			    <?php
			   }
			 
			 ?> 

	  
	  </div> </div>
	  
	  <div class="tab-pane" id="jantar-individual"> 
		  <div class="row-fluid tabs-center">
		      
			 <?php
			    $category_id4 = get_category_by_slug( 'cardapio-jantar-individual' );
				
				$args5 = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of'=>  $category_id4->term_id,
				  'hide_empty'=> 0
				  );
				  
				  $categories5 = get_categories($args5);
				  
				 
				  
				  
				  $contar5 = count($categories4);
				  
				  if($contar5 > 0)
				  
				  {
				  
				  
				  foreach($categories5 as $category)  
				  
				  
				  {
			   ?>
	

              <div class="col-lg-4" >
			 
			     <span class="details-cardapio-title">  <div class="title"><?php  echo  $category->name;  ?></div> </span>   
				
				 <?php query_posts("showposts=10&category_name=.'".$category->slug."'")?>
	              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      <div class="post">
					<div class="col-lg-6">
					  <?php the_post_thumbnail('cardapio', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
					</div>  
				     <h2><?php the_title(); ?></h2>
				         <?php $price = get_post_meta($post->ID, 'price', true); ?>
						<div class="price">
						   <?php echo $price ?>
						</div> <!------------ end price ------->
				   <div class="col-lg-6">
				  <p><?php echo excerpt('12'); ?></p>
				</div> <!------------ end col-lg-6 -------> 
		      </div> <!------------ end post -------> 
					
			  <?php endwhile;else : ?>
			 <?php endif; ?>
		
			  </div> <!------------ end col-lg-4 -------> 
			  
			  
			  
			 <?php  }  } 
			    else
			   {
			   
			    ?>
				   
				
				  	     <?php 
						     
							 $count_post5 = count(query_posts("showposts=10&category_name='cardapio-jantar-individual'"));
						
						     if($count_post5 <= 0)
							 {
							   ?>
							   
							    <div class="col-lg-12"> 
							      <h1 style="text-align:center">Não possui nenhum post nesta categoria</h1>
							    </div> 
								
							  <?php
							 }
						
						 query_posts("showposts=10&category_name='cardapio-jantar-individual'")?>
						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  
						 
						  <div class="col-lg-4">
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
					  <?php endwhile;else : ?>
					 <?php endif; ?>
				
				
			    <?php
			   }
			 
			 ?>   
			  
		  </div>
		  
	   </div>	  
		
    </div>
	
   </div>
  
   </div>
   
   
    <div id="bg-container-blog">
   
    <div class="row  blog" id="blog">
  
	


	
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
					 $file = get_post_meta($post->ID, 'file', true);
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
		 
			<div class="wpblog" style="display:none;z-index:10;position:relative">
			
		    			  <!-------------------SINGLE------------------------------>
				  <div class="container">
				  
					
					  
				  <div class="col-lg-12"> 


			<!-- Carousel
			================================================== -->
			
			<div class="single" >
					<a  class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
						<span style="position:relative;left:-70px;" class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					  </a>
			<div id="myCarousel1" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			 
			  <div class="carousel-inner" role="listbox" style="
						  background:#D4D2D3;   background: none repeat scroll 0 0 rgba(212, 210, 211, 0.6);
						  text-align:center,-webkit-border-radius:15px;
						  -moz-border-radius:15px;
						  border-radius:15px;float: left;">
			
			             <?php 	
			                     query_posts("showposts=10&category_name='blog'");
						        if ( have_posts() ) : while ( have_posts() ) : the_post();
						 ?>
						  

								<div class="item">
								  <div class="container">
									<h1><?php the_title();?></h1>
									   <?php the_post_thumbnail('blog-single'); ?>
										   
											<?php the_content()?>
									  
									   <span> 
											<img title="Clica aqui para voltar" 
												 style="position:relative;top:0;" 
												 class="img-responsive voltar"  
												 alt="img-exemple" 
												 src="<?php bloginfo("template_url")?>/img/voltar.png">
									   </span>
									
								   </div><!-- /.FIM ITEM -->
								</div> <!-- /.FIM ITEM -->
					
					  <?php endwhile;else : ?>
					 <?php endif; ?>
								
									
								
								
							  </div>
							
					  
					  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					  </a>
							 
			   </div><!-- /.carousel -->
			 </div><!-- /.single -->
	       </div>
         </div>	
<!-----------------------BLOG------------------------->

		
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
		<p><?php echo get_theme_mod("text_endereco") ?> </p> 
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

		     
			
			 
			
			<div class="face">
			   <div class="fb-like-box" data-href="<?php echo get_theme_mod("ur_like_facebook") ?>" data-width="300" data-height="240" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
			</div><!-- end face -->
			
		  </div><!-- end wrapper -->	
		 </div><!-- end col-xs-12 col-sm-6 col-md-6 -->
		 
		 	
	
	  
	  	<div class="col-xs-12 col-sm-6 col-md-6">
		
		  <?php query_posts("category_name=contato")?>
	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <?php the_content(); ?>
		  <?php endwhile;else : ?>
          <?php endif; ?>
	    

         <div class="social_footer">
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
			
         </div>

		</div> 
	  
	
	  
	  </div>
	 
	</div>  
	 
</div>  

	
 <?php get_footer()?>

  