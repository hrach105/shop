const burger = document.querySelector('.menu-burger');
const closeMenu = document.querySelector('.close-menu');
const popupMenu = document.querySelector('.popup-menu');
const body = document.querySelector('body.page');
const overlay = document.querySelector('.overlay');

burger.addEventListener('click',()=>{
    popupMenu.classList.add('show');
    body.classList.add('overflow-hidden');
    overlay.classList.add('show');
})
closeMenu.addEventListener('click',()=>{
    popupMenu.classList.remove('show');
    body.classList.remove('overflow-hidden');
    overlay.classList.remove('show');
})
