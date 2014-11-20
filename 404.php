<?php get_header();	?>

<?php get_template_part( 'loop-meta' ); ?>
  
<div class="container_16 clearfix">
  
  <div class="grid_11">
    <div id="content">	  
	  
	  <div id="post-0" class="post-0 post type-post error404 not-found">
      
        <div class="entry-content">
    
          <p><?php printf( __( "开个玩笑，你想访问 %s, 但实际它不存在, 意味着我可能干了什么坏事", 'vortex' ), '<code>' . home_url( esc_url( $_SERVER['REQUEST_URI'] ) ) . '</code>' ); ?></p>
          
          <p><?php _e( "以下是本博客最近更新的一些文章，兴许能够帮助到你.", 'vortex' ); ?></p>
    
          <ul>
            <?php wp_get_archives( array( 'limit' => 20, 'type' => 'postbypost' ) ); ?>
          </ul>                   
    
        </div><!-- end .entry-content -->
    
      </div><!-- end #post-0 -->
    
    </div> <!-- end #content -->
  </div> <!-- end .grid_11 -->
  
  <?php get_sidebar(); ?>

</div> <!-- end .container_16 -->
  
<?php get_footer(); ?>