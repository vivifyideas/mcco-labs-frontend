let btnToggleMenu = document.getElementById('toggleMenu');
let menu = document.querySelector('.ml-c-header__menu');


btnToggleMenu.addEventListener('click', function () {
    $('body,html').animate({
        scrollTop: $('.ml-c-menu').offset().top
    }, "slow");
    menu.classList.toggle('active');
});

