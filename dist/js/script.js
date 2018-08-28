'use strict';

var menuBar = $('.ml-c-menu');
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

var jump = function jump(e) {
    if (e) {
        e.preventDefault();
        var target = $(this).attr("href");
    } else {
        var target = location.hash;
    }

    $('html,body').animate({
        scrollTop: ($(target).offset().top - 82).toFixed(0)
    }, 2000);
};

$('html, body').hide();

$(document).ready(function () {
    $('.nav-link').bind("click", jump);
    $('.nav-link').on('click', function () {
        menu.classList.remove('active');
    });
    if (location.hash) {
        setTimeout(function () {
            $('html, body').scrollTop(0).show();
            jump();
        }, 500);
    } else {
        $('html, body').show();
    }
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