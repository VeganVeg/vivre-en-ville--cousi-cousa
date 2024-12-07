const burger = document.querySelector('.navbar-toggler-icon');

burger.addEventListener('mouseenter', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1.1, duration: 0.3 })
})

burger.addEventListener('mouseleave', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1, duration: 0.3 })
})

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

const banniere = document.querySelector('.grid__banniere');
const btn = document.querySelector('.btn__compris');

function updateButton() {
    const isClicked = localStorage.getItem('buttonState') === 'true';

    if (isClicked) {
        banniere.classList.add('grid__banniere--none');

    }
}


btn.addEventListener('click', () => {
    localStorage.setItem('buttonState', 'true')

    updateButton();
});

gsap.fromTo('.grid__banniere', { bottom: '-50%', y: '100%' }, { bottom: 0, y: '0' })


window.onload = updateButton;

const don = document.querySelector('.btn__don')

don.addEventListener('mouseenter', () => {
    gsap.timeline()
        .to('.heart', { scale: 1.2, duration: 0.3, ease: 'back.in' })
        .to('.heart', { scale: 1, duration: 0.3 })
})