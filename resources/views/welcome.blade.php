<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/ekscool.svg" type="image/x-icon">
    <link href="{{ asset('assets/remixicon/remixicon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/home/css/styles.css') }}">
    <x-x-icon></x-x-icon>
    <title>Magang Digital</title>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="{{ asset('assets/home/img/ekscool.svg') }}" alt="">MAGDI
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">

                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">

        <!--home-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="{{ asset('assets/home/img/hero-il.svg') }}" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="huruf__title">
                        Magang Digital
                    </h1>
                    <h1 class="home__title">
                        SMK Negeri 6 Jember
                    </h1>
                    <p class="home__description">
                        merupakan aplikasi pendataan siswa SMK Negeri 6 Jember untuk penentuan tempat magang
                    </p>
                    <a href="{{ route('login') }}" class="button button--flex">
                        Login <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                    <a href="{{ route('register') }}" class="button button--flex">
                        Register <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>

                    <div class="home__social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/smkn6jember/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ini footer -->
        <footer class="steps footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <img src="{{ asset('assets/home/img/ekscool.svg') }}" alt="">MAGDI
                    </a>

                    <h3 class="steps__bg">
                        SMK BISA! <br> SMK HEBAT! <br> SMK NEGERI 6 JEMBER LUAR BIASA!
                    </h3>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">Jl. PB. Sudirman 114</li>
                        <li class="footer__information">Kec. Tanggul</li>
                        <li class="footer__information">Kab. Jember</li>
                        <li class="footer__information">Prov. Jawa Timur</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">Phone 0336-441347</li>
                        <li class="footer__information">Fax 0336-441347</li>
                        <li class="footer__information">Kode Pos 68155</li>

                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-gmail-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Program Keahlian
                    </h3>

                    <div class="footer__cards">
                        <img src="{{ asset('assets/home/img/rpl.svg') }}" alt="" class="footer__card">
                        <img src="{{ asset('assets/home/img/mm.svg') }}" alt="" class="footer__card">
                        <img src="{{ asset('assets/home/img/bdp.svg') }}" alt="" class="footer__card">
                    </div>
                    <div class="footer__cards">
                        <img src="{{ asset('assets/home/img/otkp.svg') }}" alt="" class="footer__card">
                        <img src="{{ asset('assets/home/img/akl.svg') }}" alt="" class="footer__card">
                        <img src="{{ asset('assets/home/img/kkbt.svg') }}" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; SMK Negeri 6 Jember</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="{{ asset('assets/home/js/scrollreveal.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('assets/home/js/main.js') }}"></script>
</body>

</html>
