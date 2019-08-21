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

    // Buttons

    // wire up Add Item button click event
    $(".filter").click(function(e)
    {
      e.preventDefault(); // cancel default behavior
    });

    // On Click Menu BTN
    $('[data-toggle="offcanvas"]').on('click', function () {
      $(".navbar").removeClass('fixed-top'); 
      console.log('Entra');
    })

});

// Parallax
