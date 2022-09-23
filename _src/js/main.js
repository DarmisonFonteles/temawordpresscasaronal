jQuery(function($) {
  $(document).ready(function() {

    $('.owl-carousel').owlCarousel({
      loop: true,
      dots: false,
      margin: 10,
      nav: false,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:1,
              
          },
          1000:{
              items:1,
          }
          
      },
      autoplay: true,
      autoplayTimeout: 1000,
    })

  });
});


 



