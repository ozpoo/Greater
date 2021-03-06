<?php get_header(); ?>

	<main role="main">
	<style>
	.intro{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.countdown h1{
		letter-spacing: -.1em;
		font-size: 10em;
	}
	.splash-logo{
		position: fixed;
		top: 4vh;
		left: 4vw;
	}
	.intro{
		padding: 0px 4vw;
	}
	.intro svg{
		max-width: 100%;
	}
	.splash-teaser{
		position: fixed;
		top: 4vh;
		right: 4vw;
		line-height: 1;

		text-transform: uppercase;
		letter-spacing: .2em;
		font-family: 'Relative 12 Pitch', monospace;
	}
	.splash-contact{
		position: fixed;
		bottom:4vh;
		right: 4vw;
		line-height: 1;
		font-size: .9em;
	}
	.splash-social{
		position: fixed;
		bottom:4vh;
		left: 4vw;
		line-height: 1;
		font-size: .9em;
	}
	a.button{
		margin: 0px;
		margin-right: 2vw;
	}
	.intro .countdown.one.start{
		opacity: 0;
		transform: translateY(10px);
	}
	.intro .countdown.one{
		opacity: 1;
		transition: all 820ms ease-in-out;
		transform: translateY(0vh);
	}
	#demo{
		position: absolute;
		top: 50%;
		left: 0px;
		width: 100%;
		text-align: center;
		margin-top: 16vh;
	}
	footer, header{
		display: none;
	}
	</style>
	<section class="intro">
		<section class="splash-logo">
			<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
			<svg version="1.1"
				 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
				 x="0px" y="0px" width="46.4px" height="61.1px" viewBox="0 0 46.4 61.1" style="enable-background:new 0 0 46.4 61.1;"
				 xml:space="preserve">
			<style type="text/css">
				.st0{fill:#929497;}
			</style>
			<defs>
			</defs>
			<g>
				<polygon class="st0" points="46.4,40.1 0,9.6 14.4,0 46.4,21 	"/>
				<polygon points="46.4,21 0,51.6 14.4,61.1 46.4,40.1 	"/>
			</g>
			</svg>
		</section>
		<section class="splash-teaser">
			New Site Coming Soon
		</section>
		<section class="splash-contact">
			<a class="normal" href="mailto:info@begreater.org">info@begreater.org</a>
		</section>
		<section class="splash-social ">
			<a class="normal" target="_blank" href="https://www.instagram.com/greatermovement/">Instagram</a>  <a class="normal" target="_blank" href="https://twitter.com/greatermovement">Twitter</a>
		</section>
		<section class="countdown one start">
			<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
	<svg version="1.1"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
	 x="0px" y="0px" width="739.7px" height="115.1px" viewBox="0 0 739.7 115.1" style="enable-background:new 0 0 739.7 115.1;"
	 xml:space="preserve">
	<defs>
	</defs>
	<path d="M0,3.8L57.3,2v111.3H17.1V37.7L0,38.9V3.8z"/>
	<path d="M185.3,56.6c0,33.4-18.7,58.5-53.1,58.5S79,90,79,56.6C79,25,98.5,0.2,132.2,0.2C165.8,0.2,185.3,25,185.3,56.6z
	 M117.7,57.7c0,8.6,3.1,24.5,14.5,24.5c11.4,0,14.5-15.9,14.5-24.5c0-9.2-2.4-22.9-14.5-22.9C120.1,34.8,117.7,48.5,117.7,57.7z"/>
	<path d="M238.5,96.8c0,11.7-11.2,18.3-22,18.3c-10.8,0-22-6.6-22-18.3c0-11.8,11.2-18.7,22-18.7C227.2,78,238.5,85,238.5,96.8z"/>
	<path d="M262.5,113.3l2.7-26.9c6.9-6.2,55.8-34.4,55.8-44.2c0-5-4.1-8.9-9.2-8.9c-8.6,0-9.6,7.2-9.9,14h-39.6
	c3-32.5,17.4-47.1,50.9-47.1c23.2,0,47.7,13.4,47.7,39.3c0,22.4-26.8,38.4-46.4,44.5l26.3-2.5l21.7-1.3v33.2H262.5z"/>
	<path d="M539.8,96.8c0,11.7-11.2,18.3-22,18.3c-10.8,0-22-6.6-22-18.3c0-11.8,11.2-18.7,22-18.7C528.6,78,539.8,85,539.8,96.8z"/>
	<path d="M550.4,3.8L607.7,2v111.3h-40.2V37.7l-17.1,1.2V3.8z"/>
	<path d="M631.6,37.7V2h108.1l-63.3,111.3h-44.7l41.9-70.4c1.3-2.4,2.7-5,4.7-6.6v-0.9L662,36.7L631.6,37.7z"/>
	<path d="M417.1,74c-0.3,6.6,4.7,12.5,11.5,12.5c5.5,0,10.9-4.6,10.9-10.2c0-5.6-4.7-10.3-10.2-10.3c-1.9,0-3.7,0.3-5.5,0.6V43.5
	l3.2,0.3c4.4,0.4,8.4-3.4,8.4-8s-3.4-7.4-7.8-7.4c-4.6,0-7.5,4.1-7.1,8.6h-39.8c2.5-27.9,22.7-37,48.1-37c18.7,0,45.8,8.7,45.8,31.8
	c0,9.1-5.2,17.8-13.7,21.5v0.9c11.6,2.9,18.4,13.3,18.4,25.1c0,27-28.3,35.4-50.3,35.4c-27.1,0-51.5-10.3-52.8-40.7H417.1z"/>
	</svg>
	 
		</section>
		<section id="demo"></section>
	</section>

	<script>
	(function ($, root, undefined) {

		$(function () {

			'use strict';

				$(window).load(function(){
					setTimeout(function(){
						$(".one").removeClass("start");
						setTimeout(function(){
							$(".two").removeClass("start");
							setTimeout(function(){
								$(".three").removeClass("start");
							}, 620);
						}, 320);
					}, 320);
				});
				$(window).resize(function(){
					$(".intro").height($(window).height());
				}).resize();

					// Set the date we're counting down to
					var countDownDate = new Date("Oct 23, 2017 12:00:00").getTime();

					// Update the count down every 1 second
					var x = setInterval(function() {

						// Get todays date and time
						var now = new Date().getTime();

						// Find the distance between now an the count down date
						var distance = countDownDate - now;

						// Time calculations for days, hours, minutes and seconds
						var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						var seconds = Math.floor((distance % (1000 * 60)) / 1000);

						// Display the result in the element with id="demo"
						document.getElementById("demo").innerHTML = days + "d " + hours + "h "
						+ minutes + "m " + seconds + "s ";

						// If the count down is finished, write some text
						if (distance < 0) {
							clearInterval(x);
							document.getElementById("demo").innerHTML = "EXPIRED";
						}
					}, 1000);

				});

			})(jQuery, this);

	</script>

	</main>

<?php get_footer(); ?>
