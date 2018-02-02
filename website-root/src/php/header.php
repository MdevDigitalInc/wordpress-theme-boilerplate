<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
    <title><?php wp_title(); ?></title>
		<!-- [ SEO ] -->
		<meta name="keywords" 							content="" />
		<meta name="description" 						content="Base Project Install" />
		<!-- [ FACEBOOK OG ] -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="fb:app_id" content="APP_ID_HERE" />
    <meta property="og:type" content="website" />
    <meta property="og:url"  content="<?php bloginfo('url'); ?>" />
    <meta property="og:title" content="<?php wp_title(); ?>" />
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/social/moreira-development-twitcard.png" />
		<!-- [ TWITTER CARDS ] -->
		<meta name="twitter:card"           content="<?php bloginfo('template_url'); ?>/img/social/moreira-development-twitcard.png" />
		<meta name="twitter:site"           content="@SAMPLE">
		<meta name="twitter:creator"        content="@SAMPLE">
		<meta name="twitter:title"          content="<?php wp_title(); ?>" />
		<meta name="twitter:description"    content="Base Project Install" />
		<meta name="twitter:image"          content="<?php bloginfo('template_url'); ?>/img/social/moreira-development-twitcard.png" />
		<!-- [ FONTS ] -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:600" rel="stylesheet">
		<!-- [ RESPONSIVE VIEWPORT ] -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- [ Blank Stylesheet - Actuall Sheet Automatically Enqueued by SCSS ] -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- [ ICONS ] -->
    <meta name="viewport"               content="width=device-width,initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color"            content="#fff">
    <meta name="application-name"       content="<?php wp_title(); ?>">
    <link rel="apple-touch-icon" sizes="57x57"    href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"    href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"    href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"    href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"  href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"  href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"  href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"  href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"  href="<?php bloginfo('template_url'); ?>/icons/apple-touch-icon-180x180.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="<?php wp_title(); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-320x460.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-640x920.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-640x1096.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-750x1294.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-1182x2208.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-1242x2148.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-748x1024.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-768x1004.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-1496x2048.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="<?php bloginfo('template_url'); ?>/icons/apple-touch-startup-image-1536x2008.png">
      <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

