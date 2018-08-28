let header = document.querySelector('html');
header.addEventListener('click', function (e) {
    if (e.target.className !== 'ml-c-header__menu active' && e.target.className !== 'fas fa-bars' && e.target.className !== 'ml-c-header__menu__content') {
        menu.classList.remove('active');
    }
});