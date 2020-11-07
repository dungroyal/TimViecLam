
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

const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.box-body');
readMoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(readMoreBtn.innerText === 'Rút gọn'){
        readMoreBtn.innerText = 'Xem Thêm';
    }else{
        readMoreBtn.innerText = 'Rút gọn';
    }
})




