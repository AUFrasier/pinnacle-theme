//globals
const flipBox = document.querySelectorAll(".flip-box");

flipBox.forEach(item => {
    item.addEventListener("mouseover", function() {
        item.classList.add('flip');
    })
    item.addEventListener("mouseout", function() {
        item.classList.remove('flip');
    })
})

var mySwiper = new Swiper ('.swiper-container', {
	loop: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	a11y: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })