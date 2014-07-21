<?php get_header()?>

  </div>

  <div class="container">
   
	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
   <?php the_post_thumbnail( array('class' => 'img-responsive')) ?> 
    <h2> <?php the_title();?> </h2>
    <?php the_content();?>
   		
   <?php endwhile;else : ?>
   <?php endif; ?>

  </div><!-- end container-->

  
<?php get_footer()?>