jQuery(function($) {
    $('.note').waypoint(function() {
        $(this).toggleClass( 'bounceInLeft animated' );
    },
    {
        offset: '70%',
        triggerOnce: true
    });

    $('#carousel-example-generic2').waypoint(function() {
        $(this).toggleClass( 'bounceIn animated' );
    },
    {
        offset: '70%',
        triggerOnce: true
    });

    $('.icons').waypoint(function() {
        $(this).toggleClass( 'bounceIn animated' );
    },
    {
        offset: '70%',
        triggerOnce: true
    });

    $('#experiencias div').waypoint(function() {
        $(this).toggleClass( 'bounceIn animated' );
    },
    {
        offset: '70%',
        triggerOnce: true
    });

    $('#logos div').waypoint(function() {
        $(this).toggleClass( 'bounceIn animated' );
    },
    {
        offset: '70%',
        triggerOnce: true
    });

    $('.imagen50').waypoint(function() {
        $(this).toggleClass( 'imagen50on' );
    },
    {
        offset: '70%',
        triggerOnce: true,
    });
});
$(document).ready(function(){  $('#post_content img').addClass('img img-responsive');

  var flag = false;
  var scroll;
  // $("#mainContent img").addClass('img-responsive');

  $(window).scroll(function(){
    scroll = $(window).scrollTop();
    if((scroll > 500) && (screen.width>768)){
      if(!flag){
        $("#bajar").css({"display": "none"});
        $(".navbar-header").css({"width": "8%"});
        $(".navbar-brand img").css({"width": "100%"});
        $("ul.nav.navbar-nav").css({"margin-top": "0px", "width":"92%", "background-color": "transparent"});
        $(".navbar-default").css({"background-color": "rgba(255, 255, 255, 0.82)"});
        flag = true;
      }
    }else{
      if(flag){
        $("#bajar").css({"display": "block"});
        $(".navbar-header").css({ "width": "22%"});
        $(".navbar-brand img").css({"width": "100%"});
        $("ul.nav.navbar-nav").css({"margin-top": "2%", "width":"78%", "background-color": "rgba(255, 255, 255, 0.78)"});
        $(".navbar-default").css({"background-color": "transparent"});
        flag = false;
      }
    }
  });
});