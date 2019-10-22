

////////// Menu /////////////


//Menu toggle-button

  $('.menu-icon').on('click', function(){
  $('nav ul').toggleClass('showing');
  });

  $(window).on('scroll', function(){
  if($(window).scrollTop()){
    $('nav').addClass('black');
  }else{
    $('nav').removeClass('black');
  }
  });


///////// swipebox lunch //////////////

  ( function( $ ) {

    $( '.swipebox' ).swipebox();

  } )( jQuery );


//////////// Back to top button ///////////


  $(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40) {
        $('.topBtn').fadeIn();
      } else {
        $('.topBtn').fadeOut();
      }
    });

    $('.topBtn').click(function(){
      $('html ,body').animate({scrollTop : 0}, 900);
    });
  });
