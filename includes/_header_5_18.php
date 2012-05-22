<?php
    // require config file
    require_once dirname(dirname(__FILE__)) . '/config.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lets Do This : <?= $page_title ?></title>
	<script type="text/javascript" src="<?= BASE_URL; ?>assets/javascripts/social_btns.js"></script>
<!-- Facebook Open Graph tags -->
	<meta property="og:title" content="Let's Do This" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://letsdothis.com" />
	<meta property="og:image" content="<?= BASE_URL; ?>assets/images/fb.jpg" />
	<meta property="og:site_name" content="Let's Do This" />
	<meta property="fb:app_id" content="154058651354913" />
	<meta property="og:description" content="Check out the latest stunts at letsdothis.com" />
	<meta property="og:locale" content="en_US" />

	<link rel="stylesheet" href="<?= BASE_URL; ?>assets/stylesheets/base.css">
	<link rel="stylesheet" href="<?= BASE_URL; ?>assets/stylesheets/app.css">
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="<?= BASE_URL; ?>assets/stylesheets/anythingslider-ie.css" type="text/css" media="screen" />
	<![endif]-->

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/stylesheets/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- <script src="../assets/javascripts/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	<script src="<?= BASE_URL; ?>assets/javascripts/modernizr.foundation.js"></script>
	<!-- <script src="../assets/javascripts/swfobject.js"></script> -->
	<script src="<?= BASE_URL; ?>assets/javascripts/plugins.min.js"></script>
	<!-- Syndicated Nav JS -->
	<script src="http://www.chevrolet.com/mds/js/mrm/cmp/syndicated_nav.js"></script>
</head>
<body class="<?= $body_class ?>" name="<?= $name ?>">

<div class="container">
	
	<div id="nav-container"></div>
	<!-- /Syndicated Nav -->
	
	<div id="mod-wrapper-top">	
		<header class="row">
			<div id="headerSlider">
				<img src="<?= BASE_URL; ?>assets/images/masthead6.jpg" alt="Header Street Art">
				<img src="<?= BASE_URL; ?>assets/images/masthead1.jpg" alt="Header Dyrdek Kickflip">
				<img src="<?= BASE_URL; ?>assets/images/masthead2.jpg" alt="Header OK Go">
				<img src="<?= BASE_URL; ?>assets/images/masthead3.jpg" alt="Header Bungee">
				<img src="<?= BASE_URL; ?>assets/images/masthead4.jpg" alt="Header Skydive">
				<img src="<?= BASE_URL; ?>assets/images/masthead5.jpg" alt="Header Claw">
			</div>
			<div id="ldt-flag" class="hide-text">Let's do this</div>		
		</header>
		<div class="mod-inner row">
			<section class="nine columns">
				<h1>Here's to Firsts: Introducing the Chevy Sonic</h1>
				<p>The all-new Chevy Sonic is up for adventure. Turbocharged<sup>1</sup>, connected and fun to drive. 
					Browse through all Sonic's Firsts below: select a stunt from the menu, then scroll down for all
					the pics, clips and behind-the-scenes goodness.</p>

				<section id="social1" class="social">
					<span class="three column">Connect with Sonic</span>
					<ul class="social-buttons three column">
						<li class="facebook">
							<a href="#" onClick="faceBookClick();"><iframe src="//www.facebook.com/plugins/like.php?href=http%3a%2f%2fwww.facebook.com%2fchevysonic&amp;send=false&amp;layout=standard&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:25px;" allowTransparency="true"></iframe></a>
						</li>
						<li class="twitter"><a href="https://twitter.com/ChevyLife" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @ChevyLife</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
						<li class="google"><g:plusone href="http://www.letsdothis.com#home" callback="gClicked" annotation="none"></g:plusone></li>
					</ul>
				</section>

			</section>
			<section id="sonic_link" class="three columns">
				<a href="http://www.chevrolet.com/sonic-small-cars/" target="_blank">more about the sonic</a>
			</section>
		</div>
	</div>
	<!-- /Main Header -->

	<div class="mod-wrapper">
		<header class="row">
			<ul>
				<li>Sonic Firsts</li>
			</ul>
		</header>	
		<div id="<?= $body_class ?>" class="mod-inner row">
			<nav id="site_nav" class="es-carousel-wrapper">
				<div class="es-carousel">
					<ul id="mainNav" class="navlinks">
						<li><a href="featured"><img src="<?= BASE_URL; ?>assets/images/thumb_featured2.png" alt="image01"></a>Featured: Street Art</li>
						<li><a href="anthem"><img src="<?= BASE_URL; ?>assets/images/thumb_anthem.jpg" alt="image01"></a>Stunt Anthem</li> 
						<li><a href="okgo"><img src="<?= BASE_URL; ?>assets/images/thumb_okGo.jpg" alt="image02"></a>OK Go Music Video</li>
						<li><a href="kickflip"><img src="<?= BASE_URL; ?>assets/images/thumb_dyrdek.jpg" alt="image03"></a>Kickflip</li>
						<li><a href="skydive"><img src="<?= BASE_URL; ?>assets/images/thumb_skydive.jpg" alt="image04"></a>Skydive</li>
						<li><a href="bungee"><img src="<?= BASE_URL; ?>assets/images/thumb_bungee.jpg" alt="image05"></a>Bungee</li>
						<li><a href="claw"><img src="<?= BASE_URL; ?>assets/images/thumb_claw.jpg" alt="image06"></a>Claw</li>
<!--                                                <li><a href="nightswim"><img src="<?= BASE_URL; ?>assets/images/thumb_nightswim.jpg" alt="image07"></a>Night Swim</li>-->
						<li class="kerningTight"><a href="#" target="_self"><img src="<?= BASE_URL; ?>assets/images/thumb_firsts.jpg" alt="image06"></a>Best of the Game of Firsts</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- /Main Nav -->