<!DOCTYPE html>
<html lang="en">
<head>
    @stack('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--=============== FONT FAMILY ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/font.css')}}">
    <!--=============== ICON MEDSOS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css')}}">
    <!--=============== DETAIL CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css')}}">
    <!--=============== CSS LANDING ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <!--=============== LOGIN CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/carousel.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>@yield('title')</title>
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
                <a class="nav__link" href="" data-toggle="modal" data-target="#registerModal">Register</a>
            </li>
            @endguest

            </ul>
        </div>
        <div class="action">
            <div class="profile dropdown-toggle" onclick="menuToggle();" >
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
                            <a href="javascript:void(0)" onclick="document.getElementById('form').submit()">Logout</a>
                    </form>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('partials.login')
    @include('partials.register')
</header>
@yield('headerd')
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
<script type="text/javascript " src="{{asset('assets/js/vanilla-tilt.js')}}"></script>
<script type="text/javascript ">
VanillaTilt.init(document.querySelectorAll(".team__card "), {
max: 25,
speed: 400
});
</script>
<script>
function menuToggle(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
}
</script>
<!--=============== SCROLL REVEAL ===============-->
<script src="{{asset('assets/js/scrollreveal.min.js')}}  "></script>

<!--=============== SWIPER JS ===============-->
<script src="{{asset('assets/js/swiper-bundle.min.js')}}  "></script>

<!--=============== MIXITUP JS ===============-->
<script src="{{asset('assets/js/mixitup.min.js')}}  "></script>

<!--=============== MAIN JS ===============-->
<script src="{{asset('assets/js/main.js')}}  "></script>
<!--=============== APP JS ===============-->
<script src="{{asset('assets/js/bootstrapJS.js')}}"></script>

<script>
    $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
            items:1,
            nav: false
        },
        600:{
            items:2,
            nav: false
        },
        1000:{
            items:3,
            nav: false
        }
        }
    });
</script>
</html>
