<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="og:title" content="Blog"/>
<meta itemprop="name" content="Blog"/>
<meta property="og:url" content="http://www.satine.org"/>
<meta itemprop="url" content="http://www.satine.org"/>
<meta property="og:type" content="article"/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>

<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="page">

<!-- <div id="header"> -->
<header>
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
		<div class="main-nav">
		<ul>
    		<li><a href="/about/">About</a></li>
    		<li><a href="/resume/">Resumé</a></li>
    		<li><a href="https://twitter.com/charlietuna">Twitter</a></li>
		</ul>
		</div>
	</div>
<header>
<!-- </div> -->
