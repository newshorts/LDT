 jQuery(document).ready(function ($) {
	
	function changeTab(e){
		e.preventDefault();
		$("#gameTabs li a.active").removeClass("active").bind("click", changeTab);
		$(this).addClass("active").unbind("click", changeTab);
		showGame($(this).attr("href"));
	}

	$("#gameTabs li a").click(changeTab);
	$("#gameTabs li:eq(0) a").click();

	function showGame(activeGame){
		$("#gameWrap .game").hide();
		$(activeGame).show();
	}

	// var mNavIDs = [ "#featured", "#okgo", "#kickflip", "#skydive", "#bungee", "#claw", "#game" ];
	$('#gameNav').elastislide({ 
			imageW:139, 
			margin:35, 
			border:0, 
			easing:'easeInOutSine', 
			current:0 
		});
	$('#game-1 #vidCarousel, #game-12 #vidCarousel, #game-15 #vidCarousel')
	.elastislide({ 
			imageW : 140, 
			margin : 15,
			border : 1,  
			easing : 'easeInOutSine'
	});

	//GAME Video & Photo Galleries
	$('#game-1 #video_okgo, #game-12 #video_okgo, #game-15 #video_okgo, #game-1 #photo_okgo, #game-2 #photo_okgo, #game-3 #photo_okgo, #game-4 #photo_okgo, #game-5 #photo_okgo, #game-6 #photo_okgo, #game-7 #photo_okgo, #game-8 #photo_okgo, #game-9 #photo_okgo, #game-10 #photo_okgo, #game-11 #photo_okgo, #game-12 #photo_okgo, #game-13 #photo_okgo, #game-14 #photo_okgo, #game-15 #photo_okgo, #game-16 #photo_okgo, #game-17 #photo_okgo, #game-18 #photo_okgo').anythingSlider({
			resizeContents  : true,
			buildArrows			: false,
			buildNavigation	: false,
			buildStartStop  : false,
			toggleControls	: false,
			hashTags        : false,  
			addWmodeToObject: 'transparent',
			animationTime		: 0,
			delayBeforeAnimate: 500, 
			onSlideBegin		: function(e, slider){
				slider.$items.fadeOut(300);
			},
			onSlideComplete : function (slider) {
	      slider.$items.fadeIn(300, "linear");
	    }
		});
	$('#vidCarousel a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);
		$('#game-1 #video_okgo, #game-12 #video_okgo, #game-15 #video_okgo')
		.anythingSlider(slide);
			return true;
	});
  $('#photo_thumbs a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);
		$('#game-1 #photo_okgo, #game-2 #photo_okgo, #game-3 #photo_okgo, #game-4 #photo_okgo, #game-5 #photo_okgo, #game-6 #photo_okgo, #game-7 #photo_okgo, #game-8 #photo_okgo, #game-9 #photo_okgo, #game-10 #photo_okgo, #game-11 #photo_okgo, #game-12 #photo_okgo, #game-13 #photo_okgo, #game-14 #photo_okgo, #game-15 #photo_okgo, #game-16 #photo_okgo, #game-17 #photo_okgo, #game-18 #photo_okgo')
		.anythingSlider(slide);
		return true;
	});
});





