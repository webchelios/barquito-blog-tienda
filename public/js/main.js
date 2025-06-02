const menuBtn = document.querySelector('.menu-toggle');
const menuList = document.querySelector('.navbar-list')
menuBtn.addEventListener('click', (e) => {
    menuList.classList.toggle('navbar-list-active')
})