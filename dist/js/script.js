'use strict';

var btnToggleMenu = document.getElementById('toggleMenu');
var menu = document.querySelector('.ml-c-header__menu');
var btnCloseMenu = document.getElementById('closeMenu');
var header = document.querySelector('.ml-c-header');

btnToggleMenu.addEventListener('click', function () {
    menu.classList.toggle('active');
});

btnCloseMenu.addEventListener('click', function () {
    menu.classList.remove('active');
});

header.addEventListener('click', function (e) {
    if (e.target.className !== 'ml-c-header__menu active') {
        menu.classList.remove('active');
    }
});

$('.nav-link').on('click', function (e) {
    var elem = $(this).attr('href');
    e.preventDefault();
    $('body,html').animate({
        scrollTop: $(elem).offset().top
    }, "slow");
});