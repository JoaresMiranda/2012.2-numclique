<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Joares Miranda" />
    <meta name="verify-v1" content="eP+vA6K9ihp+EdJYKdkB9TDF2xZTgdWj9b8uJG6ga7w=" />
    <meta name="google-site-verification" content="X3Cxv7Aqei_rddWPix1lhJlmgN5IT9e3rh0KbdTJ56U" />
    <link rel="shortcut icon" type="image/ico" href="http://www.numclique.net/favicon.png" />
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>

    <!-- analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1502075-4']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- /analytics -->

    <!-- Modal -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.js"></script>    
    <!-- /Modal -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
   

    <!-- Facebook -->
    <?php if (is_single()) { ?>
    <meta property="og:image" content="<?php echo reset(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>">
    <?php } else { ?>
    <meta property="og:image" content="http://www.numclique.net/midiakit/imagens/icone-numclique.jpg">
    <?php
    } ?>
	<meta property="fb:admins" content="100000550563704"/>
    <meta property="fb:page_id" content="147177731988934"/>
    <meta property="fb:app_id" content="428712317162358"/>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=366361863440457";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- /Facebook -->
	
    <!-- Google Plus -->
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'pt-BR'}</script>
    <script type="text/javascript">
    window.___gcfg = {lang: 'pt-br'};
    (function() 
    {var po = document.createElement("script");
    po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(po, s);
    })();</script>
	<!-- /Google Plus -->

    <title>
		<?php
        if (wp_title(' ', false)) {
            wp_title(' ');
            echo ' | ';
            bloginfo('name');
        } else {
            bloginfo('name');
            echo ' | ';
            is_home() ? bloginfo('description') : wp_title('');
        }
        ?>
    </title>
	
	<?php wp_head(); ?>	
</head>

<body>

<!-- Site -->
<div id="Site">

	<!-- Header -->
	<div id="Header">
        <h1>
            <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
    </div>
    <!-- /Header -->
    
    <!-- Menu -->
    <div id="Menu">
    	<?php wp_nav_menu( array('menu' => 'Menu' )); ?>
    </div>
    <!-- Menu -->
    
    <!-- Content -->
    <div id="Content">
