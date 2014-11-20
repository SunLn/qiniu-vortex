<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php vortex_featured_image(); ?>  
  <?php $entry_title = ( vortex_post_edit_link() == '' )? 'entry-title entry-title-single entry-title-page' : 'entry-title entry-title-single'; ?>
  <div class="entry-header"> 
    <div class="entry-avatar">
      <?php echo get_avatar( get_the_author_email(), '60' );?>
    </div>
    <h1 class="<?php echo $entry_title; ?>"><?php the_title(); ?></h1>
  </div> 
  
  
  <?php if ( vortex_post_edit_link() != '' ) : ?>  
  <div class="entry-meta"> 
    <?php echo vortex_post_edit_link(); ?> 
  </div>  
  <?php endif;?>
  
  <div class="entry-content clearfix">
  	<?php the_content(); ?>
  </div> <!-- end .entry-content -->
  
  <?php echo vortex_link_pages(); ?>
  
</div> <!-- end #post-<?php the_ID(); ?> .post_class -->

<?php comments_template( '', true ); ?>