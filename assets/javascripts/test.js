//Writing a more consice function
 jQuery(document).ready(function ($){

	function activateThumbs($tab) {
		var $activeThumbs = $tab.closest('ul.navlinks')
			.find('li.active');
		//Make Tab Active
		$activeThumbs.removeClass('active');
		$tab.addClass('active');
	}
	$('ul.navlinks').each(function () {
		//Get all tabs
		var tabs = $(this).children();
		tabs.click(function (e) {
			activateThumbs($(this));
		});
	});

 	var videos = $('.videos');
	var photos = $('.photos');
	var _gameVideoSlides = $('#game-00 .videos');
	var	_gameSlides = 	$('#game-00 .photos, #game-00 .videos, #game-01 .photos, #game-02 .photos, #game-03 .photos, #game-04 .photos, #game-05 .photos, #game-06 .photos, #game-07 .photos, #game-08 .photos, #game-09 .photos, #game-10 .photos, #game-11 .photos, #game-12 .photos, #game-13 .photos, #game-14 .photos, #game-15 .photos, #game-16 .photos, #game-17 .photos, #game-18 .photos');

 	$('.vidCarousel').elastislide({ 
			imageW : 140, 
			margin : 15,
			border : 1,  
			easing : 'easeInOutSine'
	});

	_gameSlides.anythingSlider({
		resizeContents  : false,
		buildArrows		: false,
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

  $('.vidCarousel a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);
		_gameVideoSlides.anythingSlider(slide);
			return true;
	});

  $('.photo_thumbs a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);	
		$('ul.photos').anythingSlider(slide);
		return true;
	});

});