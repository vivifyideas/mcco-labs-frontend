'use strict';

var btnToggleMenu = document.getElementById('toggleMenu');
var menu = document.querySelector('.ml-c-header__menu');
var btnCloseMenu = document.getElementById('closeMenu');
var header = document.querySelector('.ml-c-header');
var aboutTitle = $('.ml1');
var whatWeDo = $('.ml2');
var experience = $('.ml3');
var team = $('.ml4');
var contact = $('.ml5');
var ml1 = true;
var ml2 = true;
var ml3 = true;
var ml4 = true;
var ml5 = true;

btnToggleMenu.addEventListener('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, "slow");
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

$(window).on('scroll', function () {
    if ($(window).scrollTop() >= aboutTitle.offset().top - $(window).height() / 1.5 && ml1) {
        aboutTitle.addClass('show');
        ml1 = false;
        animateTitle('.ml1');
    } else if ($(window).scrollTop() >= whatWeDo.offset().top - $(window).height() / 1.5 && ml2) {
        whatWeDo.addClass('show');
        ml2 = false;
        animateTitle('.ml2');
    } else if ($(window).scrollTop() >= experience.offset().top - $(window).height() / 1.5 && ml3) {
        experience.addClass('show');
        ml3 = false;
        animateTitle('.ml3');
    } else if ($(window).scrollTop() >= team.offset().top - $(window).height() / 1.5 && ml4) {
        team.addClass('show');
        ml4 = false;
        animateTitle('.ml4');
    } else if ($(window).scrollTop() >= team.offset().top - $(window).height() / 2.5 && ml5) {
        contact.addClass('show');
        ml5 = false;
        animateTitle('.ml5');
    }
});

function animateTitle(x) {
    $(x).each(function () {
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });
    anime.timeline().add({
        targets: x + ' .letter',
        scale: [2, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 1950,
        delay: function delay(el, i) {
            return 70 * i;
        }
    });
}