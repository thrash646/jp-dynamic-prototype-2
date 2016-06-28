
$(document).ready(function(){

    var $animation_elements = $('.animation-element');
    var $window = $(window);
    $window.on('scroll', check_if_in_view);
    $window.on('scroll resize', check_if_in_view);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } 
//          else {
//          $element.removeClass('in-view');
//        } Removes CLASS when scrolls out of view - test removal
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

        $("#video-icon").hover(function(){
            $("#circle").css("opacity", 0);
             $("#play").css("opacity", 0);
             $("#play-frame").css("opacity", 0); 
            }, function(){
                $("#circle").css("opacity", 1);
                $("#play").css("opacity", 1);
                $("#play-frame").css("opacity", 1); 
        });
         $("#graphic-icon").hover(function(){
                $("#outer-thick_lines .cls-14").css("fill", "#d5084d");
                $(this).css("animation", "iconRotateEnter 500ms ease"); 
                $(this).css("animation-fill-mode", "forwards");          
            }, function(){
                 $("#outer-thick_lines .cls-14").css("fill", "#00b0fe"); 
                $(this).css("animation", "iconRotateLeave 500ms ease");
            });

            $("#web-icon").hover(function(){
                $("#web").css("opacity", 1);
            }, function(){
                $("#web").css("opacity", 0); 
        });

    });  // end of ready function
