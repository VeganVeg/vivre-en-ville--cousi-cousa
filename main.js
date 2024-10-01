const burger = document.querySelector('.navbar-toggler-icon')

burger.addEventListener('mouseenter', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1.1, duration: 0.3 })
})

burger.addEventListener('mouseleave', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1, duration: 0.3 })
})

const banniere = document.querySelector('.grid__banniere');
const btn = document.querySelector('.btn__compris');

btn.addEventListener('click', () => {
    banniere.classList.add('grid__banniere--none')
})