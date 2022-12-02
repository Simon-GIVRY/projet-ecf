let elBurgerMenu = document.querySelector('.burgerMenu')
let openMenu = document.querySelector('.menu-burger-menu-container')

elBurgerMenu.addEventListener('click', () =>{
    console.log("aa");
    openMenu.classList.toggle("hidden");
})