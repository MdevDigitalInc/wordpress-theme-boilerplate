<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- [ FACEBOOK OG ] -->
		<meta property="og:url"             content="http://moreiradevelopment.io" />
		<meta property="og:title"           content="[ MOREIRA DEVELOPMENT PROJECT ] CLIENT | PROJECT " />
		<meta property="og:description"     content="Base Project Install" />
		<meta property="og:image"           content="http://moreiradevelopment.io/social/moreira-development-og.jpg" />
		<!-- [ TWITTER CARDS ] -->
		<meta name="twitter:card"           content="http://moreiradevelopment.io/social/moreira-development-twitcard.png" />
		<meta name="twitter:site"           content="@SAMPLE">
		<meta name="twitter:creator"        content="@SAMPLE">
		<meta name="twitter:title"          content="[ MOREIRA DEVELOPMENT PROJECT ] CLIENT | PROJECT " />
		<meta name="twitter:description"    content="Base Project Install" />
		<meta name="twitter:image"          content="http://moreiradevelopment.io/social/moreira-development-twitcard.png" />
		<!-- [ FONTS ] -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:600" rel="stylesheet">
		<!-- [ RESPONSIVE VIEWPORT ] -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- [ Stylesheet ] -->
    <link href="/css/styles.css" rel="stylesheet">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="mdev-main-wrapper">

			<!-- header -->
			<header class="mdev-main-header" role="banner">

					<!-- logo -->
					<div class="mdev-main-brand">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="mdev-main-nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
