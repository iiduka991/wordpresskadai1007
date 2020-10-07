<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>


<div id="container" class="site">


</head>

<body class="home">

<div id="container">
<header>
<h1 id="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE COMPANY"></a></h1>
<!--PC用（901px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="company.html">Company</a></li>
<li class="ddmenu-title">Service
	<ul class="ddmenu">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<!--小さい端末用（900px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="company.html">Company</a></li>
<li id="menubar_hdr2" class="close">Service
	<ul id="menubar-s2">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<ul class="icon">
<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram.png" alt="Instagram"></a></li>
<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" alt="TouTube"></a></li>
</ul>
</header><!-- #masthead -->

	<div id="content" class="site-content">
