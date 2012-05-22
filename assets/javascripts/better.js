 jQuery(document).ready(function ($) {
	//Tabs
	function changeTab(e){
		e.preventDefault();
		$("#gameTabs li a.active").removeClass("active");
		$(this).addClass("active");
		showGame($(this).attr("href"));
	}

	$("#gameTabs li a").click(changeTab);
	$("#gameTabs li:eq(0) a").click();

	function showGame(result){
		var gameLink = $('#gameTabs li a.active').attr('href');

		$("#gameWrap").fadeOut();
	
		$.ajax({
			url: '/challenges/' + gameLink,
			cache: false,
			beforeSend: function(result) {
      			$('#error').hide();
    		},
			success: function(result){
				$('#gameWrap').html(result).fadeIn();
			},
			error: function(result) {
      			$('#error').show();
    		}
		});
	}
	$('#gameNav').elastislide({ 
			imageW:139, 
			margin:35, 
			border:0, 
			easing:'easeInOutSine', 
			current:0
		});
});





