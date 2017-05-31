<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

	</head>
	<body <?php body_class(); ?>>


		<div class="wrapper">


			<header class="header clear whitebackground" role="banner" id="header">
				<a href="javascript:void(0);" class="nav-activator">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="-604.449 -2627 31.449 25">
					  <g id="bars" class="primaryfill" data-name="Gruppe 19" transform="translate(-771 -2643)">
					    <rect id="Rechteck_18" data-name="Rechteck 18" width="31.449" height="5" rx="1" transform="translate(166.551 16)"/>
					    <rect id="Rechteck_57" data-name="Rechteck 57" width="31.449" height="5" rx="1" transform="translate(166.551 26)"/>
					    <rect id="Rechteck_58" data-name="Rechteck 58" width="31.449" height="5" rx="1" transform="translate(166.551 36)"/>
					  </g>
					</svg>

				</a>

					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>


					<a href="https://ibe.sabeeapp.com/properties/Hotel-Das-Kleine-Grindel-buchung/?p=bSp0bd59f93dceea3c2&checkin=23-05-2017&checkout=24-05-2017" class="buchen-star">
						<img src="<?php echo get_template_directory_uri(); ?>/img/buchen-star.png" alt="Jetzt buchen">
					</a>

					<nav id="mainnav" class="nav hidden" role="navigation">
						<?php mainnav(); ?>
					</nav>

					<nav id="servicenav" class="nav" role="navigation">
						<?php servicenav(); ?>
					</nav>


			</header>
