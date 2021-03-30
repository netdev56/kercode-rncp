// Effet sur le scroll 
window.addEventListener("scroll", function(){
    let header = document.querySelector("header");
    header.classList.toggle('menu-haut-fix', window.scrollY > 0);
});


// Menu responsive 
let menunav = document.querySelector('.menu_nav');
let menubtn = document.querySelector('.menu-btn');
let closebtn = document.querySelector('.close-btn');

menubtn.addEventListener("click", () => {
    menunav.classList.add('active-nav');
});

closebtn.addEventListener("click", () => {
    menunav.classList.remove('active-nav');
});