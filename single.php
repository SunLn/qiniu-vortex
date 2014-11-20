<?php get_header();	?>

<div class="container_16 clearfix"  id="content">
  
  <?php vortex_featured_image(); ?>

  <div class="grid_11">
    
    <div>	    
	  <?php if ( have_posts() ) : ?>
      
        <?php while ( have_posts() ) : the_post(); ?>
        
          <?php get_template_part( 'content', 'single' ); ?>
        
        <?php endwhile; ?>
      
      <?php else : ?>
                  
        <?php get_template_part( 'loop-error' ); ?>
      
      <?php endif; ?>
      
    
    </div> <!-- end #content -->
  </div> <!-- end .grid_11 -->
  
  <?php get_sidebar(); ?> 
  
  <?php vortex_loop_nav_singular_post(); ?>

</div> <!-- end .container_16 -->
  
<?php get_footer(); ?>