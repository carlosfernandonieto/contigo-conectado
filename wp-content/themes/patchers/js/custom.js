jQuery(document).ready(function($) {

    // Obtiene el data-src del video
    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    // Autoplay video cuando abre el modal  
    $('#myModal').on('shown.bs.modal', function (e) {

    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
    
    // El video se para cuando se cierra el modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
    // document ready  

    // Form popup
    $( ".open-button" ).on( "click", function() {
        $("#myForm").addClass('d-block').css('opacity','1');

    });

    $( ".close-btn-f" ).on( "click", function() {
        $("#myForm").removeClass('d-block').css('opacity','0','transition','opacity 0.5s ease-in-out');
    });

    setTimeout( function(){ 
        AOS.init();
    }  , 2000 );

    // Share Buttons
    $('a.social-share').on('click',function(event){
        event.preventDefault();
        
        $(this).parent().parent().find('a').not('.social-share').each(function(index){    
          if(!$(this).hasClass('show')){
            $(this).addClass('show');
            TweenMax.to($(this), 0.4, {y:((index+1)*50), autoAlpha:1});
          }else{      
            TweenMax.staggerTo($(this), 0.2, {y:0, autoAlpha:0}, 0.1, function(){
              $('.share-buttons a').removeClass('show');
            });      
          }
        });
    });

    
});

// Parallax

jQuery(window).scroll(function(){

    // Add parallax scrolling to all images in .paralax-image container
    jQuery('.img-articulo').each(function(){
      // only put top value if the window scroll has gone beyond the top of the image
      if (jQuery(this).offset().top < jQuery(window).scrollTop()) {
        // Get ammount of pixels the image is above the top of the window
        var difference = jQuery(window).scrollTop() - jQuery(this).offset().top;
        // Top value of image is set to half the amount scrolled
        // (this gives the illusion of the image scrolling slower than the rest of the page)
        var half = (difference / 2) + 'px';
  
        jQuery(this).find('img').css('top', half);
      } else {
        // if image is below the top of the window set top to 0
        var difference = jQuery(window).scrollTop() - jQuery(this).offset().top;

       
        var half = (difference / 2) + 'px';
  
        jQuery(this).find('img').css('top', half);
      }
    });
});

