<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php vortex_featured_image(); ?>
  <div class="entry-header"> 
    <div class="entry-avatar">
      <?php echo get_avatar( get_the_author_email(), '60' );?>
    </div>
    <div class="entry-content">
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>    
      <div class="entry-meta">    
      <?php echo vortex_post_author() . vortex_post_date() .  vortex_post_category() . vortex_post_edit_link(); ?>
      </div><!-- .entry-meta -->        
    </div>
  </div> 


  <div class="entry-content clearfix">	
	<?php vortex_post_style(); ?>
  </div> <!-- end .entry-content -->
  
  <?php echo vortex_link_pages(); ?>
  
 

</div> <!-- end #post-<?php the_ID(); ?> .post_class -->