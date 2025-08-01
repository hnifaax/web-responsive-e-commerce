<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
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

        .form-control:focus {
            box-shadow: none !important;
        }

        .form-control {
            transition: none !important;
        }

        .card-produk {
            background: rgba(255, 255, 255, 0.05);
            /* border: 1px solid rgba(255, 255, 255, 0.1); */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 20px;
            color: white;
            margin-top: 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 90% !important;
        }

        .card-produk .body {
            /* flex-grow: 1; */
        }


        .tex {
            margin-top: 2px;
            margin-left: 5px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        img {
            width: 100%;
        }

        .form-check-input:checked {
            background-color: #0c79a3;
            border-color: #5198ff;
            filter: drop-shadow(0px 0 6px #0c79a3);
        }

        .form-select:focus {
            box-shadow: none !important;
            border: 1;
        }

        @media (min-width: 990px) {
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
        }
    </style>
</head>

<body style="background-color: #131720;">
    @if ($errors->any())
        <div id="alert-error" class="alert alert-danger p-2" style="top: 25%;left: 50%;transform: translateX(-50%);position: absolute;z-index: 99;">
            <ul>
                {{-- <li>form id kosong</li>
            <li>form id kosong</li> --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div id="alert-success" class="alert alert-success p-2 text-center" role="alert" style="top: 25%;left: 50%;transform: translateX(-50%);position: absolute;z-index: 99;">
            <i class="bi bi-check-circle-fill"></i>
            {{ Session::get('success') }}
        </div>
    @endif
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
            </a>
        </div>
        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item "><a href="/" class="nav-link px-2 rounded-5">Beranda</a></li>
            <li class="nav-item"><a href="/produk" class="nav-link active px-2 rounded-5">Produk</a></li>
        </ul>
        <div class="col-md-3 text-end d-flex justify-content-end gap-2" style="line-height: 0;">
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
    <div class="px-2">
        <div class="card container" style="margin-top: 80px; border-radius: 35px;">
            <form action="" method="GET" role="search">
                <div class="container py-2 d-flex flex-column flex-md-row gap-2 align-items-stretch">
                    <div class="d-flex gap-2 w-100">
                        <a href="/produk">
                            <i class="bi bi-search" style="font-size: 26px;color: #0c79a3;line-height: 1.5;"></i>
                        </a>
                        <input class="form-control form-control-lg border-0 w-100" type="text" placeholder="Cari Barang..." aria-label=".form-control-lg example" value="{{ request('pencarian') }}" name="pencarian">
                    </div>
                    <div class="d-flex gap-2 w-100">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="checkbox" value="1" id="checkDefault" style="border-radius: 50px ;" name="knob" {{ request('knob') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="checkDefault" style="margin-left: 5px;">
                                Knob
                            </label>
                        </div>
                        <select class="form-select w-100" aria-label="Default select example" style="width: 25%;" name="filter">
                            {{-- <option selected>Pilih Layout</option> --}}
                            <option value="semua" {{ request('filter') == 'semua' ? 'selected' : '' }}>Semua Layout</option>
                            <option value="60%" {{ !is_null(request('filter')) && request('filter') == '60%' ? 'selected' : '' }}>60%</option>
                            <option value="65%" {{ request('filter') == '65%' ? 'selected' : '' }}>65%</option>
                            <option value="75%" {{ request('filter') == '75%' ? 'selected' : '' }}>75%</option>
                            <option value="80%" {{ request('filter') == '80%' ? 'selected' : '' }}>80%</option>
                            <option value="95%" {{ request('filter') == '95%' ? 'selected' : '' }}>95%</option>
                            <option value="100%" {{ request('filter') == '100%' ? 'selected' : '' }}>100%</option>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 rounded-5 border-0 me-2" style="filter: drop-shadow(2px 1px 5px #0c79a3); background: #0c79a3; width: 40% !important; font-size: 20px;">cari</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="container mt-0">
        <div class="row">
            @foreach ($varian as $item)
                <div class="col-lg-3 col-sm-6">
                    <a href="/detailProduk/{{ $item->produk_id }}" style="text-decoration: none;">
                        <div class="card card-produk ">
                            <img src="img/produk/{{ $item->img }}" alt="" style="filter: drop-shadow(0px -5px 75px #2d8ffd); margin-top: -50px">
                            <div class="body">
                                <h2 style="font-size: 20px; margin-top: -10px; font-weight: 800;">{{ $item->produk->nama }}</h2>
                                <div class="d-flex gap-3" style="margin-top: -10px;">
                                    <div class="d-flex">
                                        <i class="bi bi-keyboard" style="color: #fe7eff;"></i>
                                        <p class="tex">{{ $item->produk->layout }}</p>
                                    </div>
                                    {{-- <div class="d-flex">
                                        <i class="bi bi-star-half" style="color: #ffee00"></i>
                                        <p class="tex">4.5 / 5</p>
                                    </div> --}}
                                </div>
                                <p style="font-size: 18px; margin-top: -18px; font-weight: 600;">Rp. {{ number_format($item->produk->harga, 0, '.', '.') }}</p>
                            </div>
                            @if (Auth::user())
                                <div class="d-flex gap-2 mt-auto">
                                    @php
                                        $sudahFavorit = $fav->has($item->produk_id);
                                    @endphp
                                    <a href="{{ $sudahFavorit ? '/tidaksimpan' : '/simpan' }}/{{ $item->produk_id }}" class="btn btn-light w-50" style="line-height: 0; border-radius: 10px; border: 0;" type="button">
                                        <i class="{{ $sudahFavorit ? 'bi bi-bookmark-fill' : 'bi bi-bookmark' }}"></i>
                                    </a>
                                    <button class="btn w-50" style="line-height: 0; border-radius: 10px; border: 0; background: #193f93; color: white;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                        <i class="bi bi-cart-check"></i>
                                    </button>
                                </div>
                            @else
                                <div class="d-flex gap-2 mt-auto">
                                    <a href="/simpan" class="btn btn-secondary w-50" style="line-height: 0; border-radius: 10px; border: 0;  pointer-events: none;" type="button">
                                        <i class="bi bi-bookmark"></i>
                                    </a>
                                    <button class="btn w-50" style="line-height: 0; border-radius: 10px; border: 0; background: #193f93; color: white;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                        <i class="bi bi-cart-check"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="mt-3 px-3">
                {{ $varian->appends(request()->query())->links('pagination::bootstrap-5') }}
            </div>
        </div>
        {{-- </a> --}}
    </div>

    @include('tambahDaftar')



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert-error").remove()
                $("#alert-success").remove()
                $("div.alert").remove();
            }, 3000); // 5 secs

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
