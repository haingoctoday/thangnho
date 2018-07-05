jQuery(document).ready(function($){
    
    // jQuery sticky Menu
    
	$(".mainmenu-area").sticky({topSpacing:0});
    
    
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        responsiveClass:true,
        // autoplay:true,
        dots: true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1200:{
                items:6,
            }
        }
    });  
    $('.video-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:4,
            },
            1200:{
                items:4,
            }
        }
    });
    $('.related-products-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });  
    
    $('.brand-list').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });    
    
    
    // Bootstrap Mobile Menu fix
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });    
    
    // jQuery Scroll effect
    $('.navbar-nav li a, .scroll-to-up').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = $('.header-area').outerHeight();
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });    
    
    // Bootstrap ScrollPSY
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    })      
});

$(".div_show_div").click(function(e){

        $(".home-top-on").css('display','block');
   e.stopPropagation();
    });    
$("body").click
(
  function(e)
  {
   if(e.target.className !== "home-top-on")
    {
      $(".home-top-on").css('display','none');
    }
     // e.stopPropagation();
  }

);
// (function(){
 $("#bunmm").hover(function(){
  $("#cart_v").show();
},function(e){
  // alert(e.pageX)
  
  //$("#cart_v").hide();
  $("#cart_v").fadeOut( "slow");
})
//  
//   $("#cart").mouseenter( function() {
//     console.log("12312");
//     $(".shopping-cart").css('display','block');
//   });
// })();
//     $("#cart").hover(function(e) {
//   $(".shopping-cart").stop(true, true).delay(10).fadeIn(10);
// e.stopPropagation();
// }, function() {
//  $(".shopping-cart").stop(true, true).delay(10).fadeOut(500);
// });
 $("#cart").click( function() {
    $(".shopping-cart").fadeToggle( "fast");
  });
$(window).scroll(function () {

    var x = $(this).scrollTop();

    

    // Show hide mtop menu  
    if ( x > 100 ) {
    $( ".shopping-item" ).addClass( 'shopping-item-on' );
   
    }else{
     $( ".shopping-item" ).removeClass( 'shopping-item-on' );   
    }

});

    $(".incr-btn").on("click", function (e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });

    $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeIn(10);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeOut(500);
});
function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
// (function runForever(){
//   // Do something here
//   setTimeout(myFunction, 5000)
// })()
window.setInterval(function(){
myFunction();
}, 9000);