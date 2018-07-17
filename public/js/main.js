$(document).ready(function(){
    /*
    * MEGA MENU
    */
    $('.mega_li').click(function(){
        $('.mega_menu').slideToggle(200);
        $(this).find('a').find('span').toggleClass('rotate-180');
    });
    
    $('.mega_li').mouseenter(function(){
        controller_name = $(this).attr("data-controller").substring(4);
        target_name = "mul_"+controller_name;
        /*FOR UL*/ 
        $('.mega_ul').removeClass('active_mm');
        $('.'+target_name).addClass('active_mm');
        /*FOR LI*/
        $('.mega_ul').removeClass('active_mm');
        $('.'+target_name).addClass('active_mm');
    });
    $('.mega_ul').mouseenter(function(){
        controller_name = $(this).attr("data-controller").substring(4);
        target_name = "mli_"+controller_name;
        $('.mega_li').removeClass('mli_active');
        $('.'+target_name).addClass('mli_active');
    });

    /*
    *Continue Reading
    */
    $('.continue_reading_btn').click(function(){
        $(this).closest('.continue_reading').toggleClass('continue_reading_expand');
        $(this).hide();
    });
    /*
    * According
    */
    $('.my_accordion').click(function(){
        $('.my_accordion').removeClass('current');
        $(this).addClass('current');
    });
    /*
    *Sear bar
    */
   $('.search-anything-icon').click(function(){
        $('.search-anything').slideToggle();
   });

   // SLIDER START
   $(".portfolio_pics > .p_items:gt(0)").hide();
    setInterval(function() {
      $('.portfolio_pics > .p_items:first')
        .fadeOut(1500)
        .next()
        .fadeIn(1500, function(){
            var p_items_height = $('.p_items').outerHeight();
            var to_be_height = p_items_height + 50;
            $('.portfolio_pics').css('height', to_be_height+'px');
        })
        .end()
        .appendTo('.portfolio_pics');
    }, 6000);
  // SLIDER END
  $(window).scroll(function(){
    var p_items_height = $('.p_items').outerHeight();
    var to_be_height = p_items_height + 30;
    console.log(to_be_height);
  });

  $('.iso-group-pic').click(function(){
        var getBackground = $(this).attr('data-background');
        var background = 'url(img/iso-imgs/'+getBackground+')';
        $(this).css('background-image', background);
    });
    $(".iso-group-pic").trigger("click");

    // 

    var firstLoadIsoBackgroundImg = $(".iso-group").find("li:first-child").find('.iso-group-pic').attr('data-background');
    var firstLoadIsoBackground = 'url(img/iso-imgs/'+firstLoadIsoBackgroundImg+')';
    $('.display-selected-iso').find('.cover').css('background-image', firstLoadIsoBackground);
    var firstLoadIsoDetails = $(".iso-group").find("li:first-child").find('.iso-group-details').html();
    $('.display-selected-iso-details').html(firstLoadIsoDetails);


    $('.iso-read-more-btn').click(function(){
        //get
        var backgroundImage = $(this).closest('.iso-group-item').find('.iso-group-pic').attr('data-background');
        var background = 'url(img/iso-imgs/'+backgroundImage+')';
        var details = $(this).closest('.iso-group-details').html();
        
        //apply
        $('.display-selected-iso').find('.cover').css('background-image', background);
        $('.display-selected-iso-details').html('');
        $('.display-selected-iso-details').html(details);
        window.location.replace("#iso-details");
    });
});
