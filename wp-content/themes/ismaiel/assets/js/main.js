// start slider 2
var swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    fade: 'true',
    grabCurser: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        650: {
            slidesPerView: 2,

        },
        1000: {
            slidesPerView: 3,

        }



    }
});
// start side nav 
// $('a').click(function() {
//     $('.sidebar ul .menu-item-6').toggleclass("a");
// });
// Remove the transition class

// console.clear();

// const app = (() => {
//     let body;
//     let menu;
//     let menuItems;

//     const init = () => {
//         body = document.querySelector('body');
//         menu = document.querySelector('.menu-icon');
//         menuItems = document.querySelectorAll('.nav__list-item');

//         applyListeners();
//     }

//     const applyListeners = () => {
//         menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
//     }

//     const toggleClass = (element, stringClass) => {
//         if (element.classList.contains(stringClass))
//             element.classList.remove(stringClass);
//         else
//             element.classList.add(stringClass);
//     }

//     init();
// })();