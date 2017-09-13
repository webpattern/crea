$("document").ready(function(){

		$(document).ready(function() {
 
		$('body').append('<div class="button-up" style="opacity: 0.7; width: 100px; height: 100%; position: fixed; left: 0px; top: 50%; cursor: pointer; text-align: center; line-height: 100px; color: rgb(86, 52, 25); background: none; font-weight: bolder; font-family: "Roboto Condenses"; font-size: 18px;  text-shadow: 0px 0px 0px black;"><img src="up.ico" style="width: 35px; ">НАВЕРХ</div>');
		 
		$ (window).scroll (function () {
		if ($ (this).scrollTop () > 300) {
		$ ('.button-up').fadeIn();
		} else {
		$ ('.button-up').fadeOut();
		}

		});
		


		 
		$('.button-up').click(function(){
		$('body,html').animate({
		scrollTop: 0
		}, 100);
		return false;
		});
		 
		$('.button-up').hover(function() 
		{
		$(this).animate({'opacity':'1',}).css({'background-color':'transparent','text-shadow':'-1px 0px 1px black','color':'#ead287'});
		}, 
		function(){
		$(this).animate({'opacity':'0.7'}).css({'background':'none','text-shadow':'0px 0px 0px black','color':'rgb(86, 52, 25)'});;
		});
		});
		
		
		$('.cart_push').click(function() 
		{
		$('.cart_vid').css({'display':'none'});
		}, 
		function(){
		$('.cart_vid').animate({'opacity':'0.1'}).css({'background':'none','text-shadow':'0px 0px 0px black','color':'rgb(86, 52, 25)'});;
		});
		

		
});
