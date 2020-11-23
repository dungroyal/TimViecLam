$(document).ready(function () {
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
    })

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
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

    $('.bootstrap-select-city__custom, .select-city, .select-career').selectpicker();
    $('[data-toggle="tooltip"]').tooltip();
});