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

    $(".bt_ciudad").on('click', 'a', function(){
      $("#btn-genero").html('Genero');
      $("#btn-edad").html('Edad');
    });

    $(".bt_genero").on('click', 'a', function(){
      $("#btn-ciudad").html('Ciudad');
      $("#btn-edad").html('Edad');
    });

    $(".bt_edad").on('click', 'a', function(){
      $("#btn-ciudad").html('Ciudad');
      $("#btn-genero").html('Genero');
    });
    
    $(".dropdown-menu").on('click', 'a', function(){
      $(this).parent().parent().siblings(".btn:first-child").html($(this).text());
    });

    // On Click Menu BTN
    $('[data-toggle="offcanvas"]').on('click', function () {
      $(".navbar").removeClass('fixed-top'); 
      console.log('Entra');
    })

    // On resize

    if($(window).width() <= 768) {
      // Nosotros
      $("#btn-nosotros").addClass('d-none');
      $("#btn-m-nosotros").removeClass('d-none');
      $('#menu-nosotros-off').addClass('collapse');
      // Resultados
      $("#btn-resultados").addClass('d-none');
      $("#btn-m-resultados").removeClass('d-none');
      $('#menu-resultados-off').addClass('collapse');
      // Temas
      $("#btn-temas").addClass('d-none');
      $("#btn-m-temas").removeClass('d-none');
      $('#menu-temas-off').addClass('collapse');
    } else {
      // Nosotros
      $("#btn-nosotros").removeClass('d-none');
      $('#menu-nosotros-off').removeClass('collapse');
      // Resultados
      $("#btn-resultados").removeClass('d-none');
      $('#menu-resultados-off').removeClass('collapse');
      // Temas
      $("#btn-temas").removeClass('d-none');
      $('#menu-temas-off').removeClass('collapse');
    }

    $(window).on("resize", function () {
      if($(window).width() <= 768) {
        // Nosotros
        $("#btn-nosotros").addClass('d-none');
        $("#btn-m-nosotros").removeClass('d-none');
        $('#menu-nosotros-off').addClass('collapse');
        // Resultados
        $("#btn-resultados").addClass('d-none');
        $("#btn-m-resultados").removeClass('d-none');
        $('#menu-resultados-off').addClass('collapse');
        // Temas
        $("#btn-temas").addClass('d-none');
        $("#btn-m-temas").removeClass('d-none');
        $('#menu-temas-off').addClass('collapse');
      } else {
        // Nosotros
        $("#btn-nosotros").removeClass('d-none');
        $("#btn-m-nosotros").addClass('d-none');
        $('#menu-nosotros-off').removeClass('collapse');
        // Resultados
        $("#btn-resultados").removeClass('d-none');
        $("#btn-m-resultados").addClass('d-none');
        $('#menu-resultados-off').removeClass('collapse');
        // Temas
        $("#btn-temas").removeClass('d-none');
        $("#btn-m-temas").addClass('d-none');
        $('#menu-temas-off').removeClass('collapse');
      }
    });

    // Video Home

  var carousel = $('#carousel-example-generic');
  var olNav = carousel.find('.carousel-indicators');
  var contVideo = carousel.find('.cont-video');
  contVideo.hide();
  
  $(".btn-video a").on('click',function() {
    currentIndex = $('div.active').index();
    var ActiveElement = carousel.find('.active .cont-preview');
    var Activeiframe = carousel.find('.active .cont-video iframe');
    $(Activeiframe)[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    ActiveElement.fadeOut();
    olNav.fadeOut();
    contVideo.show();
  });
  
  $(carousel).on('slide.bs.carousel', function () {
    //var Activeiframe = carousel.find('.active .cont-video iframe');
    var ActiveElement = carousel.find('.active .cont-preview');
    //$(Activeiframe)[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    //var Activeiframe = carousel.find('.active .cont-video iframe');
    ActiveElement.fadeOut(2000);
    setTimeout( function(){ 
      var btnPlay = ActiveElement.find('.btn-video a');
      //console.log(btnPlay);
      btnPlay.trigger('click');
    },1000);
  });

  $(".c-btn-volver i").on('click',function() {
    currentIndex = $('div.active').index();
    var ActiveElement = carousel.find('.active .cont-preview');
    var Activeiframe = carousel.find('.active .cont-video iframe');
    $(Activeiframe)[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    ActiveElement.fadeIn();
    olNav.fadeIn();
    contVideo.show();
});

});

// Parallax
