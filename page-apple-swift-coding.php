<?php get_header(); ?>

	<main role="main" class="program">

		<section class="intro">

			<section class="type">
				<h2>
					Apple Swift<br>
					Coding.
				</h2>
			</section>

			<section class="image">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/page/asc-intro-medium.jpg" media="(max-width: 768px)">
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/page/asc-intro-large.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/img/page/asc-intro-large.jpg">
				</picture>
			</section>

			<section class="sub-menu">
				<section class="wrapper">
					<a href="<?php echo site_url("lego-robotics"); ?>">Lego<br>Robotics</a>
					<a href="<?php echo site_url("apple-swift-coding"); ?>" class="current">Apple Swift<br>Coding</a>
					<a href="<?php echo site_url("jr-leaders-of-innovation"); ?>">Jr. Leaders<br>of Innovation</a>
					<a href="<?php echo site_url("fellowship-program"); ?>">Fellowship<br>Program</a>
				</section>
			</section>

		</section>

		<!-- Feature video -->
		<section class="feature-video one start">
			<section class="play-icon">
				<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
				<svg version="1.1"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
					 x="0px" y="0px" width="92px" height="92px" viewBox="0 0 92 92" style="enable-background:new 0 0 92 92;" xml:space="preserve">
				<defs>
				</defs>
				<g>
					<polygon class="st1" points="40.9,60.9 40.9,31.1 55.9,46 	"/>
				</g>
				<g>
					<path class="st1" d="M46,92C20.6,92,0,71.4,0,46S20.6,0,46,0s46,20.6,46,46S71.4,92,46,92z M46,2.4C22,2.4,2.4,22,2.4,46
						C2.4,70,22,89.6,46,89.6S89.6,70,89.6,46C89.6,22,70,2.4,46,2.4z"/>
				</g>
				</svg>
			 </section>
			<section class="video-toggle" data-url="https://www.youtube.com/embed/j4a4Q8LR1rk?rel=0&amp;showinfo=0&amp;autoplay=1">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/page/asc-thumbnail-medium.jpg" media="(max-width: 768px)">
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/page/asc-thumbnail-large.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/img/page/asc-thumbnail-large.jpg">
				</picture>
			</section>
			<section class="tab">
				<span class="black-out">Watch Video</span>
			</section>
		</section>

		<!-- Feature quote -->
		<section class="feature-quote">
			<section class="vertical-left">
				<a href="get-involved" class="underline">Become a Mentor</a>
			</section>
			<section class="vertical-right">
				<a target="_blank" href="https://www.paypal.com/donate/?token=UZY043YT7Jgxutcj7e7pP3Lf7goKh6quF_bT_H-GXUPDQ5R087FgsfIGzDyAYEt0_W_-uG&country.x=US&locale.x=US" class="underline">Donate</a>
			</section>
			<h3>Discover the Path.</h3>
			<p class="sub">Guiding students through the discovery of technology<br> and of themselves.</p>
		</section>

		<section class="content-section">

			<section class="content-page-feature mobile-single">
				<section class="left">
					<span class="number">001</span>
					<h4>
						About.
					</h4>
				</section>
				<section class="right">
					<p>Greater's Apple Swift Coding Program combines the GREATER Leadership Curriculum with Apple’s Swift Playgrounds app and curriculum. Swift Playgrounds is a revolutionary coding app for iPad that makes learning Swift (Apple’s Developer Platform) interactive and fun. It requires no coding knowledge, so it’s perfect for students just starting out. Solve puzzles to master the basics using Swift — a powerful programming language created by Apple and used by the pros to build today’s most popular apps. Then take on a series of challenges and step up to more advanced playgrounds designed by Apple and other leading developers.</p>
					<p>Even for people who’ve put the time in to learn to program, jumping from software to hardware can be a challenge — even if said challenge is just figuring out where to start. How do you program something real? How do you build something that moves? Apple is taking steps to tackle that problem by bringing third-party hardware — think robots, drones, and musical instruments — into its learn-to-code platform, Swift Playgrounds.</p>
					<p>Email <a class="underline" href="mailto:info@begreater.org">info@begreater.org</a> to request additional information.</p>
					<p>Interested in being a mentor? Find out how to apply at <a class="underline" href="<?php echo site_url("get-involved"); ?>">Get Involved</a>.</p>
				</section>
			</section>

			<section class="call-to-action">
				<h3>Get Involved.</h3>
				<p><a href="get-involved" class="button">Become a Mentor</a><a target="_blank" href="https://www.paypal.com/donate/?token=UZY043YT7Jgxutcj7e7pP3Lf7goKh6quF_bT_H-GXUPDQ5R087FgsfIGzDyAYEt0_W_-uG&country.x=US&locale.x=US" class="button">Donate Now</a>
			</section>

		</section>

	</main>

<?php get_footer(); ?>
