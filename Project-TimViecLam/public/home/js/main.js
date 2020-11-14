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

    $('.bootstrap-select-city__custom, .select-city, .select-career').selectpicker();
});


const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.box-body');
readMoreBtn.addEventListener('click', (e) => {
    text.classList.toggle('show-more');
    if (readMoreBtn.innerText === 'Rút gọn') {
        readMoreBtn.innerText = 'Xem Thêm';
    } else {
        readMoreBtn.innerText = 'Rút gọn';
    }
})
