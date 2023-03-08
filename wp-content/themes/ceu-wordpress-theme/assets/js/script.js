// export const setup = {
//   init() {

//     // Header
//     $('.hdr-menuIconCon').on('click', function (){
//       if (!($('.hdr-menuCon').hasClass("active"))){
//         $('.hdr-menuCon').addClass("active");
//         $('body').css('overflow-y', 'hidden');
//       }
//     });

//     $('.hdr-menuClose').on('click', function (){
//       if ($('.hdr-menuCon').hasClass("active")){
//         $('.hdr-menuCon').removeClass("active");
//         $('body').css('overflow-y', 'unset');
//       }
//     });

//     $('span.hdr-menuLink').on('click', function (){
//       if ($(this).parent().hasClass("active")){
//         $(this).parent().removeClass("actsudo update-alternatives --config phpive");
//         $(this).siblings('.hdr-secondary').slideUp();
//       } else {
//         $(this).parent().addClass("active");
//         $(this).siblings('.hdr-secondary').slideDown();
//       }
//     });

//     $('.about--mobMenuHolder h3').on('click', function (){
//       if (!($(this).parent().hasClass("active"))){
//         $(this).parent().addClass("active");
//         $(this).parent().siblings('ul').addClass('active');
//       }
//     });

//     $(document).mouseup(function(e) {
//       if ($('.about--menuHolder ul.active').hasClass("active")){
//         var container = $(".about--menuHolder ul");
//         if (!container.is(e.target) && container.has(e.target).length === 0) {
//           container.siblings('.about--mobMenuHolder').removeClass("active");
//           container.removeClass('active');
//         }
//       }
//     });

//     $('.career--mobMenuHolder h3').on('click', function (){
//       if (!($(this).parent().hasClass("active"))){
//         $(this).parent().addClass("active");
//         $('.careerFilter__Holder').addClass('active');
//       }
//     });

//     $('.career--closeIcon').on('click', function (){
//       if ($(this).parent().hasClass("active")){
//         $('.career--mobMenuHolder').removeClass("active");
//         $(this).parent().removeClass('active');
//       }
//     });


//     // CEU SHOPPE

//     // Menu
//     $('.shop--mobMenuHolder.mobile h3').on('click', function (){
//       if (!($(this).parent().hasClass("active"))){
//         $(this).parent().addClass("active");
//         $('.shopFilter__Holder').addClass('active');
//       }
//     });

//     $('.shop--closeIcon').on('click', function (){
//       if ($(this).parent().hasClass("active")){
//         $('.shop--mobMenuHolder').removeClass("active");
//         $(this).parent().removeClass('active');
//       }
//     });

//     // Filter Price
//     // var maxPrice = $("#max_price");
//     // var minPrice = $("#min_price");

//     // $( "#slider-range" ).slider({
//     //   range: true,
//     //   min: $( "#amount" ).data('min'),
//     //   max: eval(`${$( "#amount" ).data('max')} + 100`),
//     //   values: [ minPrice.val().replace(/\D/g,''), eval(`${maxPrice.val().replace(/\D/g,'')} + 100`) ],
//     //   slide: function( event, ui ) {
//     //     $( "#amount" ).val("P" + ui.values[0] + " - P" + ui.values[1]);
//     //     minPrice.val('P ' + ui.values[0]);
//     //     maxPrice.val('P ' + ui.values[1]);
//     //   }
//     // });
//     // $( "#amount" ).val( "P " + $( "#slider-range" ).slider( "values", 0 ) +
//     //   " - P " + $( "#slider-range" ).slider( "values", 1 ) );

//     // var min = $('#min_price').val(),
//     //   max = $('#max_price').val();

//     // $('#min_price').val('P ' + min.replace(/\D/g,''));
//     // $('#max_price').val('P ' + max.replace(/\D/g,''));

//     // // Shop
//     // var numDetails = 0;
//     // $('.ui-slider-handle').each( function() {
//     //   numDetails++;
//     //   $(this).attr( 'data-price-id', numDetails );
//     // });

//     // $('.ui-slider-handle[data-price-id="1"]').append($('#min_price'));
//     // $('.ui-slider-handle[data-price-id="2"]').append($('#max_price'));

//     $(document).ready(function() {

//       var max_price = $("#max_price");
//       var min_price = $("#min_price");

//       $( "#slider-range" ).slider({
//         range: true,
//         min: $( "#amount" ).data('min'),
//         max: eval(`${$( "#amount" ).data('max')}`),
//         values: [ min_price.val().replace(/\D/g,''), eval(`${max_price.val().replace(/\D/g,'')}`)],
//         slide: function( event, ui ) {
//           $( "#amount" ).val("P" + ui.values[0] + " - P" + ui.values[1]);
//           min_price.val(ui.values[0]);
//           max_price.val(ui.values[1]);
//         }
//       });
//       $( "#amount" ).val( "P " + $( "#slider-range" ).slider( "values", 0 ) +
//         " - P " + $( "#slider-range" ).slider( "values", 1 ) );

//       var min = $('#min_price').val(),
//         max = $('#max_price').val();

//       $('#min_price').val(min.replace(/\D/g,''));
//       $('#max_price').val(max.replace(/\D/g,''));

//       // Shop
//       var numDetails = 0;
//       $('.ui-slider-handle').each( function() {
//         numDetails++;
//         $(this).attr( 'data-price-id', numDetails )
//       });

//       $('.ui-slider-handle[data-price-id="1"]').append($('#min_price'))
//       $('.ui-slider-handle[data-price-id="2"]').append($('#max_price'))

//     });

//     $('.date').flatpickr({ inline: true });

//     // About
//     $('.universitySlider__Holder').slick({
//       infinite: true,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       arrows: false,
//       dots: true
//     });


//     // Init ScrollMagic
//     var controller = new ScrollMagic.Controller();

//     /** 
//      * GENERAL : ANIMATIONS
//      */

//     $('.slideUp').each(function() {
//         var tl = new TimelineMax()
//         .fromTo(this, .60,
//             { y: "30px", opacity: 0, ease:Power0.easeIn },
//             { y: "0px", opacity: 1, ease:Power0.easeIn })
    
//         var fadeScene = new ScrollMagic.Scene({
//             triggerElement: this,
//             triggerHook: .5,
//             reverse:false,
//             })
//             .setTween(tl)
//             .addTo(controller);
//     });

//     $('.slideUp--delay1').each(function() {
//         var tl = new TimelineMax()
//         .fromTo(this, 1,
//             { y: "30px", opacity: 0, ease:Power0.easeIn },
//             { y: "0px", opacity: 1, ease:Power0.easeIn })
//         .delay(.1)
//         var fadeScene = new ScrollMagic.Scene({
//             triggerElement: this,
//             triggerHook: .4,
//             reverse:false,
//             })
//             .setTween(tl)
//             .addTo(controller);
//     });

//     $('.slideLeft').each(function() {
//         var tl = new TimelineMax()
//         .fromTo(this, 0.80,
//             { x: "60px", opacity: 0, ease:Power0.easeIn },
//             { x: "0px", opacity: 1, ease:Power0.easeIn })

//         var fadeScene = new ScrollMagic.Scene({
//             triggerElement: this,
//             triggerHook: .8,
//             reverse:false,
//             })
//             .setTween(tl)
//             .addTo(controller);
//     });

//     $('.slideRight').each(function() {
//         var tl = new TimelineMax()
//         .fromTo(this, 0.80,
//             { x: "-60px", opacity: 0, ease:Power0.easeIn },
//             { x: "0px", opacity: 1, ease:Power0.easeIn })

//         var fadeScene = new ScrollMagic.Scene({
//             triggerElement: this,
//             triggerHook: .8,
//             reverse:false,
//             })
//             .setTween(tl)
//             .addTo(controller);
//     });

//     $('.awards__Con').each(function() {
//        var tl = new TimelineMax({repeat:0, repeatDelay:0.5,});
//        tl.staggerFrom(".award--holder", 1, {opacity:0}, 0.5,)
//        .staggerTo(".award--holder", 1, {opacity:1}, 0.5,)

//        var fadeScene = new ScrollMagic.Scene({
//            triggerElement: this,
//            triggerHook: .8,
//            reverse:false,
//        })
//        .setTween(tl)
//        .addTo(controller);
//       });

//     $('.hm-frm').each(function() {
//        var tl = new TimelineMax({repeat:0, repeatDelay:0.5,});
//        tl.staggerFrom(".floating--link", 1, {opacity:0}, 0.5,)
//        .staggerTo(".floating--link", 1, {opacity:1}, 0.5,)

//        var fadeScene = new ScrollMagic.Scene({
//            triggerElement: this,
//            triggerHook: .8,
//            reverse:false,
//        })
//        .setTween(tl)
//        .addTo(controller);
//       });

//     // History Page
//     $('.historyImg__Holder').each(function() {
//        var tl = new TimelineMax({repeat:0, repeatDelay:0.5,});
//        tl.staggerFrom(".history--img", 1, {opacity:0}, 0.5,)
//        .staggerTo(".history--img", 1, {opacity:1}, 0.5,)

//        var fadeScene = new ScrollMagic.Scene({
//            triggerElement: this,
//            triggerHook: .5,
//            reverse:false,
//        })
//        .setTween(tl)
//        .addTo(controller);
//       });

//     // Admissions
//     $('.admissions__Con').each(function() {
//        var tl = new TimelineMax({repeat:0, repeatDelay:0.5,});
//        tl.staggerFrom(".admissionCard__Holder", 1, {opacity:0}, 0.5,)
//        .staggerTo(".admissionCard__Holder", 1, {opacity:1}, 0.5,)

//        var fadeScene = new ScrollMagic.Scene({
//            triggerElement: this,
//            triggerHook: .5,
//            reverse:false,
//        })
//        .setTween(tl)
//        .addTo(controller);
//       });

//   }
// };

$(document).ready(function () {
  console.log("hello world")
  const home = {
    init() {
      $('.hm-frm3Slider__Holder').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      });
    },
  };
  home.init();
});


