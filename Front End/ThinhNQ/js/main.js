  $(document).ready(function () {

      $('.owl-carousel').owlCarousel({
          loop: true,
          autoplay: false,
          margin: 20,
          nav: true,
          dots: false,
          navElement: 'div',
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              },
              1000: {
                  items: 4
              }
          }
      });
    //   page wrapper
      $('.post-wrapper').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
      });

      // back to top
      $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 400);
          return false;
      });
  });
  const readMoreBtn = document.querySelector('.read-more-btn');
  const text = document.querySelector('.box-body');
  readMoreBtn.addEventListener('click', (e) => {
      text.classList.toggle('show-more');
  })


