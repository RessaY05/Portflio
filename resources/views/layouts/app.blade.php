<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Portfolio| Home</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }} "/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark.css') }} "/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} "/>

<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->

</head>
<body>

<div id="preloader">
    <div class="loader_line"></div>
    </div>


    <div class="iknow_tm_all_wrap" data-magic-cursor="show">

        <div class="iknow_tm_modalbox">
            <div class="box_inner">
                <div class="close">
                    <a href="#"><img class="svg" src=" {{ asset('assets/img/svg/cancel.svg') }}" alt="" /></a>
                </div>
                <div class="description_wrap"></div>
            </div>
        </div>


        <div class="iknow_tm_topbar" data-position="absolute">
            <div class="container">
                <div class="topbar_inner">
                    <div class="logo">
                        <a href="#"><img src=" {{ asset('assets/img/logo/YDL.png') }}" alt="" /></a>
                    </div>
                    <div class="right">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="https://github.com/RessaY05"><img class="svg" src=" {{ asset('assets/img/svg/social/GitHub-Logo-1825704567.png') }}" alt="" /></a>
                                </li>
                                <li><a href="https://twitter.com/THAbigRessaY"><img class="svg" src=" {{ asset('assets/img/svg/social/twitter.svg') }}"
                                            alt="" /></a></li>
                                <li><a href="https://www.instagram.com/yasserthegoat/?hl=fr"><img class="svg" src=" {{ asset('assets/img/svg/social/instagram.svg') }}"
                                            alt="" /></a></li>
                            </ul>
                        </div>
                        {{-- <div class="iknow_tm_button">
                            <a href="{{ asset('assets/img/cv/1.jpg') }}" download>Download CV</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="iknow_tm_hero">
            <div class="background_shape"></div>
            <div class="hero_content">
                <div class="container">
                    <div class="content_inner">
                        <div class="main_info">
                            <div class="left">
                                <span class="subtitle">I'm</span>
                                <h3 class="name">Yassir Daief</h3>
                                <p class="text">A passionate Full-stack Web Developer based In Casablanca, Morocco</p>
                            </div>
                            <div class="right">
                                <div class="image">
                                    <img src=" {{ asset('assets/img/thumbs/47-60.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('assets/img/hero/DSC_5826.jpg') }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="main_menu">
                            <ul>
                                <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/archive.svg') }}" alt="" />
                                    <span>About Me</span>
                                    <a class="iknow_tm_full_link" href="#about"></a>
                                </li>
                                <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/contacs.svg') }}" alt="" />
                                    <span>Resume</span>
                                    <a class="iknow_tm_full_link" href="#resume"></a>
                                </li>
                                <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/briefcase.svg') }}" alt="" />
                                    <span>Portfolio</span>
                                    <a class="iknow_tm_full_link" href="#portfolio"></a>
                                </li>
                                <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/gear.svg') }}" alt="" />
                                    <span>Service</span>
                                    <a class="iknow_tm_full_link" href="#service"></a>
                                </li>
                                {{-- <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/message.svg') }}" alt="" />
                                    <span>Testimonial</span>
                                    <a class="iknow_tm_full_link" href="#testimonials"></a>
                                </li> --}}
                                {{-- <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/writing.svg') }}" alt="" />
                                    <span>Blog</span>
                                    <a class="iknow_tm_full_link" href="#news"></a>
                                </li> --}}
                                <li>
                                    <img class="svg" src=" {{ asset('assets/img/svg/letter.svg') }}" alt="" />
                                    <span>Contact</span>
                                    <a class="iknow_tm_full_link" href="#contact"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="simple_shapes">
                <span class="one anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}" alt="" /></span>
                <span class="two anim_moveLeft"><img class="svg" src=" {{ asset('assets/img/svg/shapes/dot.svg') }}"
                        alt="" /></span>
                <span class="three anim_moveTop"><img class="svg" src=" {{ asset('assets/img/svg/shapes/dot-2') }}.svg"
                        alt="" /></span>
                <span class="four anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/1.svg') }}"
                        alt="" /></span>
                <span class="five anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/8.svg') }}"
                        alt="" /></span>
                <span class="six anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/3.svg') }}"
                        alt="" /></span>
                <span class="seven anim_right"><img class="svg" src=" {{ asset('assets/img/svg/shapes/4.svg') }}"
                        alt="" /></span>
                <span class="eight anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="nine anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/3.svg') }}"
                        alt="" /></span>
                <span class="ten anim_moveLeft"><img class="svg" src=" {{ asset('assets/img/svg/shapes/4.svg') }}"
                        alt="" /></span>
                <span class="eleven anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="twelve anim_extra"><img class="svg" src=" {{ asset('assets/img/svg/shapes/2.svg') }}"
                        alt="" /></span>
                <span class="thirteen anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/5.svg') }}"
                        alt="" /></span>
                <span class="fourteen anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="fifteen anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/3.svg') }}"
                        alt="" /></span>
                <span class="sixteen anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="seventeen anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/5.svg') }}"
                        alt="" /></span>
                <span class="eighteen anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="nineteen anim_scale"><img class="svg" src=" {{ asset('assets/img/svg/shapes/9.svg') }}"
                        alt="" /></span>
                <span class="twenty anim_circle"><img class="svg" src=" {{ asset('assets/img/svg/shapes/1.svg') }}"
                        alt="" /></span>
            </div>

        </div>


        <div class="container">
            <div class="iknow_tm_mainpart">

                <div id="about" class="iknow_tm_main_section">
                    <div class="iknow_tm_about">
                        <div class="left">
                            <div class="left_inner">
                                <div class="image">
                                    <img src=" {{ asset('assets/img/thumbs/35-44.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('assets/img/hero/DSC_5826.jpg') }}"></div>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>
                                            <h3>Name</h3>
                                            <span>Yassir Daief</span>
                                        </li>
                                        <li>
                                            <h3>Birthday</h3>
                                            <span>September 09, 2002</span>
                                        </li>
                                        <li>
                                            <h3>Mail</h3>
                                            <span>yasserloera@gmail.com</span>
                                        </li>
                                        <li>
                                            <h3>Phone</h3>
                                            <span>+212 687-673-362</span>
                                        </li>
                                        <li>
                                            <h3>Address</h3>
                                            <span>Hay Mobaraka, Sidi Bernoussi, Casa</span>
                                        </li>
                                        <li>
                                            <h3>Nationality</h3>
                                            <span>Moroccan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="iknow_tm_main_title">
                                <span>About Me</span>
                                <h3>World's best Full-stak web developer</h3>
                            </div>
                            <div class="bigger_text">
                                <p>A passionate Full-stack Web Developer based In Casablanca, Morocco</p>
                            </div>
                            <div class="text">
                                <p>Hi! My name is Yassir Daief. I am Full-stack Web Developer, and I'm very passionate and
                                    dedicated to my work. With my experience as a professional web developer, I
                                    have acquired the skills and knowledge necessary to make your project a success.</p>
                            </div>
                            {{-- <div class="iknow_tm_button">
                                <a href="img/cv/1.jpg" download>Download CV</a>
                            </div> --}}
                        </div>
                    </div>
                </div>


                <div id="resume" class="iknow_tm_main_section">
                    <div class="iknow_tm_resume">
                        <div class="iknow_tm_main_title">
                            <span>Resume</span>
                            <h3>Combination of Skill &amp; Experience</h3>
                        </div>
                        <div class="resume_inner">
                            <div class="left">
                                <div class="info_list">
                                    <div class="iknow_tm_resume_title">
                                        <h3>Education</h3>
                                        <span class="shape"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="list_inner">
                                                <div class="short">
                                                    <div class="job">
                                                        <h3>Web Development</h3>
                                                        <span>3W ACADEMY</span>
                                                    </div>
                                                    <div class="year">
                                                        <span>2022</span>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>designers are more visually creative and user-focused, while 
                                                        Web Developers are made to build a website’s core structure using coding languages.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info_list">
                                    <div class="iknow_tm_resume_title">
                                        <h3>Experience</h3>
                                        <span class="shape"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="list_inner">
                                                <div class="short">
                                                    <div class="job">
                                                        <h3>UI/UX Designer</h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="year">
                                                        <span>2018 - running</span>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Creating Good websites needs to be creative in the user interface as much as coding skills needed.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                <div class="skills_list">
                                    <div class="iknow_tm_resume_title">
                                        <h3>Personal Skills</h3>
                                        <span class="shape"></span>
                                    </div>
                                    <div class="personal">
                                        <div class="dodo_progress">
                                            <div class="progress_inner" data-value="90">
                                                <span><span class="label">Time Management</span><span
                                                        class="number">90%</span></span>
                                                <div class="background">
                                                    <div class="bar">
                                                        <div class="bar_in"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress_inner" data-value="70">
                                                <span><span class="label">Effeciency</span><span
                                                        class="number">70%</span></span>
                                                <div class="background">
                                                    <div class="bar">
                                                        <div class="bar_in"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress_inner" data-value="80">
                                                <span><span class="label">Intigrity</span><span
                                                        class="number">80%</span></span>
                                                <div class="background">
                                                    <div class="bar">
                                                        <div class="bar_in"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills_list">
                                    <div class="iknow_tm_resume_title">
                                        <h3>Languages i Master</h3>
                                        <span class="shape"></span>
                                    </div>
                                    <div class="software">
                                        <div class="circular_progress_bar">
                                            <ul>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle" data-value="0.8"></div>
                                                        <div class="title">
                                                            <h3>HTML</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle" data-value="0.75"></div>
                                                        <div class="title">
                                                            <h3>CSS</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle" data-value="0.75"></div>
                                                        <div class="title">
                                                            <h3>JavaScript</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle" data-value="0.65"></div>
                                                        <div class="title">
                                                            <h3>REACT JS</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle" data-value="0.7"></div>
                                                        <div class="title">
                                                            <h3>LARAVEL</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="portfolio" class="iknow_tm_main_section">
                    <div class="iknow_tm_portfolio">
                        <div class="iknow_tm_main_title">
                            <span>Resume</span>
                            <h3>My works that I did</h3>
                        </div>
                        {{-- <div class="portfolio_filter">
                            <ul>
                                <li><a href="#" class="current" data-filter="*">All</a></li>
                                <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
                                <li><a href="#" data-filter=".youtube">Youtube</a></li>
                                <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
                                <li><a href="#" data-filter=".detail">Detail</a></li>
                            </ul>
                        </div> --}}
                        <div class="portfolio_list">
                            <ul class="gallery_zoom">
                                <li class="vimeo">
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/1-1.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/portfolio/pro1.png') }}"></div>
                                        </div>
                                        <div class="overlay"></div>
                                        {{-- <img class="svg" src=" {{ asset('assets/img/svg/social/vimeo.svg') }}" alt="" /> --}}
                                        <div class="details">
                                            <div class="iknow_tm_button">
                                                <a href="https://github.com/RessaY05" download>See Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="vimeo">
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/1-1.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/portfolio/INSTA.png') }}"></div>
                                        </div>
                                        <div class="overlay"></div>
                                        {{-- <img class="svg" src=" {{ asset('assets/img/svg/social/vimeo.svg') }}" alt="" /> --}}
                                        <div class="details">
                                            <div class="iknow_tm_button">
                                                <a href="https://github.com/RessaY05" download>See Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="vimeo">
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/1-1.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/portfolio/CH°BOT.png') }}"></div>
                                        </div>
                                        <div class="overlay"></div>
                                        {{-- <img class="svg" src=" {{ asset('assets/img/svg/social/vimeo.svg') }}" alt="" /> --}}
                                        <div class="details">
                                            <div class="iknow_tm_button">
                                                <a href="https://github.com/RessaY05" download>See Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="service" class="iknow_tm_main_section">
                    <div class="iknow_tm_services">
                        <div class="iknow_tm_main_title">
                            <span>Service</span>
                            <h3>Never compromise with quality</h3>
                        </div>
                        <div class="service_list">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src=" {{ asset('assets/img/svg/physics.svg') }}"
                                                alt="" /></span>
                                        <h3 class="title">WEBSITE</h3>
                                        <p class="text">I can create your website using ReactJs fot front-end and Laravel for back-end</p>
                                        {{-- <a class="iknow_tm_full_link" href="#"></a> --}}
                                        <div class="hidden_content">
                                            <div class="service_informations">
                                                <div class="image">
                                                    <img src=" {{ asset('assets/img/thumbs/4-2.jpg') }}" alt="" />
                                                    <div class="main" data-img-url="{{ asset('assets/img/service/2.jpg') }}"></div>
                                                </div>
                                                <div class="description">
                                                    <p>iKnow is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src=" {{ asset('assets/img/svg/web.svg') }}"
                                                alt="" /></span>
                                        <h3 class="title">UI Design</h3>
                                        <p class="text">UI Design is one of the important thing for websites because it makes your website brilliant and with my skills i can make your website Attractive</p>
                                        {{-- <a class="iknow_tm_full_link" href="#"></a> --}}
                                        <div class="hidden_content">
                                            <div class="service_informations">
                                                <div class="image">
                                                    <img src=" {{ asset('assets/img/thumbs/4-2.jpg') }}" alt="" />
                                                    <div class="main" data-img-url="{{ asset('assets/img/service/3.jpg') }}"></div>
                                                </div>
                                                <div class="description">
                                                    <p>iKnow is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                {{-- <div id="news" class="iknow_tm_main_section">
                    <div class="iknow_tm_news">
                        <div class="iknow_tm_main_title">
                            <span>Blog</span>
                            <h3>Latest tips, tricks &amp; Updates</h3>
                        </div>
                        <div class="news_list">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/37-27.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/news/1.jpg') }}"></div>
                                            <a class="iknow_tm_full_link" href="#"></a>
                                        </div>
                                        <div class="details">
                                            <span class="category"><a href="#">Web Design</a></span>
                                            <h3 class="title"><a href="#">How to create a website using
                                                    WordPress</a></h3>
                                        </div>
                                        <div class="hidden_content">
                                            <div class="news_informations">
                                                <div class="text">
                                                    <p>iKnow is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/37-27.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/news/2.jpg') }}"></div>
                                            <a class="iknow_tm_full_link" href="#"></a>
                                        </div>
                                        <div class="details">
                                            <span class="category"><a href="#">Branding</a></span>
                                            <h3 class="title"><a href="#">Angular team streamlines requests</a>
                                            </h3>
                                        </div>
                                        <div class="hidden_content">
                                            <div class="news_informations">
                                                <div class="text">
                                                    <p>iKnow is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src=" {{ asset('assets/img/thumbs/37-27.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('assets/img/news/3.jpg') }}"></div>
                                            <a class="iknow_tm_full_link" href="#"></a>
                                        </div>
                                        <div class="details">
                                            <span class="category"><a href="#">UI Design</a></span>
                                            <h3 class="title"><a href="#">How to handle errors in React
                                                    Javascript</a></h3>
                                        </div>
                                        <div class="hidden_content">
                                            <div class="news_informations">
                                                <div class="text">
                                                    <p>iKnow is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}


                <div id="contact" class="iknow_tm_main_section">
                    <div class="iknow_tm_contact">
                        <div class="iknow_tm_main_title">
                            <span>Contact Me</span>
                            <h3>Contact me to get your work done</h3>
                        </div>
                        <div class="wrapper">
                            <div class="left">
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <span class="icon"><img class="svg" src=" {{ asset('assets/img/svg/smartphone.svg') }}"
                                                    alt="" /></span>
                                            <div class="short">
                                                <h3>Call Me</h3>
                                                <span>+212 687 673 362</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <span class="icon"><img class="svg" src=" {{ asset('assets/img/svg/letter.svg') }}"
                                                    alt="" /></span>
                                            <div class="short">
                                                <h3>Email Us</h3>
                                                <span>yasserloera@gmail.com</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <span class="icon"><img class="svg" src=" {{ asset('assets/img/svg/placeholder.svg') }}"
                                                    alt="" /></span>
                                            <div class="short">
                                                <h3>Address</h3>
                                                <span>Sidi bernoussi, Casablanca, Morocco</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <div class="fields">
                                    <form action="/" method="post" class="contact_form" id="contact_form"
                                        autocomplete="off">
                                        <div class="returnmessage"
                                            data-success="Your message has been received, We will contact you soon.">
                                        </div>
                                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                        <div class="input_list">
                                            <ul>
                                                <li><input id="name" type="text" placeholder="Your Name" />
                                                </li>
                                                <li><input id="email" type="text" placeholder="Your Email" />
                                                </li>
                                                <li><input id="phone" type="number" placeholder="Your Phone" />
                                                </li>
                                                <li><input id="subject" type="text" placeholder="Subject" />
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="message_area">
                                            <textarea id="message" placeholder="Your message here"></textarea>
                                        </div>
                                        <div class="iknow_tm_button">
                                            <a id="send_message" href="#">Submit Now</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="iknow_tm_copyright hidden">
            <div class="container">
                <div class="inner">
                    <div class="left">
                        <p>Designed with love &copy; By RessaY</p>
                    </div>
                    <div class="right">
                        <ul>
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src=" {{ asset('assets/js/jquery.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/init.js') }}"></script>

    </body>
</html>
