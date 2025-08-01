<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BERANDA</title>
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .scrolled-header {
            background-color: rgba(35, 37, 47, 0.95);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .button-33 {
            background-color: #2755b5;
            border-radius: 100px;
            box-shadow: rgba(44, 158, 187, 0.2) 0 -25px 18px -14px inset, rgba(44, 165, 187, 0.15) 0 1px 2px, rgba(44, 173, 187, 0.15) 0 2px 4px, rgba(44, 187, 187, 0.15) 0 4px 8px, rgba(44, 173, 187, 0.15) 0 8px 16px, rgba(44, 187, 182, 0.15) 0 16px 32px;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-33:hover {
            box-shadow: rgba(44, 132, 187, 0.35) 0 -25px 18px -14px inset, rgba(44, 125, 187, 0.25) 0 1px 2px, rgba(44, 137, 187, 0.25) 0 2px 4px, rgba(44, 108, 187, 0.25) 0 4px 8px, rgba(44, 115, 187, 0.25) 0 8px 16px, rgba(44, 120, 187, 0.25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 2rem;
            color: white;
            margin-top: 45px;
        }

        .fitur {
            margin: auto;
            filter: drop-shadow(0px 5px 10px black);
        }

        .card-fitur {
            background: linear-gradient(45deg, #323232, #2755b591);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 88px 0;
            padding: 10px;
            color: white;
            margin-top: 45px;
        }

        .dropdown-toggle::after {
            display: contents !important;
        }


        @media (min-width: 990px) {
            .col-lg-3 {
                flex: 0 0 auto;
                width: 23%;
            }

            .hayo {
                margin-left: -145px;
                width: 50% !important;
                position: absolute;
            }

            header {
                display: flex;
            }

            .window {
                display: none !important;
            }

            .window .header {
                display: none !important;
            }
        }

        @media (max-width: 989px) {
            .hero-image {
                right: -10px;
                position: absolute;
                width: 50% !important;
                top: 15%;
            }

            .text-hero {
                width: 190%;
            }

            .hero {
                padding-left: 45px !important;
            }

            .hayo {
                rotate: 90deg;
                display: flex;
                margin: auto;
                margin-top: -120px;
            }

            .apa {
                margin-top: -120px;
            }

            .bruh {
                padding-left: 65px !important;
            }

            header {
                display: flex;
            }

            .window {
                display: none !important;
            }

            .window .header {
                display: none !important;
            }
        }

        @media (max-width: 767px) {
            .hero-image {
                display: none !important;
            }

            .text-hero {
                text-align: center;
                max-width: 100%;
                /* padding-left: 0px !important; */
            }

            .hero {
                padding-left: 40px !important;
            }

            .hayo {
                display: flex;
                margin: auto;
                rotate: 90deg;
                width: 100% !important;
                margin-left: 0px !important;
                margin-top: -120px !important;
            }

            .bruh {
                padding-left: 0px !important;
            }

            .apa {
                margin-top: -100px;
                border-radius: 0;
            }

            header {
                display: none !important;
            }



            @import url(https://fonts.googleapis.com/css?family=Ek+Mukta:200);

            .window {
                display: block !important;
                position: fixed;
                z-index: 999;
            }


            /*
            .window {
                position: relative;
                display: block;
                width: 360px;
                height: 567px;
                margin: 100px auto 0;
                box-shadow: 0 0 65px 15px rgba(0, 0, 0, 0.2);
                overflow: hidden;
                border-radius: 3px;
                background: #F1F1F1;
            } */

            .window .header {
                position: absolute;
                display: block !important;
                top: 0;
                left: 0;
                height: 50px;
                width: 100%;
                background: #131720;
                overflow: hidden;
                transition: all 0.5s ease-out, background 1s ease-out;
                transition-delay: 0.2s;
                z-index: 1;
            }

            .window .header .burger-container {
                position: relative;
                display: inline-block;
                height: 50px;
                width: 50px;
                cursor: pointer;
                transform: rotate(0deg);
                transition: all 0.3s cubic-bezier(0.4, 0.01, 0.165, 0.99);
                user-select: none;
                -webkit-tap-highlight-color: transparent;
            }

            .window .header .burger-container #burger {
                width: 18px;
                height: 8px;
                position: relative;
                display: block;
                margin: -4px auto 0;
                top: 50%;
            }

            .window .header .burger-container #burger .bar {
                width: 100%;
                height: 1px;
                display: block;
                position: relative;
                background: #FFF;
                transition: all 0.3s cubic-bezier(0.4, 0.01, 0.165, 0.99);
                transition-delay: 0s;
            }

            .window .header .burger-container #burger .topBar {
                transform: translateY(0px) rotate(0deg);
            }

            .window .header .burger-container #burger .btmBar {
                transform: translateY(6px) rotate(0deg);
            }

            .window .header .icon {
                display: inline-block;
                position: absolute;
                height: 100%;
                line-height: 50px;
                width: 50px;
                text-align: center;
                color: #FFF;
                font-size: 22px;
                left: 50%;
                transform: translateX(-50%);
            }

            .window .header .icon.icon-bag {
                right: 0;
                top: 0;
                left: auto;
                transform: translateX(0px);
                transition: transform 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99);
                transition-delay: 0.65s;
            }

            .window .header ul.menu {
                position: relative;
                display: block;
                padding: 0px 48px 0;
                list-style: none;
            }

            .window .header ul.menu li.menu-item {
                border-bottom: 1px solid #333;
                margin-top: 5px;
                transform: scale(1.15) translateY(-30px);
                opacity: 0;
                transition: transform 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99), opacity 0.6s cubic-bezier(0.4, 0.01, 0.165, 0.99);
            }

            .window .header ul.menu li.menu-item:nth-child(1) {
                transition-delay: 0.49s;
            }

            .window .header ul.menu li.menu-item:nth-child(2) {
                transition-delay: 0.42s;
            }

            .window .header ul.menu li.menu-item:nth-child(3) {
                transition-delay: 0.35s;
            }

            .window .header ul.menu li.menu-item:nth-child(4) {
                transition-delay: 0.28s;
            }

            .window .header ul.menu li.menu-item a {
                display: block;
                position: relative;
                color: #FFF;
                font-family: 'Ek Mukta', sans-serif;
                font-weight: 200;
                text-decoration: none;
                font-size: 22px;
                line-height: 2.35;
                width: 100%;
            }

            .window .header.menu-opened {
                height: 100%;
                background-color: #131720;
                transition: all 0.3s ease-in, background 0.5s ease-in;
                transition-delay: 0.25s;
            }

            .window .header.menu-opened ul.menu li.menu-item {
                transform: scale(1) translateY(0px);
                opacity: 1;
            }

            .window .header.menu-opened .icon.icon-bag {
                transform: translateX(75px);
                transition-delay: 0.3s;
            }

            .window .header {
                position: fixed;
            }

            /* @media (max-width: 600px) {} */

        }
    </style>
</head>

<body style="background-color: #131720;">
    <main>
        <h1 class="visually-hidden">Headers examples</h1>

        {{-- <div class="b-example-divider"></div> --}}
        <div class="">
            <div class="window">
                <div class="header">
                    <div class="burger-container" id="burger">
                        <i class="bi bi-list" style="color: white;font-size: 30px;margin-left: 9px;line-height: 1.3;"></i>
                        <div class="bar topBar"></div>
                        <div class="bar btmBar"></div>
                    </div>

                    <div class="icon icon-apple">
                        <img src="../img/logo-putih.png" alt="" style="width: 100%;">
                    </div>

                    <ul class="menu">
                        <li class="menu-item"><a href="/">Beranda</a></li>
                        <li class="menu-item"><a href="/produk">Produk</a></li>
                        @if (Auth::user())
                            {{-- <li class="menu-item"><a href="/keranjang">Keranjang</a></li> --}}
                            <li class="menu-item"><a href="/profil">Profil</a></li>
                            <li class="menu-item"><a href="{{ route('postlogout') }}">Keluar</a></li>
                        @endif

                    </ul>

                    <div class="shop icon icon-bag">
                        @if (Auth::user())
                            <a href="/keranjang" type="button" class="" style="color: white;">
                                <i class="bi bi-cart" style="line-height: 0;"></i>
                            </a>
                        @else
                            <a href="/login" type="button" class="btn btn-primary rounded-5" style="margin-left: -40px;margin-top: -8px;">
                                LOGIN
                            </a>
                        @endif
                    </div>
                </div>
            </div>


            <header class=" flex-wrap align-items-center justify-content-center justify-content-md-between py-0 mb-4 px-3" style="position: fixed; z-index: 999; top: 0;">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="img/logo-putih.png" alt="" style="width: 40%;">
                        {{-- <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>  --}}
                    </a>
                </div>
                <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item "><a href="/" class="nav-link active px-2 rounded-5">Beranda</a></li>
                    <li class="nav-item"><a href="/produk" class="nav-link px-2">Produk</a></li>
                    {{-- <li class="nav-item"><a href="#" class="nav-link px-2">Tentang Kita</a></li> --}}
                    {{-- <li class="nav-item"><a href="#" class="nav-link px-2">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2">About</a></li> --}}
                </ul>
                <div class="col-md-3 text-end d-flex justify-content-end gap-2">
                    @if (Auth::user())
                        <div>
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar">
                                    <img src="../img/akun/{{ Auth::user()->img }}" class="w-px-40 rounded-circle" style="width: 40px;" />

                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="/profil">
                                        <i class='bx bx-user-circle'></i>
                                        <span>Profil Akun</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('postlogout') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;">
                                            <path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"></path>
                                            <path d="M11 2h2v10h-2z"></path>
                                        </svg>
                                        <span class="align-middle">Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="/keranjang" type="button" class="btn btn-primary rounded-circle">
                            <i class="bi bi-cart3"></i>
                        </a>
                    @else
                        <a href="/login" type="button" class="btn btn-primary rounded-5 me-2">
                            LOGIN
                        </a>
                    @endif
                </div>
            </header>
            {{-- <div class="b-example-divider"></div> --}}
            <div style="margin-top: 100px;">
                <div class="row align-items-center g-5" style="margin-right: 0 !important;">

                    <div class="hero col-12 col-sm-4 col-lg-6" style="padding-left: 120px;">
                        <h1 class="text-hero display-5 fw-bold lh-1 mb-3" style="background-image: linear-gradient(45deg, #ffffff, #0089ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;filter: drop-shadow(-5px -5px 10px #377ddc); box-shadow: 1px blue; height: 105px;">Kecepatan & Presisi, Di Ujung Jari</h1>
                        <p class="text-hero lead" style="color: #999999;">Nikmati performa tinggi dari mechanical keyboard untuk gaming dan produktivitas. Responsif, customizable, dan siap untuk setiap tantangan.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="/produk" type="button" class="btn button-33  btn-lg px-4 me-md-2">Lihat Produk</a>
                            {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Tentang Kami</button>  --}}
                        </div>
                    </div>
                    <div class="col-10 col-sm-6 col-lg-6" style="padding-right: 0 !important">
                        <img src="img/coba.png" class="hero-image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="width: 90%; margin-right: 0 !important; filter: drop-shadow(-30px -15px 155px #377ddc); margin-top: -100px !important;">
                    </div>
                </div>
                <h1 class="text-white text-center mt-3 mb-5">FITUR UNGGULAN</h1>
                <div class="row gap-4 container justify-content-between" style="margin-top: 10px; margin: auto;">
                    <div class="col-lg-3 col-sm-5 col-12">
                        <div class="card shadow-sm card-fitur" style=" height: fit-content;">
                            <img class="fitur" src="img/knob.png" alt="" style="margin-top: -95px !important; width: 80%;">
                            <div class="card-body" style="margin-top: -50px;">
                                <p class="card-text text-center">Atur volume, musik, dan pencahayaan hanya dengan satu putaran. Kontrol intuitif tepat di ujung jarimu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card shadow-sm card-fitur" style=" height: fit-content;">
                            <img class="fitur" src="img/laptop.png" alt="" style="margin-top: -86px !important; width: 85%;">
                            <div class="card-body" style="margin-top: -24px;">
                                <p class="card-text text-center">Atur makro, dan fungsi tombol sesuai gaya bermain dan bekerja kamu lewat software resmi AULA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-12">
                        <div class="card shadow-sm card-fitur" style=" height: fit-content;">
                            <img class="fitur" src="img/rgb.png" alt="" style="margin-top: -82px !important; width: 66%;">
                            <div class="card-body" style="margin-top: -34px;">
                                <p class="card-text text-center">Nikmati pencahayaan dinamis dengan berbagai efek RGB yang bisa disesuaikan langsung dari keyboard. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-12">
                        <div class="card shadow-sm card-fitur" style=" height: fit-content;">
                            <img class="fitur" src="img/keycaps.png" alt="" style="margin-top: -74px !important; width: 50%;">
                            <div class="card-body">
                                <p class="card-text text-center">Ganti switch tanpa solder kapan pun kamu mau. Uji berbagai feel mengetik dengan mudah dan cepat.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 col-12">
                            <img class="hayo" src="img/layout.png" alt="" style="z-index: 1; filter: drop-shadow(10px 0px 10px #222222); width: 50%;">
                        </div>
                        <div class="col-lg-9 col-sm-12 col-12 glass-card border-0 apa">
                            <div class="container text-light bruh">
                                <h2 class="text-shadow mb-3">Pilih Layout yang Sesuai Gaya Mengetikmu</h2>
                                <div class="d-flex mb-2">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #ff862e);color: #ff862e">60%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Compact dan ringan, tanpa tombol fungsi, panah, atau numpad. Cocok untuk kamu yang suka simple & hemat ruang.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #c0ff2e);color: #c0ff2e">65%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Tambah arrow keys dan navigasi dasar tanpa numpad. Ideal untuk pengguna kasual atau yang sering multitasking ringan.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #43d1a7);color: #43d1a7">75%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Dilengkapi F-keys, arrow, dan navigasi. Populer di kalangan produktif & content creator karena balance antara fitur & ukuran.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #b879ff);color: #b879ff">80%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Tenkeyless. Semua tombol kecuali numpad. Lebih luas untuk mouse, cocok untuk gamer dan desainer.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #ff2ea0);color: #ff2ea0">95%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Semua tombol penting tetap ada, tapi lebih padat dan ringkas. Gabungan power dan efisiensi ruang kerja.</p>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="left">
                                        <h1 style="filter: drop-shadow(-3px -2px 10px #ff2727);color: #ff2727">100%</h1>
                                    </div>
                                    <div class="right ms-2">
                                        <p>Layout full-size lengkap dengan F-keys, navigasi, dan numpad. Cocok untuk akuntan, profesional, atau pengguna spreadsheet berat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="px-2 mt-5 pt-3">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-1 mt-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <img src="img/logo-putih.png" width="100" alt=""> </a>
            </div>
            <span class="mb-3 mb-md-0 text-white">&copy; 2025 Company, Inc</span>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><i class="bi bi-instagram" style="width: 24px; color: white;"></i>
                        {{-- <use xlink:href="#instagram"></use>
                        </svg> --}}
                    </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>


    {{-- <p>halo</p> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('scrolled-header');
            } else {
                header.classList.remove('scrolled-header');
            }
        });
    </script>
    <script>
        (function() {
            var burger = document.querySelector('.burger-container'),
                header = document.querySelector('.header');

            burger.onclick = function() {
                header.classList.toggle('menu-opened');
            }
        }());
    </script>

</body>

</html>
