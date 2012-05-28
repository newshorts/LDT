<?
$page_title = "Night Swim"; 
$body_class = 'featured';
$name       = 'NIGHT SWIM';
?>
<?php include("includes/_header.php"); ?>
<!--	<div id="video1" class="mod-wrapper single-video gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li class="current">VIDEO</li>
				<li>DOWNLOAD SONG</li>
			</ul>
		</header>
		<div class="mod-inner row"> 	
                    <section>
                            <h1>Sonic's first Night Swim</h1>
                            <p>Though Sonic didn't jump in the water for this one, it had its own adventure getting some friends to the lake to carpe noctum. Watch the video then download the song below.</p>
                    </section>

                    <section class="video-container">

                        <ul>
                            <li class="video-loading"></li>
                            <li class="video-panel panel1 video-active"><div id="glr03eoXGAU"></div></li>
                        </ul>

                    </section>
                    
                    <section class="social">
                        <ul class="social-buttons row">
                            <li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
                            <li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
                            <li class="google"><g:plusone href="http://www.letsdothis.com/#videos" callBack="gClicked" annotation="none"></g:plusone></li>
                        </ul>
                    </section>
                    
		</div>
	</div>-->
	<!-- /Video Gallery -->
        
<?php

        include("modules/video/nightswim.php");
    
        $v1 = new VideoModule($head1, $intro1, $vids1, $navlinks1);
        echo $v1->getVideos();
?>
        
	<div class="mod-wrapper gallery">
		<header class="row">
			<ul>
				<li><?= $page_title ?></li>
				<li>VIDEO</li>
				<li class="current">DOWNLOAD SONG</li>
			</ul>
		</header>
		<div class="mod-inner downloads row"> 	
			<section class="song">
				<h1>Get the song here <span>(download quantity limited)</span></h1>
				<ul class="seven column">
                                    <li>"Each Coming Night" by  <a id="bandLink" target="_blank" href="http://www.ironandwine.com/">Iron & Wine</a></li>
                                    <li><a href="http://cloud.download.neuroticmedia.net/?ProductID=7b163a42-a5aa-4381-916f-444c608fcefd&OID=00000000-0000-0000-0000-000000000001&CRCC=mTw4jmRd">download</a> </li>
				</ul>
			</section>
		</div>
	</div>
	<!-- /Downloads -->
        
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