<!DOCTYPE html>
<html lang="en">
<head>
    @push('css')

    @endpush
</head>
<body>
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
@yield('footer')
</body>
@push('scripts')

@endpush
</html>
