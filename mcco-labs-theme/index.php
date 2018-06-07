<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mcco Labs</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class='ml-c-header' style="background-image: url(<?php echo get_theme_file_uri('/images/background.jpg') ?>);">
        <div class="wrapper">
            <div class="ml-c-header__content">
                <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="Mcco Labs Logo">
                <p class="ml-c-header__content__title">
                    We help evaluate, design and structure business opportunities, 
                    investments and value creation plans across media, technology and consumer marketing businesses
                </p>
            </div>
        </div>
        <div class="ml-c-header__menu">
            <div class="ml-c-header__menu__content">
                <div class="ml-c-header__menu__content-trigger" id="closeMenu">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="ml-c-header__menu__content__nav">
                    <a class="nav-link" href="#about">ABOUT US</a>
                    <a class="nav-link" href="#work">WHAT WE DO</a>
                    <a class="nav-link" href="#experience">OUR EXPERIENCE</a>
                    <a class="nav-link" href="#team">THE TEAM</a>
                    <a class="nav-link" href="#contact">CONTACT US</a>
                </nav>
            </div>
        </div>
    </header> 

    <section class="ml-c-menu">
        <img src="<?php echo get_theme_file_uri('/images/logo-white.png') ?>" class="ml-c-menu__logo" alt="Mcco Labs Logo">
        <div class="ml-c-menu__menu-trigger" id="toggleMenu">
            <i class="fas fa-bars"></i>
        </div>
    </section>

    <section class="ml-c-about-us" style="background-image: url(<?php echo get_theme_file_uri('/images/o.png') ?>);" id="about">
        <div class="wrapper">
            <h2 class="ml-c-about-us__title ml1">ABOUT US</h2>
            <div class="ml-c-about-us__content">
                <div class="ml-c-about-us__content__descripton">
                    <p>We are a boutique strategic advisory firm serving partners at the intersection of media, marketing, entertainment, technology and finance.</p>
                    <p>With nearly 25 years of experience in management consulting, investing and corporate devepment we help our clients to develop those critical insights that drive their investment decisions and go forward strategies.</p>
                    <p>Our client roster runs the gamut of Fortune 100 companies, emerging media and technologu companies to private equity, hedge funds and venture capital</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ml-c-work" id="work">
        <div class="wrapper">
            <h2 class="ml-c-work__title ml2">WHAT WE DO</h2>
            <div class="ml-c-work__content">
                <div class="ml-c-work__content__descripton">
                    <p>MCCO Labs works with forward looking organizations and investment funds dissatisfied with the status quo and actively seeking new sources of value and opportunity.</p>
                    <p>We partner with global leaders, entrepreneurs an investors to set new strategic visions, evaluate emerging opportunities for both investments and M&A, as well as designing the strategic architectures and business plans to unlock value and returns associated with thier investment and growth initiatives.</p>
                </div>
            </div>
            <div class="ml-c-work__examples">
                <div class="ml-c-work__examples__example">
                    <img src="<?php echo get_theme_file_uri('/images/one.png') ?>" alt="">
                    <p>Partner work global leaders to set new visions</p>
                </div>
                <div class="ml-c-work__examples__example">
                    <img src="<?php echo get_theme_file_uri('/images/two.png') ?>" alt="">
                    <p>Evaluate emerging opportunities</p>
                </div>
                <div class="ml-c-work__examples__example">
                    <img src="<?php echo get_theme_file_uri('/images/three.png') ?>" alt="">
                    <p>Design the strategic architecture</p>
                </div>
                <div class="ml-c-work__examples__example">
                    <img src="<?php echo get_theme_file_uri('/images/four.png') ?>" alt="">
                    <p>Unlock value & return associated with growth</p>
                </div>
            </div>
            <a href="#" class="ml-c-work-button">
                GET IN TOUCH
            </a>
        </div>
    </section>
    
    <section class="ml-c-experience" id="experience" style="background-image: url(<?php echo get_theme_file_uri('/images/mc.png') ?>);">
        <div class="wrapper">
            <h2 class="ml-c-experience__title ml3">OUR EXPERIENCE</h2>
            <div class="ml-c-experience__content">
                <div class="ml-c-experience__content__descripton">
                <p>We bring to every deal and strategic assignment a deep and broad experience in corporate/business development, M&A strategy, commercial valuation, and due diligence at the highest levels and across all sizes and scope of companies and markets within media, technology and marketing.</p>
                <p>Since 2012 we have been partnering with senior leaders in the media, technologu, marketing and investment communities delivering X+ strategic reviews and plans to invest, launch and grow new businesses and marketing platforms.</p>
                </div>
            </div>
            <h4 class="ml-c-experience__subtitle">OUR CLIENTS</h4>
            <div class="ml-c-experience__clients">
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/bain&co.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/a&e.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/intel.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/walmart.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/oz.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/verizon.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/americanexpress.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/universal.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/unviersal1.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/participantmedia.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/ddcd.png') ?>" alt="">
                </div>
                <div class="ml-c-experience__clients__client">
                    <img src="<?php echo get_theme_file_uri('/images/macandrews&forbes.png') ?>" alt="">
                </div>
            </div>
            <a href="#" class="ml-c-experience-button">
                CASE STUDIES
            </a>
        </div>
    </section>

    <section class="ml-c-team" id="team">
        <div class="wrapper">
            <h2 class="ml-c-team__title ml4">THE TEAM</h2>
            <div class="ml-c-team__content">
                <div class="ml-c-team__content__description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, repellat nobis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, repellat nobis! So Soluta provident fugit nemo hic, nostrum illo eveniet incidunt.</p>
                    <p>Lorem,  sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, repellat nobis! So Maxime, repellat nobis! So Maxime, repellat nobis! So reprehenderit rem fugiat dicta rerum quod consectetur assumenda nostrum. Enim, voluptatem.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nam atque! Veniam magni dolor labore temporibus hic praesentium minus. Consequatur facilis ad, esse, optio ipsum repellendus suscipit asperiores, praesentium sed ratione similique dolore soluta enim vero quisquam eius ipsa quia quaerat error vel beatae doloremque? Minus, veniam! Animi,  ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nam atque! Veniam magni dolor labore temporibus hic praesentium minus. Consequatur facilis ad, esse, optio ipsum repellendus suscipit asperiores, praesentium sed ratione similique dolore soluta enim vero quisquam eius ipsa quia quaerat error vel beatae doloremque?  ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nam atque! Veniam magni dolor labore temporibus hic praesentium minus. Consequatur facilis ad, esse, optio ipsum repellendus suscipit asperiores, praesentium sed ratione similique dolore soluta enim vero quisquam eius ipsa quia quaerat error vel beatae doloremque? Minus, veniam! Anim Minus, veniam! Anim accusantium atque.</p>
                </div>
                <div class="ml-c-team__content__pic">
                    <div class="ml-c-team__content__pic__box">Black and White Pic of Mauro Cellore</div>        
                </div>
            </div>
        </div>
    </section>

    <section class="ml-c-contact" id="contact" style="background-image: url(<?php echo get_theme_file_uri('/images/background.jpg') ?>);">
        <div class="wrapper">
            <h2 class="ml-c-contact__title ml5">CONTACT</h2>
            <div class="ml-c-contact__content">
                <div>
                    <div class="ml-c-contact__content__top">
                        <p>Mauro Cellore</p>
                        <p>Managing Partner</p>
                    </div>
                    <div class="ml-c-contact__content__bottom">
                        <p>Mauro@mccolabs.com</p>
                        <p>310.701.2117</p>
                    </div>
                </div>
                <div>
                    <div class="ml-c-contact__content__top">
                        <p>Media Inquiries</p>
                        <p>Media@mcclabs.com</p>
                    </div>
                    <div class="ml-c-contact__content__bottom">
                        <p>Careers</p>
                        <p>work@mccolabs.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>
</body>
</html>