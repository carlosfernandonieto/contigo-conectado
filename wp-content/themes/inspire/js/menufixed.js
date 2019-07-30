// JavaScript Document






jQuery( document ).ready(function($) {	
	posicionarMenu();

	$(window).scroll(function() {	
    	posicionarMenu();
	});
	
	function esconder_menu(){
	var alturaMenu = $(".menuFlotante").height();	
	$(".menuFlotante").css("margin-bottom", (-(alturaMenu))+10);	
}
	
	function posicionarMenu() {		
	var altura_del_header = $('#header').outerHeight(true);
	var anchura_del_header = $("html, body").width();
   
    if ($(window).scrollTop() >= altura_del_header){		
			$( "#header" ).css( { 'position': 'fixed', 'width': '100%', 'height': '50px', 'z-index': '100', 'top': '0'} );			
			$( "#logo" ).css( { 'width': '230px', 'top': '17px'} );
			$( "#logo img" ).css( { 'width': '100%'} );
			$( ".custom_menu" ).css( { 'margin-top': '20px', 'left': '370px'} );
			$( "body" ).css( { 'margin-top': '125px'} );
			$( "#header select" ).css( { 'top': '88px'} );		
			$( ".menu_section" ).css( { 'position': 'fixed', 'top': '60px', 'z-index': '99', 'width': '100%', 'background': '#fff'} );
			//$( ".column_rigth" ).css( { 'position': 'fixed', 'width': '300px', 'margin-left': '700px', 'top': '76px'} );	
			esconder_menu();
			if( anchura_del_header <= 720){
				console.log('fixer');
				$( "#header" ).css( { 'height': '130px'} );
				$( ".column_rigth" ).css( { 'position': 'inherit', 'width': '100%', 'top': '76px', 'margin-left': 'inherit'} );
						
			}
		
	    } else {
			
			$( "#header" ).css( { 'position': 'relative', 'width': 'inherit', 'height': '80px', 'z-index': 'inherit','top': 'auto'} );
			$( "#logo" ).css( { 'width': 'auto', 'top': '27px'} );
			$( "#logo img" ).css( { 'width': 'auto'} );		
			$( ".custom_menu" ).css( { 'margin-top': '38px', 'left': '430px'} );
			$( "body" ).css( { 'margin-top': '0px'} );
			$( "#header select" ).css( { 'top': '-15px'} );
			$( ".menu_section" ).css( { 'position': 'inherit', 'top': 'auto', 'z-index': 'inherit', 'width': 'auto', 'background': '#fff'} );
			//$( ".column_rigth" ).css( { 'position': 'inherit', 'width': '100%', 'margin-left': 'inherit', 'top': '76px'} );
			if( anchura_del_header <= 720){
				//console.log('normal');
				$( "#header" ).css( { 'height': '130px'} );
				$( "#logo" ).css( { 'width': '230px', 'top': '17px'} );
				$( "#logo img" ).css( { 'width': '100%'} );			
				
			}
    	}
}

});


/*function posicionarMenu() {
    var altura_del_header = $('header').outerHeight(true);
    var altura_del_menu = $('.menu').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('.menu').addClass('fixed');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.menu').removeClass('fixed');
        $('.wrapper').css('margin-top', '0');
    }
}*/