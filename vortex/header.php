<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="/favicon.ico" rel="shortcut icon">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

</head>
<body <?php body_class(); ?>>
<div class="wrapper">  
  <div id="header">  
      <div id="nav">
        <div class="container_16 clearfix">
          <div class="grid_16">
            <div id="active-menu">
              <div class="rmm-button"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div>
            </div>
            <div class="grid_5 logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();  ?>/images/logo.png" alt="" width="137" height="26"/></a></div>
            <div class="grid_11 link">
                <a href="http://www.qiniu.com/" class="active" target="_blank">官网</a>
                <a href="https://portal.qiniu.com/" target="_blank">开发者平台</a>
                <a href="http://developer.qiniu.com/"  target="_blank">开发者中心</a>
                <a href="http://segmentfault.com/qiniu" target="_blank">问答社区</a>
            </div>
          </div>
        </div>
      </div>           
  </div>