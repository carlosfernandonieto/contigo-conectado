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

});

