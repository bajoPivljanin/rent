var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        enabled:false,
    },
    autoplay: {
        enabled: true,
        speed: 3000,
    },
    loop: {
        enabled:true,
    }
    });
