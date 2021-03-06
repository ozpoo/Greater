<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/fav.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php
		global $wp;
		$current_url = home_url(add_query_arg(array(),$wp->request));
		 ?>
		<!-- Begin Facebook tags -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:url" content="<?php echo $current_url; ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/facebook.jpg" />
		<meta property="fb:page_id" content="greatermovement" />
		<meta property="og:type" content="website" />
		<!-- End Facebook tags -->

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

		<script>
			// Picture element HTML5 shiv
			document.createElement( "picture" );
		</script>

	</head>
	<body <?php body_class(); ?>>

		<section class="video-frame" >
			<section class="video-close">
				<a href="<?php echo site_url(); ?>" class="spin">
					<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
					<svg version="1.1"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="26.2px" height="26.2px" viewBox="0 0 26.2 26.2" style="enable-background:new 0 0 26.2 26.2;"
						 xml:space="preserve">
					<defs>
					</defs>
					<g>
						<rect x="-4.9" y="12.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.4185 13.0815)" class="st1" width="36" height="1"/>
					</g>
					<g>
						<rect x="12.6" y="-4.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.4185 13.0815)" class="st1" width="1" height="36"/>
					</g>
					</svg>
				</a>
			</section>
			<section class="youtube-video"></section>
		</section>

		<section class="menu-frame">

			<section class="menu-close">
				<a href="<?php echo site_url(); ?>" class="spin">
					<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
					<svg version="1.1"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="26.2px" height="26.2px" viewBox="0 0 26.2 26.2" style="enable-background:new 0 0 26.2 26.2;"
						 xml:space="preserve">
					<defs>
					</defs>
					<g>
						<rect x="-4.9" y="12.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.4185 13.0815)" class="st1" width="36" height="1"/>
					</g>
					<g>
						<rect x="12.6" y="-4.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.4185 13.0815)" class="st1" width="1" height="36"/>
					</g>
					</svg>
				</a>
			</section>

			<section class="section">
				<h5>Programs</h5>
				<a href="<?php echo site_url("lego-robotics"); ?>">Lego Robotics</a><br>
				<a href="<?php echo site_url("apple-swift-coding"); ?>">Apple Swift Coding</a><br>
				<a href="<?php echo site_url("jr-leaders-of-innovation"); ?>">Jr. Leaders of Innovation</a><br>
				<a href="<?php echo site_url("fellowship-program"); ?>">Fellowship Program</a>
			</section>
			<section class="section">
				<h5>Menu</h5>
				<a href="<?php echo site_url("about"); ?>">About</a><br>
				<a href="<?php echo site_url("lego-robotics"); ?>">Programs</a><br>
				<a href="<?php echo site_url("get-involved"); ?>">Get Involved</a><br><br>
				<a href="mailto:info@begreater.org">info@begreater.org</a><br><br>
				<a target="_blank" href="https://www.instagram.com/greatermovement/">Instagram</a><br>
				<a target="_blank" href="https://twitter.com/greatermovement">Twitter</a>
			</section>
		</section>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<section class="logo">
					<section class="light">
						<a href="<?php echo site_url(); ?>" class="grow">
							<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="38px" height="50.1px" viewBox="0 0 38 50.1" style="enable-background:new 0 0 38 50.1;"
								 xml:space="preserve">
							<style type="text/css">
								.st0{fill:#929497;}
							</style>
							<defs>
							</defs>
							<polygon class="st0" points="38,32.9 0,7.9 11.8,0 38,17.2 "/>
							<polygon points="38,17.2 0,42.2 11.8,50.1 38,32.9 "/>
							</svg>
						</a>
					 </section>
					<section class="dark">
						<a href="<?php echo site_url(); ?>" class="grow">
							<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="38px" height="50.1px" viewBox="0 0 38 50.1" style="enable-background:new 0 0 38 50.1;"
								 xml:space="preserve">
							<style type="text/css">
								.st0{fill:#929497;}
								.st1{fill:#FFFFFF;}
							</style>
							<defs>
							</defs>
							<polygon class="st0" points="38,32.9 0,7.9 11.8,0 38,17.2 "/>
							<polygon class="st1" points="38,17.2 0,42.2 11.8,50.1 38,32.9 "/>
							</svg>
						</a>
					</section>
				</section>

				<section class="main-menu">
					<a href="<?php echo site_url("about"); ?>" class="mobile-hide underline <?php if(is_page("about")){ echo "current"; } ?>">About</a>
					<a href="<?php echo site_url("lego-robotics"); ?>" class="mobile-hide underline <?php if(is_page("lego-robotics") || is_page("jr-leaders-of-innovation") || is_page("apple-swift-coding") || is_page("fellowship-program")){ echo "current"; } ?>">Programs</a>
					<a href="<?php echo site_url("get-involved"); ?>" class="mobile-hide underline <?php if(is_page("get-involved")){ echo "current"; } ?>">Get Involved</a>
					<section class="dark">
						<a href="<?php echo site_url(); ?>" class="menu-toggle spin">
							<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
							<defs>
							</defs>
							<g>
								<rect x="17.5" class="st1" width="1" height="36"/>
							</g>
							<g>
								<rect y="17.5" class="st1" width="36" height="1"/>
							</g>
							</svg>
						</a>
					</section>
					<section class="light">
						<a href="<?php echo site_url(); ?>" class="menu-toggle spin">
							<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
							<defs>
							</defs>
							<g>
								<rect x="0" y="17.5" width="36" height="1"/>
							</g>
							<g>
								<rect x="17.5" y="0" width="1" height="36"/>
							</g>
							</svg>
						</a>
					</section>
				</section>

			</header>
			<!-- /header -->
