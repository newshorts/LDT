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
	var	_gameSlideZ = 	$('#gameWrap .photos, #gameWrap .videos');

 	$('.vidCarousel').elastislide({ 
			imageW : 140, 
			margin : 15,
			border : 1,  
			easing : 'easeInOutSine'
	});

	_gameSlideZ.anythingSlider({
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