<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- Begin: Imported from legacy Mighty Wizards site -->
		<meta name="description" content="We offer top-notch end-to-end solutions for your unique BI implementation in your time zone">

		<meta name="keywords" content="">
		<meta charset="utf-8">
		<meta name="author" content="">

		<!-- Favicons -->
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vertical-rhythm.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rev-slider.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/rs-plugin/css/settings.css" media="screen" />
		<!-- End: Imported from legacy Mighty Wizards site -->


		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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


	<!-- Begin Legacy Mighty Wizards site -->
	<body class="appear-animate">

			<!-- Page Loader -->
			<div class="page-loader">
					<div class="loader">Loading...</div>
			</div>
			<!-- End Page Loader -->

			<!-- Page Wrap -->
			<div class="page" id="top">

					<!-- Navigation panel -->
					<nav class="main-nav dark transparent stick-fixed">
							<div class="full-wrapper relative clearfix">
									<!-- Logo ( * your text or image into link tag *) -->

											<a href="index.html" class="logo">
													<img src="images/logo-white.png" alt="" />
											</a>

									<div class="mobile-nav">
											<i class="fa fa-bars"></i>
									</div>
									<!-- Main Menu -->
									<div class="inner-nav desktop-nav">
										<?php html5blank_nav(); ?>
									</div>
							</div>
					</nav>
					<!-- End Navigation panel -->





	</body>
