let btnToggleMenu = document.getElementById('toggleMenu');
let menu = document.querySelector('.ml-c-header__menu');
let btnCloseMenu = document.getElementById('closeMenu');
let header = document.querySelector('.ml-c-header');
let aboutTitle = $('.ml1');
let whatWeDo = $('.ml2');
let experience = $('.ml3');
let team = $('.ml4');
let contact = $('.ml5');
let ml1 = true;
let ml2 = true;
let ml3 = true;
let ml4 = true;
let ml5 = true;

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

$('.nav-link').on('click', function(e) {
    let elem = $(this).attr('href');
    e.preventDefault();
    $('body,html').animate({
        scrollTop: $(elem).offset().top
    }, "slow");
});

$(window).on('scroll', function() {
    if ($(window).scrollTop() >= (aboutTitle.offset().top - $(window).height() / 1.5) && ml1) {
        aboutTitle.addClass('show');
        ml1 = false;
        animateTitle('.ml1');
    } else if ($(window).scrollTop() >= (whatWeDo.offset().top - $(window).height() / 1.5) && ml2 ) {
        whatWeDo.addClass('show');
        ml2 = false;
        animateTitle('.ml2');
    } else if ($(window).scrollTop() >= (experience.offset().top - $(window).height() / 1.5) && ml3 ) {
        experience.addClass('show');
        ml3 = false;
        animateTitle('.ml3');
    } else if ($(window).scrollTop() >= (team.offset().top - $(window).height() / 1.5) && ml4 ) {
        team.addClass('show');
        ml4 = false;
        animateTitle('.ml4');
    } else if ($(window).scrollTop() >= (team.offset().top - $(window).height() / 2.5) && ml5 ) {
        contact.addClass('show');
        ml5 = false;
        animateTitle('.ml5');
    }   
});

function animateTitle (x) {
    $(x).each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline()
        .add({
            targets: `${x} .letter`,
            scale: [2,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 1950,
            delay: function(el, i) {
            return 70*i;
            }
        });
}

