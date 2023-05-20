<!DOCTYPE html>
<html lang="en">

<head>
    @stack('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--=============== FONT FAMILY ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <!--=============== ICON MEDSOS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
    <!--=============== CSS LANDING ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!--=============== LOGIN CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>landing Page</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <!--==================== WELCOME ====================-->
            <a href="" class="logo">
                <img src="../img/logo/logolt.png" alt="">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#team" class="nav__link">Team</a>
                    </li>
                    @guest
                        <li class="nav__item">
                            <a class="nav__link" href="" data-toggle="modal" data-target="#loginModal">Login</a>
                        </li>
                    @endguest
                    @guest
                        <li class="nav__item">
                            <a class="nav__link" href="" data-toggle="modal"
                                data-target="#registerModal">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="action">
                <div class="profile dropdown-toggle" onclick="menuToggle();">
                    <img src="../img/user/user.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <span class="material-icons icons-size">person</span>
                            <a href="" data-toggle="modal" data-target="#loginModal">My Profile</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">mode</span>
                            <a href="" data-toggle="modal" data-target="#loginModal">Edit Account</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">account_balance</span>
                            <a href="" data-toggle="modal" data-target="#loginModal">Rental History</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">account_balance_wallet</span>
                            @guest
                                <a href="" data-toggle="modal" data-target="#loginModal">Login</a>
                            @endguest

                            @auth
                                <form id="form" action="/logout" method="post">
                                    @csrf
                                    <a href="javascript:void(0)"
                                        onclick="document.getElementById('form').submit()">Logout</a>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @include('partials.login')
    @include('partials.register')
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <source src="../img/bg.mp4" type="video/mp4">
                </video>
            </div>
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Pilih Mobil Terbaik
                    </h1>
                    <h2 class="home__subtitle">
                        Avanza Veloz
                    </h2>
                    <h3 class="home__elec">
                        <i class="ri-settings-3-line"></i>Matic Car
                    </h3>
                </div>
                <div class="home__car">
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-temp-cold-line"></i>
                        </div>
                        <h2 class="home__car-number">24°</h2>
                        <h3 class="home__car-name">TEMP</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-dashboard-3-line"></i>
                        </div>
                        <h2 class="home__car-number">140 HP</h2>
                        <h3 class="home__car-name">SPEED</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-gas-station-line"></i>
                        </div>
                        <h2 class="home__car-number">43 LT</h2>
                        <h3 class="home__car-name">FUEL</h3>
                    </div>
                </div>
                <a href="#about" class="home__button">START</a>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__group">
                    <img src="../img/fitur/spec.jpg" alt="" class="about__img">
                    <div class="about__card">
                        <h3 class="about__card-title">Interior</h3>
                        <p class="about__card-description">With screen 10 inc.</p>
                    </div>
                </div>

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Mesin lebih<br> Canggih
                    </h2>
                    <p class="about__description">
                        Toyota Veloz 2022 adalah 7 Seater MPV yang tersedia dalam daftar harga Rp 286 - 331,1 Juta di
                        Indonesia. Ini tersedia dalam 3 warna, 4 varian, 1 pilihan mesin, dan 2 opsi transmisi: Manual
                        dan CVT di Indonesia. Mobil ini memiliki ground clearance 205 mm dengan dimensi sebagai berikut:
                        4475 mm L x 1750 mm W x 1700 mm H. Lebih dari 100 pengguna telah memberikan penilaian untuk
                        Veloz berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin. Cicilan
                        bulanan terendah dimulai dari Rp 18,15 Million (selama 60 bulan).
                    </p>
                    <a href="/detail" class="button">Cari tahu lebih</a>
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Paling Populer<br> dari Lafuzi Brand
            </h2>

            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Toyota</h1>
                        <h3 class="popular__subtitle">Avanza</h3>

                        <img src="../img/popular/popular1.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 365 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Matic
                            </div>
                        </div>
                        <h3 class="popular__price">Rp.330 jt</h3>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Toyota</h1>
                        <h3 class="popular__subtitle">N-V</h3>

                        <img src="../img/popular/popular2.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 365 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Matic
                            </div>
                        </div>
                        <h3 class="popular__price">Rp.340 jt</h3>

                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Daihatsu</h1>
                        <h3 class="popular__subtitle">Grant Max</h3>

                        <img src="../img/popular/popular3.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 365 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Manual
                            </div>
                        </div>
                        <h3 class="popular__price">Rp.200 jt</h3>
                    </article>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== FEATURES ====================-->
        <section class="features section">
            <h2 class="section__title">
                Fitur Lainnya
            </h2>

            <div class="features__container container grid">
                <div class="features__group">
                    <img src="../img/fitur/features.png" alt="" class="features__img">

                    <div class="features__card features__card-1">
                        <h3 class="features__card-title">800v</h3>
                        <p class="features__card-description">Turbo <br> Chargin</p>
                    </div>

                    <div class="features__card features__card-2">
                        <h3 class="features__card-title">350</h3>
                        <p class="features__card-description">Km <br> Range</p>
                    </div>

                    <div class="features__card features__card-3">
                        <h3 class="features__card-title">480</h3>
                        <p class="features__card-description">Km <br> Travel</p>
                    </div>
                </div>
            </div>

            <img src="../img/map.svg" alt="" class="features__map">
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title">
                Buy Now
            </h2>

            <div class="featured__container container">
                <ul class="featured__filters">
                    <li>
                        <button class="featured__item active-featured" data-filter="all">
                            <span>All</span>
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".tesla">
                            <img src="../img/logo/logo3.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".audi">
                            <img src="../img/logo/logo2.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".porsche">
                            <img src="../img/logo/logo1.png" alt="">
                        </button>
                    </li>
                </ul>

                <div class="featured__content grid">
                    <div class="featured__card mix tesla">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular1.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>AVANZA VELOZ</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%;">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                    <div class="featured__card mix tesla">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular2.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>TOYOTA VENTURER</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%;">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                    <div class="featured__card mix audi">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular3.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>TOYOTA AVANZA</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%;">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                    <div class="featured__card mix audi">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular4.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>AVANZA VELOZ</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%;">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                    <div class="featured__card mix porsche">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular5.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>AVANZA VELOZ</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%; ">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                    <div class="featured__card mix porsche">
                        <div class="featured__poster ">
                            <img src="../img/popular/popular6.png " style="margin-right: 1rem;">
                        </div>
                        <div class="featured__detail ">
                            <h1>ALL NEW</h1>
                            <h2>AVANZA VELOZ</h2>
                            <div class="home__car-icon1">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <p style="color: black; margin-top: 2%;">Matic Car with 500hp</p>
                            <button class="button popular__button ">
                                <a href="/checkout" class="ri-shopping-bag-2-line " style="color:white;"></a>
                            </button>
                        </div>
                    </div>
                </div>
        </section>

        <!--==================== OFFER ====================-->
        <section class="offer section ">
            <div class="offer__container container grid ">
                <img src="../img/fitur/offer-bg.png " alt=" " class="offer__bg ">

                <div class="offer__data ">
                    <h2 class="section__title offer__title ">
                        Kamu Mau Dapat <br> Penawaran Terbaik?
                    </h2>

                    <p class="offer__description ">
                        Honda juga menawarkan program penjualan bertajuk "Share Your Redefined Experience" hingga
                        Desember 2022, terdapat program Sporty DNA Package khusus untuk pembelian unit Honda City
                        Hatchback RS Manual Transmission dimana konsumen berkesempatan untuk mendapatkan tambahan reward
                        Rp 10 Juta dan bonus genuine part accessories berupa; Front Under Spoiler, Side Under Spoiler,
                        Rear Under Spoiler, Tailgate Spoiler Garnish dan Door Visors.
                    </p>
                    <a href="# " class="button ">
                        Subscribe Now
                    </a>
                </div>
                <img src="../img/popular/popular1.png " alt=" " class="offer__img ">
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section ">
            <div class="logos__container container grid ">
                <div class="logos__content ">
                    <img src="../img/logo/logo1.png " alt=" " class="logos__img ">
                </div>
                <div class="logos__content ">
                    <img src="../img/logo/logo2.png " alt=" " class="logos__img ">
                </div>
                <div class="logos__content ">
                    <img src="../img/logo/logo3.png " alt=" " class="logos__img ">
                </div>
                <div class="logos__content ">
                    <img src="../img/logo/logo4.png " alt=" " class="logos__img ">
                </div>
                <div class="logos__content ">
                    <img src="../img/logo/logo5.png " alt=" " class="logos__img ">
                </div>
                <div class="logos__content ">
                    <img src="../img/logo/logo6.png " alt=" " class="logos__img ">
                </div>
            </div>
        </section>

        <!--==================== Team ====================-->
        <section class="team section " id="team">
            <h2 class="section__title ">
                Team
            </h2>
            <div class="team__container container grid ">
                <div class="team__card ">
                    <div class="team__content ">
                        <div class="imgBx "><img src="../img/user/adit.jpg " alt=" "></div>
                        <div class="contentBx ">
                            <h3>Web Dev<br>
                                <span>Adit</span>
                            </h3>
                        </div>
                    </div>
                    <ul class="sci ">
                        <li style="--i:1 ">
                            <a href="https://www.facebook.com " target="_blank "
                                class="footer__social-link facebook ">
                                <i class="ri-facebook-fill "></i>
                            </a>
                        </li>
                        <li style="--i:2 ">
                            <a href="https://www.instagram.com " target="_blank "
                                class="footer__social-link instagram ">
                                <i class="ri-instagram-line "></i>
                            </a>
                        </li>
                        <li style="--i:3 ">
                            <a href="https://www.twitter.com " target="_blank " class="footer__social-link twitter ">
                                <i class="ri-twitter-line "></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="team__card ">
                    <div class="team__content ">
                        <div class="imgBx "><img src="../img/user/yogi.jpg " alt=" "></div>
                        <div class="contentBx ">
                            <h3>Web Dev<br>
                                <span>Yogi</span>
                            </h3>
                        </div>
                    </div>
                    <ul class="sci ">
                        <li style="--i:1 ">
                            <a href="https://www.facebook.com " target="_blank "
                                class="footer__social-link facebook ">
                                <i class="ri-facebook-fill "></i>
                            </a>
                        </li>
                        <li style="--i:2 ">
                            <a href="https://www.instagram.com " target="_blank "
                                class="footer__social-link instagram ">
                                <i class="ri-instagram-line "></i>
                            </a>
                        </li>
                        <li style="--i:3 ">
                            <a href="https://www.twitter.com " target="_blank " class="footer__social-link twitter ">
                                <i class="ri-twitter-line "></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="team__card ">
                    <div class="team__content ">
                        <div class="imgBx "><img src="../img/user/fauzi.jpg" alt=" "></div>
                        <div class="contentBx ">
                            <h3>Web Dev <br>
                                <span>Fauzi</span>
                            </h3>
                        </div>
                    </div>
                    <ul class="sci ">
                        <li style="--i:1 ">
                            <a href="https://www.facebook.com " target="_blank "
                                class="footer__social-link facebook ">
                                <i class="ri-facebook-fill "></i>
                            </a>
                        </li>
                        <li style="--i:2 ">
                            <a href="https://www.instagram.com " target="_blank "
                                class="footer__social-link instagram ">
                                <i class="ri-instagram-line "></i>
                            </a>
                        </li>
                        <li style="--i:3 ">
                            <a href="https://www.twitter.com " target="_blank " class="footer__social-link twitter ">
                                <i class="ri-twitter-line "></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="team__card ">
                    <div class="team__content ">
                        <div class="imgBx "><img src="../img/user/qirom.jpg " alt=" "></div>
                        <div class="contentBx ">
                            <h3>Web Dev<br>
                                <span>Qirom</span>
                            </h3>
                        </div>
                    </div>
                    <ul class="sci ">
                        <li style="--i:1 ">
                            <a href="https://www.facebook.com " target="_blank "
                                class="footer__social-link facebook ">
                                <i class="ri-facebook-fill "></i>
                            </a>
                        </li>
                        <li style="--i:2 ">
                            <a href="https://www.instagram.com " target="_blank "
                                class="footer__social-link instagram ">
                                <i class="ri-instagram-line "></i>
                            </a>
                        </li>
                        <li style="--i:3 ">
                            <a href="https://www.twitter.com " target="_blank " class="footer__social-link twitter ">
                                <i class="ri-twitter-line "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!--==================== FOOTER ====================-->
    <footer class="footer section ">
        <div class="shape shape__big "></div>
        <div class="shape shape__small "></div>
        <div class="footer__container container grid ">
            <div class="footer__content ">
                <a href="# " class="footer__logo ">
                    <i class="ri-steering-line "></i> Lafuzi car
                </a>
                <p class="footer__description ">
                    Tempat terbaik untuk beli mobil impian <br>dengan harga
                    terjangkau, berkuailtas, <br>dan terjamin garansinya.
                </p>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">
                    Company
                </h3>
                <ul class="footer__links ">
                    <li>
                        <a href="#about " class="footer__link ">About</a>
                    </li>
                    <li>
                        <a href="#popular " class="footer__link ">Popular</a>
                    </li>
                    <li>
                        <a href="#featured " class="footer__link ">Featured</a>
                    </li>
                    <li>
                        <a href="#team " class="footer__link ">Team</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">
                    Information
                </h3>

                <ul class="footer__links ">
                    <li>
                        <a href="/about_us" class="footer__link ">About Us</a>
                    </li>
                    <li>
                        <a href="# " class="footer__link ">Find a dealer</a>
                    </li>
                    <li>
                        <a href="# " class="footer__link ">Contact us</a>
                    </li>
                    <li>
                        <a href="# " class="footer__link ">Services</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">
                    Follow us
                </h3>

                <ul class="footer__social ">
                    <a href="https://www.facebook.com " target="_blank " class="footer__social-link ">
                        <i class="ri-facebook-fill "></i>
                    </a>
                    <a href="https://www.instagram.com " target="_blank " class="footer__social-link ">
                        <i class="ri-instagram-line "></i>
                    </a>
                    <a href="https://www.twitter.com " target="_blank " class="footer__social-link ">
                        <i class="ri-twitter-line "></i>
                    </a>
                </ul>
            </div>
        </div>
        <span class="footer__copy ">
            &#169; Lafuzi Tech. All rights reserved
        </span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#home" class="to-top">
        <img src="../img/fitur/scroll.png" alt="">
    </a>
    <!--=============== SCROLL END ===============-->
</body>
@stack('scripts')
<!--=============== FONT AWESOME ===============-->
<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
<!--=============== VANILL TILT JS ===============-->
<script type="text/javascript " src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
<script type="text/javascript ">
    VanillaTilt.init(document.querySelectorAll(".team__card "), {
        max: 25,
        speed: 400
    });
</script>
<script>
    function menuToggle() {
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active')
    }
</script>
<!--=============== SCROLL REVEAL ===============-->
<script src="{{ asset('assets/js/scrollreveal.min.js') }}  "></script>

<!--=============== SWIPER JS ===============-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}  "></script>

<!--=============== MIXITUP JS ===============-->
<script src="{{ asset('assets/js/mixitup.min.js') }}  "></script>

<!--=============== MAIN JS ===============-->
<script src="{{ asset('assets/js/main.js') }}  "></script>
<!--=============== APP JS ===============-->
<script src="{{ asset('assets/js/bootstrapJS.js') }}"></script>

<script>
    $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
</script>

</html>
