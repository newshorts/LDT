<?
$page_title = "OKGo"; 
$body_class = 'okgo';
$name       = 'OKGO';
?>
<?php include("includes/_header.php"); ?>
	<div class="mod-wrapper video-gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li class="current">Videos</li>
				<li>Photos</li>
				<li>Track the track</li>
				<li>Download song</li>
			</ul>
		</header>
		<div class="mod-inner row"> 	
			<section>
				<h1>Watch Sonic's first music video featuring OK Go</h1>
				<p>OK Go built a track, Sonic played all the instruments. Check out Sonic playing a guitar solo at 45 mph.</p>
			</section>
			<section class="video-wrapper">
				<ul id="video_okgo">
					<li class="panel1">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/MejbOFk7H6c" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel2">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/qae4gAbXOZ8" frameborder="0" allowfullscreen></iframe>
					</li>
					<li class="panel3">
						<iframe width="940" height="508" src="http://www.youtube.com/embed/9Op9owJiujY" frameborder="0" allowfullscreen></iframe>
					</li>
				</ul>
			</section>
			<section id="social2" class="social">
				<ul class="social-buttons row">
					<li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="google"><g:plusone href="http://www.letsdothis.com/#videos" callback="gClicked" annotation="none"></g:plusone></li>
				</ul>
			</section>
			
			<div class="row">
				<nav id="vidCarousel" class="es-carousel-wrapper">
					<div class="es-carousel">
						<ul class="navlinks">
							<li class="active"><a href="#1"><img src="assets/images/okgo/vidThumb1.png"></a>Needing/Getting</li>
							<li><a href="#2"><img src="assets/images/okgo/vidThumb2.png"></a>Behind The Scenes</li>
							<li><a href="#3"><img src="assets/images/okgo/vidThumb3.png"></a>OK Go Chevy Sonic</li>
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
				<li>Track the track</li>
				<li>Download song</li>
			</ul>
		</header>
		<div class="mod-inner row"> 
			<section>
				<ul id="photo_okgo">
					<li class="panel1"><img src="assets/images/okgo/gallery/1-okgo.jpg"></li>
					<li class="panel2"><img src="assets/images/okgo/gallery/2-okgo.jpg"></li>
					<li class="panel3"><img src="assets/images/okgo/gallery/3-okgo.jpg"></li>
					<li class="panel4"><img src="assets/images/okgo/gallery/4-okgo.jpg"></li>
					<li class="panel5"><img src="assets/images/okgo/gallery/5-okgo.jpg"></li>
					<li class="panel6"><img src="assets/images/okgo/gallery/6-okgo.jpg"></li>
					<li class="panel7"><img src="assets/images/okgo/gallery/7-okgo.jpg"></li>
					<li class="panel8"><img src="assets/images/okgo/gallery/8-okgo.jpg"></li>
					<li class="panel9"><img src="assets/images/okgo/gallery/9-okgo.jpg"></li>
				   <li class="panel10"><img src="assets/images/okgo/gallery/10-okgo.jpg"></li>
				</ul>
				<span class="modified">Modified Vehicle</span>
			</section>
			<section id="social3" class="social">
				<ul class="social-buttons row">
					<li class="facebook">
						<a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a>
					</li>
					<li class="twitter">
						<a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a>
					</li>
					<li class="google">
						<g:plusone href="http://www.letsdothis.com/#photos" callback="gClicked" annotation="none"></g:plusone>
					</li>
				</ul>
			</section>
			<nav id="photoThumbs" class="row">
				<ul id="photo_thumbs" class="navlinks">
					<li class="active"><a href="#1"><img src="assets/images/okgo/gallery/1-okgo.jpg" width="161"></a></li>
					<li><a href="#2"><img src="assets/images/okgo/gallery/2-okgo.jpg" width="161"></a></li>
					<li><a href="#3"><img src="assets/images/okgo/gallery/3-okgo.jpg" width="161"></a></li>
					<li><a href="#4"><img src="assets/images/okgo/gallery/4-okgo.jpg" width="161"></a></li>
					<li><a href="#5"><img src="assets/images/okgo/gallery/5-okgo.jpg" width="161"></a></li>
					<li><a href="#6"><img src="assets/images/okgo/gallery/6-okgo.jpg" width="161"></a></li>
					<li><a href="#7"><img src="assets/images/okgo/gallery/7-okgo.jpg" width="161"></a></li>
					<li><a href="#8"><img src="assets/images/okgo/gallery/8-okgo.jpg" width="161"></a></li>
					<li><a href="#9"><img src="assets/images/okgo/gallery/9-okgo.jpg" width="161"></a></li>
				  <li><a href="#10"><img src="assets/images/okgo/gallery/10-okgo.jpg" width="161"></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- /Photo Gallery -->

	<div class="mod-wrapper map-gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li>Photos</li>
				<li class="current">Track the track</li>
				<li>Download song</li>
			</ul>
		</header>
		<div class="mod-inner row"> 
			<section>
				<h1>Explore the 2.5 mile track lined with over 1,800 instruments.</h1>
				<p>Click on the map to take a tour of the track and learn how it all came together.</p>
			</section>
			<section id="social4" class="social">
				<ul class="social-buttons row">
					<li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
					<li class="google"><g:plusone href="http://www.letsdothis.com/#map-photos" callback="gClicked" annotation="none"></g:plusone></li>
				</ul>
			</section>
			<section>
				<ul id="map_okgo">
					 <li class="panel1"><img src="assets/images/okgo/map/OKGo1.jpg"></li>
					 <li class="panel2"><img src="assets/images/okgo/map/OKGo2.jpg"></li>
					 <li class="panel3"><img src="assets/images/okgo/map/OKGo3.jpg"></li>
					 <li class="panel4"><img src="assets/images/okgo/map/OKGo4.jpg"></li>
					 <li class="panel5"><img src="assets/images/okgo/map/OKGo5.jpg"></li>
					 <li class="panel6"><img src="assets/images/okgo/map/OKGo6.jpg"></li>
					 <li class="panel7"><img src="assets/images/okgo/map/OKGo7.jpg"></li>
					 <li class="panel8"><img src="assets/images/okgo/map/OKGo8.jpg"></li>
					 <li class="panel9"><img src="assets/images/okgo/map/OKGo9.jpg"></li>
				   <li class="panel10"><img src="assets/images/okgo/map/OKGo10.jpg"></li>
				   <li class="panel11"><img src="assets/images/okgo/map/OKGo11.jpg"></li>
				   <li class="panel12"><img src="assets/images/okgo/map/OKGo12.jpg"></li>
				</ul>
				<span class="modified">Modified Vehicle</span>
			</section>
			<nav id="mapThumbs" class="row">
				<ul id="map_thumbs" class="navlinks">
					 <li class="active"><a href="#1"><img src="assets/images/okgo/map/OKGo1.jpg" width="130"></a></li>
					 <li><a href="#2"><img src="assets/images/okgo/map/OKGo2.jpg" width="130"></a></li>
					 <li><a href="#3"><img src="assets/images/okgo/map/OKGo3.jpg" width="130"></a></li>
					 <li><a href="#4"><img src="assets/images/okgo/map/OKGo4.jpg" width="130"></a></li>
					 <li><a href="#5"><img src="assets/images/okgo/map/OKGo5.jpg" width="130"></a></li>
					 <li><a href="#6"><img src="assets/images/okgo/map/OKGo6.jpg" width="130"></a></li>
					 <li><a href="#7"><img src="assets/images/okgo/map/OKGo7.jpg" width="130"></a></li>
					 <li><a href="#8"><img src="assets/images/okgo/map/OKGo8.jpg" width="130"></a></li>
					 <li><a href="#9"><img src="assets/images/okgo/map/OKGo9.jpg" width="130"></a></li>
				   <li><a href="#10"><img src="assets/images/okgo/map/OKGo10.jpg" width="130"></a></li>
				   <li><a href="#11"><img src="assets/images/okgo/map/OKGo11.jpg" width="130"></a></li>
				   <li><a href="#12"><img src="assets/images/okgo/map/OKGo12.jpg" width="130"></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- /Map Gallery -->

	<div class="mod-wrapper downloads">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>Videos</li>
				<li>Photos</li>
				<li>Track the track</li>
				<li class="current">Download song</li>
			</ul>
		</header>
		<div class="mod-inner row"> 
			<section class="song">
				<h1>Get the song here <span>(download quantity limited)</span></h1>
				<ul id="songDownload" class="seven column">
					<li>"Needing/Getting" by OK Go</li>
					<li><a href="http://superbowl.amplified.com/?downloadID=22B25283-9C4C-429C-AA59-C42583A46130" id="OK-Go-Song">download</a></li>
				</ul>
			</section>
		</div>
	</div>
	<!-- /Song Download -->


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
	var getPage = 'OKGO';
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
	<script>

		// function thumbClicks(){		
		// 	$('.navlinks').click(function(e){ 
		// 		e.preventDefaults();
		// 		return('DEFAULT')
		// 	});
		// }

		// $(document).ready(function() {
		// 	$('.navlinks a').click(function(){
		// 		var s = s_gi(s_account);
		// 		s.trackExternalLinks=false;
		// 		s.linkTrackVars='eVar1,events';
		// 		s.linkTrackEvents=s.events='event1';
		// 		s.eVar1 = $(this).attr("title");
		// 		s.tl(this, 'o', 'Nav Link Click');
		// 	});
		// });

		// function screenOrientation(){
		// 	switch(window.orientation){case 0:case 180:return("Portrait");break;case 90:case -90:return("Landscape");}
		// 	window.scroll(0,0)}
	</script>

<?php include("includes/_footer.php");  ?>