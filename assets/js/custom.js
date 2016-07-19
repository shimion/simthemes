(function( $ ) {
  $.fn.keepRatio = function(which) {
      var $this = $(this);
      var w = $("#sequence").width();
      var h = $("#sequence").height();
      var ratio = w/h;
      $(window).resize(function() {
          switch(which) {
              case 'width':
                  var nh = $this.width() / ratio;
                  $this.css('height', nh + 'px');
                  break;
              case 'height':
                  var nw = $this.height() * ratio;
                  $this.css('width', nw + 'px');
                  break;
          }
      });
  
  }
})( jQuery );      
    
jQuery(document).ready(function($){
    $('#sequence').keepRatio('width');
    $('#sequence-theme').keepRatio('width');
});
	
jQuery(document).ready(function($) {


var $container = $('.masonry-container');
$container.imagesLoaded( function () {
  $container.masonry({
    columnWidth: '.item',
    itemSelector: '.item'
  });   
});



jQuery(document).ready(function($){
$( ".background-color-featured" ).each(function() {
  var bgcolor = $(this).attr('background-color');
      $(this).css('background-color', bgcolor);
/*	  $(this).mouseover(function(e) { 
	  var bgcolor = $(this).attr('background-color-hover');
		$(this).css("background-color",bgcolor) ;
		})

	  $(this).mouseout(function(e) { 
	  var bgcolor = $(this).attr('background-color');
		$(this).css("background-color",bgcolor) ;
		})
*/
});




});
	
	/*============================================
	ScrollTo Links
	==============================================*/
	$('a.scrollto').click(function(e){
		$('html,body').scrollTo(this.hash, this.hash, {gap:{y:-80},animation:  {easing: 'easeInOutCubic', duration: 1600}});
		e.preventDefault();

		if ($('.navbar-collapse').hasClass('in')){
			$('.navbar-collapse').removeClass('in').addClass('collapse');
		}
	});
	
	
	/*============================================
	Filter Projects
	==============================================*/
	$('#filter-works a').click(function(e){
		e.preventDefault();

		$('#filter-works li').removeClass('active');
		$(this).parent('li').addClass('active');

		var category = $(this).attr('data-filter');

		$('.project-item').each(function(){
			if (category=='*'){
				$(this).removeClass('filtered').removeClass('selected');
				return;
			}
			else if($(this).is(category)){
				$(this).removeClass('filtered').addClass('selected');
			}
			else{
				$(this).removeClass('selected').addClass('filtered');
			}

		});

	});
	
	
	/*Colorbox*/
	$(".enlarge").colorbox({ maxWidth:"85%", maxHeight:"85%"});
	$(".colorbox").colorbox({maxWidth:"85%", maxHeight:"85%"});
	$(".colorbox-video").colorbox({iframe:true,  innerWidth:1200, innerHeight:675,maxWidth:"85%", maxHeight:"85%"});
	
	$('.news-media.gallery').each(function(i){
		$(this).find(".colorbox").colorbox({rel:'group'+i,maxWidth:"85%", maxHeight:"85%"});
	});
	
	/*============================================
	Tooltips
	==============================================*/
	$("[data-toggle='tooltip']").tooltip({container: 'body'});
	
	/*============================================
	Social Share
	==============================================*/	
	if($(".social-media").length){

		var shareTitle = $(".social-media").data('title') ? $(".social-media").data('title') : $('.page-title').text();
		
		$('.social-media').socialLikes({
			counters: false,
			title: shareTitle
		});
	}
	
	/*============================================
	Placeholder Detection
	==============================================*/
	/*if (!Modernizr.input.placeholder) {
		$('#contact-form').addClass('no-placeholder');
	}*/
	
	/*============================================
	Responsive Submenu
	==============================================*/
	$('.submenu').children('a').click(function(e){
    
		var $submenu = $(this).siblings('ul');

		if($(window).width()<768){
			e.preventDefault();
			
			if($submenu.is('.open')){
				$submenu.removeClass('open').slideUp();
			}else{
				$submenu.addClass('open').slideDown();
			}
			
		}

	});

	/*============================================
	Scrolling Animations
	==============================================*/
	$('.scrollimation').waypoint(function(){
		$(this).toggleClass('in');
	},{offset:'80%'});





	
	$('.projects-container.scrollimation').waypoint(function(){
		var i = 1,
		delay = [];
		$(this).find('.project-thumb').each(function(i){
			i++;
			var elem = $(this);
			delay[i] = setTimeout(function(){
				elem.addClass('in');
			},200*i);
		})
	},{offset:'70%'});
	
	$('.iphones-wrapper.scrollimation').waypoint(function(){
		$(this).find('.iphone-landscape-frame').addClass('in');
	},{offset:'60%'});
	
	/*============================================
	Resize Functions
	==============================================*/
	$(window).resize(function(){
		scrollSpyRefresh();
		waypointsRefresh();
	});
	/*============================================
	Refresh scrollSpy function
	==============================================*/
	function scrollSpyRefresh(){
		setTimeout(function(){
			$('body').scrollspy('refresh');
		},1000);
	}

	/*============================================
	Refresh waypoints function
	==============================================*/
	function waypointsRefresh(){
		setTimeout(function(){
			$.waypoints('refresh');
		},1000);
	}
	
	
	
	
	

	/*============================================
	Load Post
	==============================================*/
	$('.ajax-blog .read-more').click(function(e){
		e.preventDefault();
		
		var $this = $(this),
			postLink = $(this).attr('href');
		
		if($this.is('.loading')){
			return false;
		}
		
		$this.animate({opacity:0},200,function(){
			$this.addClass('loading').text('Loading');
			$this.animate({opacity:1},200);
		});
		
		$.get(postLink, function(data){
		
			var postContent = $(data).find('.post-content, .post-footer'),
				$thePost = 	$this.parents('.col-sm-10');
			
			$thePost.append('<div class="ajax-content" style="display:none;"></div>');
			$thePost.find('.ajax-content').html(postContent);
			$thePost.find('.ajax-content .post-excerpt, .ajax-content .posts-nav').remove();
			
			var shareTitle = $thePost.find(".social-media").data('title') ? $thePost.find(".social-media").data('title') : $thePost.find('.post-title').text();
			
			$thePost.find('.social-media').socialLikes({
				counters: false,
				title: shareTitle,
				url: postLink
			});
			
			setTimeout(function(){
				$thePost.find('.ajax-content').slideDown(500);
				
				$thePost.parents('.post').addClass('loaded');
				$this.parents('footer').animate({'height':0,'opacity':0},500,function(){$(this).remove()});
			},500);
		
		});
		
	});
	
});	


//Add Loading script on the body until site element load
	jQuery(function($){
		$(window).load(function() {
		var browser_height = $( window ).height();
		var browser_height_half = parseFloat(browser_height)/parseFloat(2);
		//$(".add_loading").css('padding-top', browser_height_half);
        $(".add_loading").fadeOut("slow");;
	//	$('html, body').animate({scrollTop : 0},800);	
		
    })
})

//call nice Scrolling mouseweele
jQuery(document).ready(function($) {
		$("html").niceScroll();
	});
	

jQuery(document).ready(function($) {
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});


    $(window).load(function(){
      $(".navbar-default").sticky({ topSpacing: 0 });
    });


jQuery(document).ready(function($) {
		var hei = $( window ).height();
		//$("#full_screen_selector").css('height', hei);
	});
	


	
	
});

/******************************************************************************
	Transforms the basic Twitter Bootstrap Carousel into Fullscreen Mode
	@author Fabio Mangolini
     http://www.responsivewebmobile.com
******************************************************************************/
jQuery(document).ready(function($) {
	$('.carousel').carousel({
    	pause: "false",
    	interval: 4000
	});

	$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': '100vh'});
	$('.carousel .item').css({'position': 'relative', 'width': '100%', 'height': '100vh'});
	$('.carousel-inner div.item img').each(function() {
		var imgSrc = $(this).attr('src');
		$(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
		$(this).remove();
	});

	$(window).on('resize', function() {
		$('.carousel').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
	});
}); 

