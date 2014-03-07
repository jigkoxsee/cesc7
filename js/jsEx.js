var pageCount = 1;
var oldSlide = 1;
var dotTemp = 1;
var checkFace = 1;
var dotTextTemp = "begin";
jQuery(document).ready(function ($) {

     $("#trigger_id").click(function (e) {
	     e.preventDefault();
	     $("#trigger_id").leanModal({ top : 200, closeButton: ".modal_close" });
	  });
	
		//slide show
	
     $('#spon').bjqs({
        'height' : 320,
        'width' : 600,
		'animtype' : 'slide',
		'showmarkers' : false,
        'responsive' : true,
		nexttext : '<b style = "font-size:40px;color:black;background-color:white;" >&nbsp ></b>', // Text for 'next' button (can use HTML)
		prevtext : '<b style = "font-size:40px;color:black;background-color:white;" >< &nbsp</b>'
    });	
		
    $('#slideShow').bjqs({
        'height' : 320,
        'width' : 600,
		'animtype' : 'slide',
		'showmarkers' : false,
        'responsive' : true,
		nexttext : '<b style = "font-size:40px;color:black;background-color:white;" >&nbsp ></b>', // Text for 'next' button (can use HTML)
		prevtext : '<b style = "font-size:40px;color:black;background-color:white;" >< &nbsp</b>'
    });
		

		var window_width = $(window).height() - $('#move').height();
		var document_height = $(document).height() - $(window).height();

		$(function () {
			$(window).scroll(function () {
				var scroll_position = $(window).scrollTop();
				var object_position_left = window_width * (scroll_position / document_height);
				$('#move').css({
					'top': object_position_left
					//'top': 50 px
				});
			});
		});
		
		 $(window).stellar();
		 
		 $('#scroller').stellar({
			 scrollProperty: 'transform',
			 positionProperty: 'transform'
		 });
          
		  var links = $('.navigation').find('li');
		  var linksMobile = $('#nav').find('a');
		  slide = $('.slidePage');
		  button = $('.button');
		  mywindow = $(window);
		  htmlbody = $('html,body');
		  networkButt = $('.network');
		  robotButt = $('.robot');
		  backNetButt = $('.backNet');
		  backRoButt = $('.backRo');
		  $( "#dot1Text" ).hide();
		  $( "#dot2Text" ).hide();
		  $( "#dot3Text" ).hide();
		  $('#network').hide();
		  $('#robot').hide();
		  slide.waypoint(function (event, direction) {
			dataslide = $(this).attr('data-slide');
			  
			  
			if(direction === 'down') {
			  $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
			}else {
			  $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
			}
			
			
		  });
		  
		  mywindow.scroll(function () {
			if(mywindow.scrollTop() == 0) {
			  $('.navigation li[data-slide="1"]').addClass('active');
			  $('.navigation li[data-slide="2"]').removeClass('active');
			}
		  });
		  
		  function goToScroll(dataslide) {
			htmlbody.animate({
			  scrollTop: $('.slidePage[data-slide="'+dataslide+'"]').offset().top 
			}, 1000, 'easeInOutQuint');
			
		  }
		  
		  function goToScrollUp(dataslide) {
			htmlbody.animate({
			  scrollTop: $('.slidePage[data-slide="'+dataslide+'"]').offset().top-1 
			}, 1000, 'easeInOutQuint');
			
		  }
		  
	      links.click(function (e) {
			//e.preventDefault();
			dataslide = $(this).attr('data-slide');
			if(dataslide < oldSlide){
			    oldSlide = dataslide;
				goToScrollUp(dataslide);
			}else{
				oldSlide = dataslide;
				goToScroll(dataslide);
			}
			
		  });
		  
		  linksMobile.click(function (e) {
			//e.preventDefault();
			dataslide = $(this).attr('data-slide');
			goToScroll(dataslide);
		  });
		  
		  button.click(function (e) {
				e.preventDefault();
				dataslide = $(this).attr('data-slide');
				goToScroll(dataslide);
    });
	
	/* ==================== Smooth Scroll ==================================
		fixed not smooth scroll on chrome and IE
	*/
	
				if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
			window.onmousewheel = document.onmousewheel = wheel;

			var time = 400;
			var distance = 100;

			function wheel(event) {
				if (event.wheelDelta) delta = event.wheelDelta / 120;
				else if (event.detail) delta = -event.detail / 3;

				handle();
				if (event.preventDefault) event.preventDefault();
				event.returnValue = false;
			}

			function handle() {

				$('html, body').stop().animate({
					scrollTop: $(window).scrollTop() - (distance * delta)
				}, time);
			}


			$(document).keydown(function (e) {

				switch (e.which) {
					//up
					case 38:
						pageCount--;
						goToScrollUp(pageCount);
						break;

						//down
					case 40:
						pageCount++;
						goToScroll(pageCount);
						break;
				}
			});
	/*================================== Button Slide Network Robot ======================================*/
	networkButt.click(function (e) {
       e.preventDefault();
	   $('#text2').animate({left:'-100%'},"slow");
	   $('#text2').fadeOut();
	   $('#network').delay(1030).fadeIn();
  });
  robotButt.click(function (e) {
       e.preventDefault();
	   $('#text2').animate({left:'100%'},"slow");
	   $('#text2').fadeOut();
	   $('#robot').delay(1030).fadeIn();
  });
  backNetButt.click(function (e) {
       e.preventDefault();
	   $('#network').fadeOut();
	   $('#text2').delay(1030).fadeIn();
	   $('#text2').animate({left:'0%'},500);  
  });
  backRoButt.click(function (e) {
       e.preventDefault();
	   $('#robot').fadeOut();
	   $('#text2').delay(1030).fadeIn();
	   $('#text2').animate({left:'0%'},500);   
  });
  
  /*================================== Pacman Animation ====================================================*/
	var image = new Image();
    image.src ='./images/pacAnimation.gif';
	var staticImage = new Image();
    staticImage.src ='./images/pacman2.png';
  $('#dot1').click(function (e) {
		if(dotTemp > 1){
			$('#pacman').addClass('flipped');
			checkFace = 0;
		}else if(dotTemp < 1 && checkFace == 0){
			$('#pacman').removeClass('flipped');
			checkFace = 1;
		}
		$('#pacman').attr('src',image.src).delay(100);
		$('#pacman').animate({ 
        left: "20%"
      }, { duration: 2000,complete: function() {
			$('#pacman').attr('src',staticImage.src),
			$( "#dot1" ).fadeTo( "slow" , 0.5)
			}
			});
		$(".dotText").hide();
		$(".point").hide();
		$( "#dot1Text" ).toggle( "slow" );
		$('#text01').animate({'font-size':'30px'},300);
		$('#text02').animate({'font-size':'20px'},300);
		$('#text03').animate({'font-size':'20px'},300);
	   dotTemp = 1;
		
  });
  $('#dot2').click(function (e) {
		if(dotTemp > 2){
			$('#pacman').addClass('flipped');
			checkFace = 0;
		}else if(dotTemp < 2 && checkFace == 0){
			$('#pacman').removeClass('flipped');
			checkFace = 1;
		}
		$('#pacman').attr('src',image.src).delay(100);
		$('#pacman').animate({ 
        left: "50%"
      }, { duration: 2000,complete: function() {
			$('#pacman').attr('src',staticImage.src),
			$( "#dot2" ).fadeTo( "slow" , 0.5)
			}
			});
		$(".dotText").hide();
		$(".point").hide();
		$( "#dot2Text" ).toggle( "slow" );
		$('#text02').animate({'font-size':'30px'},300);
		$('#text01').animate({'font-size':'20px'},300);
		$('#text03').animate({'font-size':'20px'},300);
		dotTemp = 2;
  });
  $('#dot3').click(function (e) {
		if(dotTemp > 3){
			$('#pacman').addClass('flipped');
			checkFace = 0;
		}else if(dotTemp < 3 && checkFace == 0){
			$('#pacman').removeClass('flipped');
			checkFace = 1;
		}
		$('#pacman').attr('src',image.src).delay(100);
		$('#pacman').animate({ 
        left: "80%"
      }, { duration: 2000,complete: function() {
			$('#pacman').attr('src',staticImage.src),
			$( "#dot3" ).fadeTo( "slow" , 0.5)
			}
			});
		$(".dotText").hide();
		$(".point").hide();
		$( "#dot3Text" ).toggle( "slow" );
		$('#text03').animate({'font-size':'30px'},300);
		$('#text02').animate({'font-size':'20px'},300);
		$('#text01').animate({'font-size':'20px'},300);
		dotTemp = 3;
  });
});

	
	