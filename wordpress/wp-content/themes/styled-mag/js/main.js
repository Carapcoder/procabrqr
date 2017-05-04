jQuery(document).ready(function($){

    // ticker
    $('.bn').show().bxSlider({
        minSlides: 1,
        maxSlides: 1,
        slideWidth: $(this).parent().width(),
        slideMargin: 10,
        ticker: true,
        tickerHover: true,
        speed: 15000
    });
    
    
    $('#main-menu').smartmenus();
        
    $('[data-toggle="tooltip"]').tooltip(); 
    
    $(function() {
    var $mainMenuState = $('#main-menu-state');
    if ($mainMenuState.length) {
        // animate mobile menu
        $mainMenuState.change(function(e) {
          var $menu = $('#menu-menu');
          if (this.checked) {
            $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
          } else {
            $menu.show().slideUp(250, function() { $menu.css('display', ''); });
          }
        });
        // hide mobile menu beforeunload
        $(window).bind('beforeunload unload', function() {
          if ($mainMenuState[0].checked) {
            $mainMenuState[0].click();
          }
        });
      }
    });
    
    
     /*Short Codes Js*/
    $('.menu-toggle').click(function(){
    $('.menu-header-menu-container').slideToggle('slow');
  });
  

  $('.header_extra').hover(
     function () {
        $('.search_header').css("display","block");
        $('.search_icon').hide();
     }, 

     function () {
        $('.search_header').css("display","none");
        $('.search_icon').show();
               }
  );   

  //Scroll To Top
    var window_height = $(window).height();
    var window_height = (window_height) + (50);
    
    

    $(window).scroll(function() {
        var scroll_top = $(window).scrollTop();
        if (scroll_top > window_height) {
            $('.styledmag_move_to_top').show();
        }
        else {
            $('.styledmag_move_to_top').hide();   
        }
    });
    
    $('.styledmag_move_to_top').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
        
    }); 
    
});