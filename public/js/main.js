// Menú responsive
const menuBtn = document.querySelector('.menu-toggle');
const menuList = document.querySelector('.navbar-list')
menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('menu-toggle-active')
    menuList.classList.toggle('navbar-list-active')
})

const path = window.location.pathname
const currentPath = path.split('/').at(-1)
const menuItems = document.querySelectorAll('.navbar-item')
    switch (currentPath) {
        case '':
            menuItems[0].classList.add('navbar-item-active')
            break;
        case 'entradas':
            menuItems[1].classList.add('navbar-item-active')
            break;
        case 'quienes-somos':
            menuItems[2].classList.add('navbar-item-active')
            break;
        default:
            break;
    }

        