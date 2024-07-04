// HOme Slider
$(document).ready(function () {
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        infinite:true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

// Appointment tabs Slider
// $(document).ready(function () {
//     $('.appointment-slider ul').slick({
//         infinite: true,
//         slidesToShow: 7,  // Number of items to show
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 1500,
//         arrows: false,
//         dots: false,
//         pauseOnHover: false,
//         responsive: [
//             {
//                 breakpoint: 1380, // Extra-large width breakpoint
//                 settings: {
//                     slidesToShow: 6,
//                     slidesToScroll: 0
//                 }
//             },
//             {
//                 breakpoint: 1200,
//                 settings: {
//                     slidesToShow: 4,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 1020,
//                 settings: {
//                     slidesToShow: 3,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 800,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 400,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             }
//         ]
//     });
// });



function toggleTab(e) {
    var hrefVal = $(e).attr('href');
    $('.nav-tabs li').removeClass('active');
    $('.nav-tabs li[data-active="' + hrefVal + '"]').addClass('active');
}



document.addEventListener('DOMContentLoaded', function () {
    window.scrollTo(0, 0);
    gsap.timeline()
        .fromTo(".load_animation", {
            duration: 1.5,
            clipPath: 'inset(84% 43% 0 42% round 120px)',
            ease: "power2.inOut"
        },
            {
                duration: 1.5,
                clipPath: 'inset(48% 43% 0 42% round 120px)',
                ease: "power2.inOut"
            })
        .to(".load_animation", {
            duration: 1.5,
            delay: 0.4,
            clipPath: 'inset(0% 0% 0% 0% round 0px)',
            ease: "power2.inOut"
        });
});

// Register the ScrollTrigger plugin with GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.animation').forEach(function (element) {
    gsap.fromTo(element,
        {
            opacity: 0,
            y: 50 // Start 50px below the initial position
        },
        {
            duration: 1,
            opacity: 1,
            y: 0, // End at the initial position
            ease: "power2.inOut",
            scrollTrigger: {
                trigger: element,
                start: "top 80%", // Trigger animation when the top of the element hits 80% of the viewport height
                toggleActions: "play none none none", // Play animation on scroll, no repeat
            }
        }
    );
}); 

jQuery(document).ready(function ($) {

    $(".regular").slick({
           dots: true,
     //       infinite: true,
     //       slidesToShow: 1,
     //       slidesToScroll: 1,
           // autoplay: true,
        //    arrows: true,
     //       mobileFirst: true,
     //       easing: 'easeOutElastic',
     //       speed: 800,
           autoplay: true,
           autoplaySpeed:9000,
           speed:700,
           mobileFirst: true,
           slidesToShow:1,
           slidesToScroll:1,
           pauseOnHover:false,
           respondTo:'min',
           cssEase:'linear',
        //    prevArrow: '<span class="icon-angle-left"><img src="../images/product_slider_left.png" alt=""></span>',
        //    nextArrow: '<span class="icon-angle-right"> <img src="../images/product_slider_right.png" alt=""></span>',
         });
   
   $('.slider-for').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: true,
           draggable: false,
           fade: true,
           asNavFor: '.slider-nav',
           prevArrow: '<span class="icon-angle-left"><img src="../images/product_slider_left.png" alt=""></span>',
           nextArrow: '<span class="icon-angle-right"> <img src="../images/product_slider_right.png" alt=""></span>',
       });
   $('.slider-nav').slick({
           slidesToShow: 3,
           slidesToScroll: 1,
           asNavFor: '.slider-for',
           dots: false,
           arrows: false,
           centerMode: true,
           focusOnSelect: true,
           centerPadding: '80px',
        //    prevArrow: '<span class="icon-angle-left"><img src="../images/product_slider_left.png" alt=""></span>',
        //    nextArrow: '<span class="icon-angle-right"> <img src="../images/product_slider_right.png" alt=""></span>',
           responsive: [
               {
                 breakpoint: 450,
                 settings: {
                   dots: false,
                   slidesToShow: 3,  
                   centerPadding: '0px',
                   }
               },
               {
                 breakpoint: 420,
                 settings: {
                   autoplay: true,
                   dots: false,
                   slidesToShow: 1,
                   centerMode: false,
                   }
               }
           ]
       });
    });	