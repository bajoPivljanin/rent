var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        enabled:false,
    },
    autoplay: {
        enabled: false,
        speed: 3000,
    },
    loop: {
        enabled:true,
    },
});

if (window.innerWidth <= 650)
    {
      var sswiper = new Swiper(".mySwiper", {
          loop:true,
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
        });
    }

let menuopen = document.querySelector("nav .left-nav #menuopen").addEventListener("click", ()=>{
    let right=document.querySelector("nav .right-nav");
    right.style.display="block";
    let close=document.querySelector("nav .left-nav #menuclose");
    close.style.display="block";
    let menuopen = document.querySelector("nav .left-nav #menuopen");
    menuopen.style.display="none";
});

let close=document.querySelector("nav .left-nav #menuclose").addEventListener("click", ()=>{
    let right=document.querySelector("nav .right-nav");
    right.style.display="none";
    let close=document.querySelector("nav .left-nav #menuclose");
    close.style.display="none";
    let menuopen = document.querySelector("nav .left-nav #menuopen");
    menuopen.style.display="block";
});
