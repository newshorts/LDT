<?
$page_title = "Street Art"; 
$body_class = 'featured';
$name       = 'STREET ART';
?>
<?php include("includes/_header.php"); ?>

<?php

        include("modules/video/streetart.php");
    
        $v1 = new VideoModule($head1, $intro1, $vids1, $navlinks1);
        echo $v1->getVideos();
?>
        
	<div class="mod-wrapper photo-gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li class="current">Photos</li>
				<li>Jeff Soto Bio</li>
				<li>Downloads</li>
				<li>Urban Art Series</li>
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
				<li>Urban Art Series</li>
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
				<li>Urban Art Series</li>
			</ul>
		</header>
		<div class="mod-inner downloads row"> 	

 			<section class="song">
				<h1>Get the song here <span>(download quantity limited)</span></h1>
				<ul class="seven column">
					<li>"Robotic Melody" by  <a id="bandLink" target="_blank" href="http://www.pliedsound.com">Plied Sound</a></li>
					<li><a href="http://letsdothis.com/downloads/RoboticMelody.php?file=RoboticMelody.mp3">download</a> </li>
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
					<li><a href="http://letsdothis.com/downloads/Wallpapers/Sonic_StreetArt_Wall_2.jpg.zip">download</a></li>
					<li><a href="http://letsdothis.com/downloads/Wallpapers/Sonic_StreetArt_Wall_1.jpg.zip">download</a></li>
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
					<li><a href="http://letsdothis.com/downloads/FacebookCovers/Street_Art_LDT1.jpg.zip">download</a></li>
					<li><a href="http://letsdothis.com/downloads/FacebookCovers/Street_Art_LDT2.jpg.zip">download</a></li>
					<li><a href="http://letsdothis.com/downloads/FacebookCovers/Street_Art_LDT3.jpg.zip">download</a></li>
				</ul>
			</section>
		</div>
	</div>
	<!-- /Downloads -->
        
<?php

        include("modules/video/urbanart.php");
    
        $v2 = new VideoModule($head2, $intro2, $vids2, $navlinks2);
        echo $v2->getVideos();
?>

	<!-- SiteCatalyst code version: H.22.1.
	Copyright 1996-2011 Adobe, Inc. All Rights Reserved
	More info available at http://www.omniture.com 
	 <script language="JavaScript" type="text/javascript" src="http://c819750.r50.cf2.rackcdn.com/s_code.js"></script> -->
	<script language="JavaScript" type="text/javascript" src="assets/javascripts/s_code.js"></script>
	<script>
	(function() {
		gClicked = function(data){
			var index = data.href.search("#");
			var sub = data.href.substring(index + 1, data.href.length);
			var where;

			console.debug(sub);
			switch(sub) {
				case 'photos': 
					where = "PHOTOS";
					break;
				case 'carousel':
					where = "CAROUSEL";
					break;
				case 'home':
					where = "MASTHEAD";
					break;
				case 'map-photos':
					where = "TRACK";
					break;
				case 'videos':
					where = "VIDEOS";
					break;
				default:
					where = "DEFAULT";
					break;
			}
			var getPage = $('body').attr('name');
			var s=s_gi('gmchevysonicletsdothis'); 
			s.linkTrackVars=['prop1','prop2','prop3','prop4', 'prop5', 'prop6', 'prop7','prop8','prop9','prop10', 'prop11', 'prop12', 'prop13', 'prop14', 'prop15']; 
			s.prop1='FIRSTS';
			s.prop2=getPage;
			s.prop3='FIRSTS | ' + getPage;
			s.prop4='SHARING'; 
			s.prop5= getPage +' | SHARING'; 
			s.prop6='FIRSTS | ' + getPage + ' | SHARING';
			s.prop7='GOOGLE';
			s.prop8='SHARING | GOOGLE';
			s.prop9= getPage+' | SHARING | GOOGLE';
			s.prop10='FIRSTS | ' + getPage + ' | SHARING | GOOGLE';
			s.prop11=where;
			s.prop12='GOOGLE | ' + where;
			s.prop13='SHARING | GOOGLE | ' + where;
			s.prop14= getPage +' | SHARING | GOOGLE | ' + where;
			s.prop15='FIRSTS | ' + getPage + ' | SHARING | GOOGLE | ' + where;
			s.tl(true,'o','Google MainNav Click');
		};
	})();
	</script>
	<script language="JavaScript" type="text/javascript"><!--
	/* You may give each page an identifying name, server, and channel on the next lines. */
	var getPage = 'STREET ART';
	s.pageName="SONIC | FIRSTS | "+ getPage;
	s.prop1="FIRSTS";
	s.prop2=getPage;
	s.prop3="FIRSTS | " + getPage;
	s.prop4= "DEFAULT";
	s.prop5=getPage + " | DEFAULT";
	s.prop6="FIRSTS | " + getPage + " | DEFAULT";
	s.prop7="";
	s.prop8="";
	s.prop9="";
	s.prop10="";
	s.prop11="";
	s.prop12="";
	s.prop13="";
	s.prop14="";
	s.prop15="";
	/* Conversion Variables */
	s.campaign=s.getQueryParam('cmp')
	s.state=""
	s.zip=""
	s.events=""
	s.products=""
	s.purchaseID=""
	s.eVar1=s.getQueryParam('evar1')
	s.eVar2=""
	s.eVar3=""
	s.eVar4=s.getQueryParam('seo')
	s.eVar5=""
	/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
	var s_code=s.t();if(s_code)document.write(s_code)//--></script>
	<script language="JavaScript" type="text/javascript"><!--
	if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
	//--></script><noscript><img src="https://generalmotors.112.2o7.net/b/ss/gmchevysonicletsdothis/1/H.22.1--NS/0"
	height="1" width="1" border="0" alt="" /></noscript><!--/DO NOT REMOVE/-->
	<!-- End SiteCatalyst code version: H.22.1. -->

<?php include("includes/_footer.php");  ?>