
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    // loop:true,
    autoplay:true,
    margin:20,
    nav:true,

    dots: false,
    navElement:'div',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  });
  $(document).ready(function(){
    $('.owl-carousel1').owlCarousel({
    // loop:true,
    autoplay:true,
    nav:true,
    mergeFit: true,
    dots: false,
    navElement:'div',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  });


