let menu = document.querySelector(".menu");
let hamburgerButton = document.querySelector(".hamburger");
let menuItem = document.querySelectorAll('.menu-item')

hamburgerButton.addEventListener('click', () => {
    menu.classList.toggle('active');
    hamburgerButton.classList.toggle("hamburger-active");
})

menuItem.forEach(item => {
    item.addEventListener( 'click', () =>{
        hamburgerButton.classList.toggle('hamburger-active');
        menu.classList.toggle('active');
    })
})