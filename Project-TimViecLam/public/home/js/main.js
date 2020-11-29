$(document).ready(function () {
    if($.cookie('searchJobView')==null){
        $.cookie('searchJobView', "detail", { expires: 365 });
    }

    $("img.lazy").lazyload({
        effect : "fadeIn"
    });
    
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
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

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $(".expand-toggle_btn").click(function (e) {
        e.preventDefault();
    
        var $this = $(this);
        var expandHeight = $this.prev().find(".inner-bit").height();
    
        if ($this.prev().hasClass("expanded")) {
        $this.prev().removeClass("expanded");
        $this.prev().attr("style", "");
        $this.html("Xem thêm");
        } else {
        $this.prev().addClass("expanded");
        $this.prev().css("max-height", expandHeight+10);
        $this.html("Ẩn bớt");
        }
    });

    $('.post-wrapper').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
      });

    $('[data-toggle="tooltip"]').tooltip();

    $('a.sywh-open-services').click(function () {
        if ($('.sywh-services').hasClass('active')) {
          $('.sywh-services').removeClass('active');
          $('a.sywh-open-services i.fa-times').hide();
          $('a.sywh-open-services i.fa-comments').show();
          $('a.sywh-open-services').removeClass('data-tooltip-hide');
          $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
          $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
          $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
          $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
          $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
        } else {
          $('.sywh-services').addClass('active');
          $('a.sywh-open-services i.fa-comments').hide();
          $('a.sywh-open-services i.fa-times').show();
          $('a.sywh-open-services').addClass('data-tooltip-hide');
          $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
          $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
          $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
          $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
          $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
        }
      });
});
