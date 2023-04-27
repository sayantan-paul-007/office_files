const swiper = new Swiper('.skillswiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true, 
    slidesPerView:5, 
    spaceBetween: 15,
      // Navigation arrows
    navigation: {
      nextEl: '.right-arrow',
      prevEl: '.left-arrow',
    },  
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      920: {
        slidesPerView: 5,
        spaceBetween: 15
      }
    }
  
    
  });
  const aioswiper = new Swiper('.aioswiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true, 
    slidesPerView:5, 
    spaceBetween: 15,
      // Navigation arrows
    navigation: {
      nextEl: '.right-arrow-aio',
      prevEl: '.left-arrow-aio',
    },  
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      920: {
        slidesPerView: 5,
        spaceBetween: 15
      }
    } 
  });
  let hammenu = document.querySelector('.ham-menu');
  function showMenu(){
   hammenu.classList.add('show');
   hammenu.classList.remove('hide');
  }
  function hideMenu(){
    hammenu.classList.remove('show');
    hammenu.classList.add('hide');
  }