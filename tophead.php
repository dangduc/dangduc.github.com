<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">         
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo("name"); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo("html_type"); ?>; charset=<?php bloginfo("charset"); ?>" />	
<meta name="generator" content="WordPress <?php bloginfo("version"); ?>" /> <!-- leave this for stats please -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo("rss2_url"); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo("rss_url"); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo("atom_url"); ?>" />
<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
   
<?php //wp_get_archives("type=monthly&format=link"); ?>

<?php //comments_popup_script(); // off by default ?>

<?php wp_head(); ?>

</head>

<body>



<div id="menu">
   <ul>
      <li> 
         <div class="icon"><a href="<?php bloginfo('url'); ?>"><img src="http://www.dangduc.com/wp-content/themes/superman7/images/home.png"/><span>Home</span></a></div>
      </li>
      <li>  
         <div class="icon"><a href="<?php bloginfo('url'); ?>/about-me/"><img src="http://www.dangduc.com/wp-content/themes/superman7/images/about.png"/><span>About Me</span></a></div>
      </li>
      <li>  
         <div class="icon"><a href="http://github.com/dangduc/"><img src="http://www.dangduc.com/wp-content/themes/superman7/images/github.png"/><span>GitHub</span></a></div>
      </li>
   </ul>
</div>

