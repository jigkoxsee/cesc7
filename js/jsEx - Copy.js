//Eater egg register button

var width = $(window).width() - 127;
var height = $(window).height() - 111;
var count = 0;
/*
function run() {
    if(count <= 2){
	 var top = Math.random() * height;
     var left = Math.random() * width;
     $('#register').css('top', top + 'px').css('left', left + 'px');
	 count++;
	}
}*/

$(document).ready(function() {
    $('body').fadeIn();
    $('a#login').click(function(e){
    window.goto=$(this).attr("href");
    $('body').fadeOut('fast',function(){
      document.location.href=window.goto;
    });
    });
    /*$('#register').mouseover(run);
    $('#register').mousemove(run);
	    $('#register').click(function() {
	    window.location='http://ziko.kmi.tl/cesc7/index.php?r=user/create';
	  });*/
});

jQuery(document).ready(function ($) {
   //move navbar
   var window_width = $(window).height() - $('#move').height();

var document_height = $(document).height() - $(window).height();

$(function () {
    $(window).scroll(function () {
        var scroll_position = $(window).scrollTop();
        var object_position_left = window_width * (scroll_position / document_height);
        $('#move').css({
            'top': object_position_left
        });
    });
});



//animation for host pacman
$('#slide2').waypoint(function() {
  var window_width = $(window).width() - $('#pinkhost').width();
  var document_height = $('#slide2').height() - $(window).height();
  var lastScrollTop = 0;
  $(window).scroll(function () {
    var scroll_position = $(window).scrollTop()-850;
	var scroll_positionleft = $(window).scrollTop()-850;
    var object_position_top = window_width * (scroll_position / document_height);
      var object_position_left = window_width * (scroll_positionleft / document_height);
    var st = $(this).scrollTop();
	if(scroll_position > 50 && scroll_position < 500){
	 $( '#redhost' ).css({
            'top': object_position_top,
         });	
	}
      if(scroll_position > 0 && scroll_position < 650){
	  $( '#pinkhost' ).css({
            'left': object_position_left,
         });	
	}
     	
   lastScrollTop = st;
  });
});


//animation for kirby
$('#slide3').waypoint(function() {
  var window_width = $(window).width() - $('#sat').width();
  var window_height = $(window).height() - $('#sat').height();
  var document_height = $('#slide3').height() - $(window).height();
  var lastScrollTop = 0;
  $(window).scroll(function () {
    var scroll_position = $(window).scrollTop()-2403;
    var object_position_left = window_width * (scroll_position / document_height);
    var object_position_top = window_height * (scroll_position / document_height);
    var st = $(this).scrollTop();
    $( '#sat' ).css({
            'left': object_position_left/1.5,
			'top': object_position_left
         });
   lastScrollTop = st;
  });
});


 //toggle kirby when collide slide 4
$('#slide4').waypoint(function() {
   $('#sat').toggle();
});

   
   //stellar
  $(window).stellar();
  
  var links = $('.navigation').find('li');
  var linksMobile = $('#nav').find('a');
  slide = $('.slide');
  button = $('.button');
  mywindow = $(window);
  htmlbody = $('html,body');
  networkButt = $('.network');
  robotButt = $('.robot');
  backNetButt = $('.backNet');
  backRoButt = $('.backRo');
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
	  scrollTop: $('.slide[data-slide="'+dataslide+'"]').offset().top
	}, 1000, 'easeInOutQuint');
  }
  
  links.click(function (e) {
    //e.preventDefault();
	dataslide = $(this).attr('data-slide');
	goToScroll(dataslide);
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
  
  
  
  });