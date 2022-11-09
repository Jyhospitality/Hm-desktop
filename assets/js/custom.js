function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

if ($(window).width() <= 767) {

    $("#challenges_sliders").addClass("challenges_slider");
    $("#challenges_sliderss").addClass("challenges_slider");

}
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    /*
    $(".youtube_iframe").click(function(){
    	
    $(".video_box_top").slideToggle('slide');
      
    });

    $(".youtube_iframe").click(function(){	
    $(".video_box_top").addClass('video_box_slide');  
    $(".youtube_iframe_remove").show();  


    });

    $(".youtube_iframe_remove").click(function(){	
    $(".video_box_top").removeClass('video_box_slide'); 
    $(".youtube_iframe_remove").hide();   
    });


    function openNav() {
      document.getElementById("mySidenav_youtube").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav_youtube").style.width = "0";
    }

    */




    $('.challenges_slider').owlCarousel({
        loop: false,
        margin: 0,
        item: 2,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.dine_slider').owlCarousel({
        loop: true,
        margin: 0,
        item: 2,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $('.services_slider').owlCarousel({
        loop: true,
        margin: 0,
        item: 3,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });

    $('.case_studies_slider').owlCarousel({
        loop: true,
        margin: 0,
        item: 1,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    });
    $('.testimonials_slider').owlCarousel({
        loop: true,
        margin: 20,
        item: 1,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });

    $(function() {
        $(".datepicker_book").datepicker({
            startDate: '-0m'
        });

    });



    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#dp1').datepicker({
        format: "yyyy-mm-dd",
        beforeShowDay: function(date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true

    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);

        }
        $('#dp2')[0].focus();
    });


    var checkout = $('#dp2').datepicker({
        format: "yyyy-mm-dd",
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
                return date.valueOf() >= new Date().valueOf();
            } else {
                return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true

    }).on('changeDate', function(ev) {});


});
/* 

 var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});

var filterFns = {
 
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');

  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
 */
jQuery(function($) {
    var path = window.location.href;
    // because the 'href' property of the DOM element is the absolute path
    $('.property_menu a').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});

$(".flip-book").click(function() {
    $(".home_booking_engine").appendTo(".mobiles-booking");

    //$("#BE_Widget").appendTo(".mobiles-booking");

    $(".home_booking_engine").slideToggle();
    //$("#BE_Widget").slideToggle();
    $(".flip-book").hide();
    $(".book-close").show();
    //$("#BE_Widget").show();
});
$(".book-close").click(function() {
    $(".flip-book").show();
    $(".book-close").hide();
    //	$("#BE_Widget").hide();
    $(".home_booking_engine").slideToggle();
    //$("#BE_Widget").slideToggle();
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $("header").addClass("header_fixed");

    } else {
        $("header").removeClass("header_fixed");

    }
});