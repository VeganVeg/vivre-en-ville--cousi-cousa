const burger = document.querySelector('.navbar-toggler-icon')

burger.addEventListener('mouseenter', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1.1, duration: 0.3 })
})

burger.addEventListener('mouseleave', () => {
    gsap.to('.navbar-toggler-icon', { scale: 1, duration: 0.3 })
})