<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-header"> 
    <div class="entry-avatar">
      <?php echo get_avatar( get_the_author_email(), '60' );?>
    </div>
    <h1 class="entry-title entry-title-single"><?php the_title(); ?></h1>
  </div>   
  <div class="entry-meta">    
  <?php echo vortex_post_author() . vortex_post_date() .  vortex_post_category() . vortex_post_edit_link(); ?>
  </div><!-- .entry-meta -->
  
  <div class="entry-content clearfix">
  	<?php the_content(); ?>
  </div> <!-- end .entry-content -->
  
  <?php echo vortex_link_pages(); ?>
  
  <!-- JiaThis Button BEGIN -->
  <div class="jiathis_style">
    <span class="jiathis_txt">分享到：</span>
    <a class="jiathis_button_tools_1"></a>
    <a class="jiathis_button_tools_2"></a>
    <a class="jiathis_button_tools_3"></a>
    <a class="jiathis_button_tools_4"></a>
    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
    <a class="jiathis_counter_style"></a>
  </div>
  <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>

  <!-- 多说评论框 start -->
  <div class="ds-thread" data-thread-key="<?php the_ID(); ?>" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"></div>
  <!-- 多说评论框 end -->
  <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
  <script type="text/javascript">
  var duoshuoQuery = {short_name:"blogqiniu"};
    (function() {
      var ds = document.createElement('script');
      ds.type = 'text/javascript';ds.async = true;
      ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
      ds.charset = 'UTF-8';
      (document.getElementsByTagName('head')[0] 
       || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script>
  <!-- 多说公共JS代码 end -->
  
<!-- JiaThis Button END -->
</div> <!-- end #post-<?php the_ID(); ?> .post_class -->

<?php vortex_author(); ?> 

