import "./bootstrap";
function userScroll() {
    const navbar = document.querySelector(".my-navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-text");
        } else {
            navbar.classList.remove("bg-text");
            navbar.classList.add("bg-transparent");
        }
    });
}

document.addEventListener("DOMContentLoaded", userScroll);

let swiperCards = new Swiper(".card-content", {
    loop: true,
    spaceBetween: 12,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1400: {
            slidesPerView: 4,
        },
    },
});
