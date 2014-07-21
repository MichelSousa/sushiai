<?php get_header()?>

<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
 
    <?php dynamic_sidebar('primary_widget_area'); ?>
   
<?php endif; ?>

<div class="container">
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
  
    <?php dynamic_sidebar('secondary_widget_area'); ?>

<?php endif; ?>


</div>

<?php get_footer()?>