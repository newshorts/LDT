<?
$page_title = "Street Art"; 
$body_class = 'test-featured';
$name       = 'STREET ART';
?>
<?php include("includes/_header.php"); ?>
	<div class="mod-wrapper video-gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li class="current">Videos</li>
				<li>Photos</li>
				<li>Jeff Soto Bio</li>
				<li>Downloads</li>
			</ul>
		</header>
		<div class="mod-inner row"> 	
			<section>
				<h1>Sonic's first Street Art. See the newest stunt.</h1>
				<p>Sonic kept its wheels on the ground for this stunt. Teaming up with world-famous muralist and street artist Jeff Soto,
				 Sonic got in touch with its inner artist. Follow us on <a href="http://www.twitter.com/chevylife" target="_blank">Twitter</a> and like us on <a href="http://www.facebook.com/chevysonic" target="_blank">Facebook</a> for more updates.</p>
			</section>
			<section class="video-wrapper">
				<ul id="video_okgo">
					<li class="panel1">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/TmDoeHIu84E?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel2">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/MBjUsOz7oLQ?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel3">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/dm1QuT72I7Q?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel4">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/Sxd_OX3Au0U?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
				</ul>
			</section>

			<section id="social2" class="social">
				<ul class="social-buttons row">
					<li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="google"><g:plusone href="http://www.letsdothis.com/#videos" callBack="gClicked" annotation="none"></g:plusone></li>
				</ul>
			</section>

			<div class="row">
				<nav id="vidCarousel" class="es-carousel-wrapper">
					<div class="es-carousel">
						<ul class="navlinks">
							<li class="active"><a href="#1"><img src="assets/images/streetart/vidThumb4.jpg"></a>Street Art Video</li>
							<li><a href="#2"><img src="assets/images/streetart/vidThumb1.jpg"></a>Street Art Robot</li>
							<li><a href="#3"><img src="assets/images/streetart/vidThumb2.jpg"></a>Street Art Sprayer </li>
							<li><a href="#4"><img src="assets/images/streetart/vidThumb3.jpg"></a>Street Art Turret</li>
						</ul>
					</div>
				</nav>
			</div>

		</div>
	</div>
	<!-- /Video Gallery -->

	<div class="mod-wrapper photo-gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li class="current">Photos</li>
				<li>Jeff Soto Bio</li>
				<li>Downloads</li>
			</ul>
		</header>
		<div class="mod-inner row"> 
			<section>
				<ul id="photo_okgo">
					<li class="panel1"><img src="assets/images/streetart/street-4.jpg"></li>
					<li class="panel2"><img src="assets/images/streetart/street-2.jpg"></li>
					<li class="panel3"><img src="assets/images/streetart/street-3.jpg"></li>
					<li class="panel4"><img src="assets/images/streetart/street-1.jpg"></li>
					<li class="panel5"><img src="assets/images/streetart/street-5.jpg"></li>
					<li class="panel6"><img src="assets/images/streetart/street-7.jpg"></li>
					<li class="panel7"><img src="assets/images/streetart/street-6.jpg"></li>
					<li class="panel8"><img src="assets/images/streetart/street-8.jpg"></li>
					<li class="panel9"><img src="assets/images/streetart/street-10.jpg"></li>
					<li class="panel10"><img src="assets/images/streetart/street-9.jpg"></li>
				</ul>
				<span class="modified">Modified Vehicle. Do not attempt.</span>
			</section>
			<section id="social3" class="social">
				<ul class="social-buttons row">
					<li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="google"><g:plusone href="http://www.letsdothis.com/#photos" callback="gClicked" annotation="none"></g:plusone></li>
				</ul>
			</section>
			<nav id="photoThumbs" class="row">
				<ul id="photo_thumbs" class="navlinks">
					<li class="active"><a href="#1"><img src="assets/images/streetart/street-4.jpg" width="161"></a></li>
					<li><a href="#2"><img src="assets/images/streetart/street-2.jpg" width="161"></a> </li>
					<li><a href="#4"><img src="assets/images/streetart/street-1.jpg" width="161"></a></li>
					<li><a href="#3"><img src="assets/images/streetart/street-3.jpg" width="161"></a></li>
					<li><a href="#5"><img src="assets/images/streetart/street-5.jpg" width="161"></a></li>
										<li><a href="#8"><img src="assets/images/streetart/street-8.jpg" width="161"></a></li>
					<li><a href="#10"><img src="assets/images/streetart/street-9.jpg" width="161"></a></li>

					<li><a href="#6"><img src="assets/images/streetart/street-7.jpg" width="161"></a> </li>
					<li><a href="#7"><img src="assets/images/streetart/street-6.jpg" width="161"></a></li>
					<li><a href="#9"><img src="assets/images/streetart/street-10.jpg" width="161"></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- /Photo Gallery -->

	<div class="mod-wrapper gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li>Photos</li>
				<li class="current">Jeff Soto Bio</li>
				<li>Downloads</li>
			</ul>
		</header>
		<div class="mod-inner row"> 	
			<section>
				<h1>Jeff Soto</h1>
				<p>Jeff Soto is an artist, illustrator and muralist who has exhibited in galleries and museums around the world. The artist’s distinct 
				color palette, subject matter and technique resonate with a growing audience and bridge the gap between pop surrealism and 
				graffiti. Inspired by youthful nostalgia, nature, graffiti, hip-hop and popular culture, his bold representational work is simultaneously 
				accessible and stimulating. In 2002, Soto graduated with distinction from Art Center College of Design in Pasadena, California. 
				In 2008, his work was the subject of an exhibition at Riverside Art Museum. Soto was born and raised in Southern California, 
				where he currently resides with his wife and two daughters. Soto is represented by Jonathan LeVine Gallery in New York City.</p>
			</section>
		</div>
	</div>
	<!-- /Bio -->

	<div class="mod-wrapper gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li>Photos</li>
				<li>Jeff Soto Bio</li>
				<li class="current">Downloads</li>
			</ul>
		</header>
		<div class="mod-inner downloads row"> 	

			<section class="song">
				<h1>Get the song here <span>(download quality limited)</span></h1>
				<ul class="seven column">
					<li>"Robotic Melody" by  <a id="bandLink" target="_blank" href="http://www.pliedsound.com">Plied Sound</a></li>
					<li><a href="downloads/StreetArt.wav.zip">download</a></li>
				</ul>
			</section>

			<section>
				<h1>Wallpapers</h1>
				<p>Love the artwork? Make it your background by downloading one of these wallpapers.</p>
				<ul>
					<li><img src="assets/images/streetart/wallThumb1.jpg" width="161"></li>
					<li><img src="assets/images/streetart/wallThumb2.jpg" width="161"></li>
				</ul>
				<ul>
					<li><a href="downloads/Wallpapers/1_12CHSN30508_1024x768.tif.zip">download</a></li>
					<li><a href="downloads/Wallpapers/2_12CHSN30515_1024x768.tif.zip">download</a></li>
				</ul>
			</section>

			<section>
				<h1>Facebook covers</h1>
				<p>Show off your own artistic side by downloading new Facebook cover art.</p>
				<ul>
					<li><img src="assets/images/streetart/faceThumb1.jpg" width="161"></li>
					<li><img src="assets/images/streetart/faceThumb2.jpg" width="161"></li>
					<li><img src="assets/images/streetart/faceThumb3.jpg" width="161"></li>
				</ul>
				<ul>
					<li><a href="downloads/FacebookCovers/1_12CHSN30322_850x315v3.tif.zip">download</a></li>
					<li><a href="downloads/FacebookCovers/2_12CHSN30514_850x315v1.tif.zip">download</a></li>
					<li><a href="downloads/FacebookCovers/3_12CHSN30318_850x315v2.tif.zip">download</a></li>
				</ul>
			</section>

		</div>
	</div>
<!-- /Downloads -->

	<div class="mod-wrapper gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li>Photos</li>
				<li>Jeff Soto Bio</li>
				<li>Downloads</li>
				<li class="current">Urban Art Series</li>
			</ul>
		</header>
		<div class="mod-inner row"> 	
			<section>
				<h1>Urban Art Series</h1>
				<p>Urban artists and athletes joined together for a unique Sonic First. This time, instead of Sonic doing the painting, <BR>Sonic was the canvas.</p>
			</section>
			<section class="video-wrapper">
				<ul id="video_okgo2">
					<li class="panel1">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/Jr_IltfdFcU" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel2">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/_BS4bnAV3rw?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel3">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/-LXrOrqse8A?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel4">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/M6hDi5UeNUY?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel5">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/OX3ciXOZ_8o?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel6">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/j__PxTXavrQ?rel=0" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel7">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/KqUAWqSdKoQ" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel8">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/y4JEjF4k_LY" frameborder="0" allowfullscreen></iframe>
					</li>
				</ul>
			</section>

			<section id="social2" class="social">
				<ul class="social-buttons row">
					<li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="google"><g:plusone href="http://www.letsdothis.com/#videos" callBack="gClicked" annotation="none"></g:plusone></li>
				</ul>
			</section>

			<div class="row">
				<nav id="vidCarousel" class="es-carousel-wrapper">
					<div class="es-carousel">
						<ul class="navlinks">
							<li class="active"><a href="#1"><img src="assets/images/streetart/vidThumb6.jpg"></a>Urban Art 1.1</li>
							<li><a href="#5"><img src="assets/images/streetart/vidThumb7.jpg"></a>Urban Art 1.2</li>
							<li><a href="#2"><img src="assets/images/streetart/vidThumb1.jpg"></a>Urban Art 2.1</li>
							<li><a href="#3"><img src="assets/images/streetart/vidThumb2.jpg"></a>Urban Art 2.2</li>
							<li><a href="#4"><img src="assets/images/streetart/vidThumb3.jpg"></a>Urban Art 3.1</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- /Urban Art Series -->


<?php include("includes/_footer.php");  ?>