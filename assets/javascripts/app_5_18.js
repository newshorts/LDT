//jQuery 
jQuery(document).ready(function ($) {
	
	// Syndicated Nav
	mrm.cmp.nav.init();

	//Header Slide/Fade
	$('#headerSlider img:gt(0)').hide();
	setInterval(function(){
		$('#headerSlider :first-child')
			.fadeOut(2000)
			.next('img')
			.fadeIn(2000)
			.end()
			.appendTo('#headerSlider'); 
	}, 6000); 
	
	$('#vidCarousel').elastislide({ 
		imageW : 140, 
		margin : 15,
		border : 1,  
		easing : 'easeInOutSine'
	});
       
	// var mNavIDs = [ "#featured", "#okgo", "#kickflip", "#skydive", "#bungee", "#claw", "#game" ];
	$("#featured #site_nav, #test-featured #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  0});
	$("#anthem #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  1});
	$("#okgo #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  2});
	$("#kickflip #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  3});
	$("#skydive #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  4});
	$("#bungee #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  5});
	$("#claw #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  6});
	$("#games #site_nav").elastislide({imageW : 176, margin : 18, border : 1, easing : 'easeInOutSine', current:  7});
	//Video & Video Galleries
	$('#video_okgo, #photo_okgo, #map_okgo, #video_okgo2').anythingSlider({
		resizeContents      : true,
		buildArrows			: false,
		buildNavigation		: false,
		buildStartStop      : false,
		toggleControls		: false,
		hashTags            : false,  
		addWmodeToObject    : 'transparent',
		animationTime		: 0,
		delayBeforeAnimate	: 500, 
		onSlideBegin		: function(e, slider){
			slider.$items.fadeOut(300);
		},
		onSlideComplete: function (slider) {
            slider.$items.fadeIn(300, "linear");
        }
	});
	$('#vidCarousel a').click(function(e){
		e.preventDefault();
                
                // edited 5.15.12 - Mike
		var slide = $(this).attr('href').substring(1);
		$('#video_okgo, #video_okgo2, #game-1 #video_okgo, #game-2 #video_okgo, #game-3 #video_okgo').anythingSlider(slide);
		return true;
	});
  $('#photo_thumbs a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);
		$('#photo_okgo').anythingSlider(slide);
		return true;
	});
	$('#map_thumbs a').click(function(e){
		e.preventDefault();
		var slide = $(this).attr('href').substring(1);
		$('#map_okgo').anythingSlider(slide);
		return true;
	});
	// the thumbnail states
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

	$('body.featured, body.test-featured').each(function(){
		$('#mainNav li:eq(0)').addClass('active');
	});
	$('body.anthem').each(function(){
		$('#mainNav li:eq(1)').addClass('active');
	});
	$('body.okgo').each(function(){
		$('#mainNav li:eq(2)').addClass('active');
	});
	$('body.kickflip').each(function(){
		$('#mainNav li:eq(3)').addClass('active');
	});
	$('body.skydive').each(function(){
		$('#mainNav li:eq(4)').addClass('active');
	});
	$('body.bungee').each(function(){
		$('#mainNav li:eq(5)').addClass('active');
	});
	$('body.claw').each(function(){
		$('#mainNav li:eq(6)').addClass('active');
	});
	$('body.games').each(function(){ 
		$('#mainNav li:eq(7)').addClass('active');
	});
});


/*
 *
 *  Mike's additions 5.15.12
 *  
 **/

(function($) {
    $(window).load(function() {
        
        var videoController = function(id) {
            var pid = id;
            var player;
            var jPlayer;
            
            // private
            var onPlayerReady = function(evt) {
                
                playerFadeIn();
                
            }
            
            var onPlayerStateChange = function(evt) {
                console.debug("player state changed");
                console.dir(evt);
            }
            
            var playerFadeIn = function() {
                if(jPlayer != undefined) {
                    if(player.getPlayerState != undefined) {
                        if(player.getPlayerState() == -1 || player.getPlayerState() == 0 || player.getPlayerState() == 1 || player.getPlayerState() == 2 || player.getPlayerState() == 3 || player.getPlayerState() == 5) {
                            jPlayer.css({
                                opacity: 1
                            });
                        }
                    }
                }
            }
            
            var playerFadeOut = function() {
                if(jPlayer != undefined) {
                    jPlayer.css({
                        opacity: 0
                    });
                }
            }
            
            // setters
            this.createPlayer = function() {
                
                player = new YT.Player(pid, {
                    height: '508',
                    width: '940',
                    videoId: pid,
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
                
                jPlayer = $('#' + pid);
                
            }
            
            this.stop = function() {
                
                if(player.stopVideo != undefined) {
                    player.stopVideo();
                }
            }
            
            this.playerFadeIn = function() {
                playerFadeIn();
            }
            
            this.playerFadeOut = function() {
                playerFadeOut();
            }
            
            // getters
            this.getId = function() {
                return pid;
            }
            
            this.getPlayerState = function() {
                if(player.getPlayerState != undefined) {
                    return player.getPlayerState();
                }
                
            }
            
            this.isActivePlayer = function() {
                if(jPlayer != undefined) {
                    return jPlayer.parent().hasClass('video-active');
                }
            }
            
        }
        
        
        
        var videoModule = function(elem) {
            
            var id = '#' + elem + ' ';
            
            var nav = $(id + '.video-nav a');
            var ytArr = new Array();
            
            // set up the initial video
            var ytId = $(id + '.video-active div').attr('id');
            ytArr.push(new videoController(ytId));
            ytArr[0].createPlayer();
            
            // listen for clicks on relative nav
            nav.on('click', function(evt) {
                evt.preventDefault();
                
                var finder = $(this).data('finder');
                $(id + '.video-panel').removeClass('video-active');
                $(id + '.' + finder).addClass('video-active');
                
                if($(id + ' .' + finder).has('div').length) {
                    var divId = $(id + '.' + finder + ' div').attr('id');
                    var yt = new videoController(divId);
                    yt.createPlayer();
                    ytArr.push(yt);
                    
                }
                
                for(var i = 0; i < ytArr.length; i++) {
                    if(ytArr[i].getPlayerState != undefined) {
                        if(ytArr[i].getPlayerState() == 1) {
                            ytArr[i].stop();
                        }
                        
                        if(ytArr[i].isActivePlayer()) {
                            console.debug('player is active');
                            ytArr[i].playerFadeIn();
                        } else {
                            ytArr[i].playerFadeOut();
                        }
                    }
                    
                }
                
            });
            
        }
        
        new videoModule('video1');
        new videoModule('video2');
        
        $('.slide').elastislide({
            imageW  : 139,
            margin  : 18
        });
        
    });
})(jQuery);

