<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .screen__background {
            border-radius: 25px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            z-index: 0;
            /* -webkit-clip-path: inset(0 0 0 0); */
            /* clip-path: inset(0 0 0 0); */
        }

        .screen__background__shape {
            transform: rotate(39deg);
            position: absolute;
            border-radius: 25px;
        }

        .screen__background__shape4 {
            height: 785px;
            width: 639px;
            background: #ededed;
            top: -35px;
            left: -320px;
            border-radius: 0;
        }

        .card-detail {
            background: rgba(255, 255, 255, 0.05);
            /* border: 1px solid rgba(255, 255, 255, 0.1); */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 20px;
            color: white;
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 90% !important;
            /* width: 110% !important; */
        }

        a {
            text-decoration: none;
        }

        .swiper-slide {
            width: 125px !important;
        }

        .row>* {
            padding-right: 0 !important;
        }

        @media (min-width: 768px) {
            .responsive-row {
                max-width: 100%;
            }
        }

        @media (max-width: 767.98px) {
            .responsive-row {
                max-width: none;
            }
        }
    </style>
</head>

<body style="background-color: #131720;">

    @if ($errors->any())
        <div id="alert-error" class="alert alert-danger p-2" style="top: 3%;left: 50%;transform: translateX(-50%);position: absolute;z-index: 99;">
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
        <div id="alert-success" class="alert alert-success p-2 text-center" role="alert" style="top: 3%;left: 50%;transform: translateX(-50%);position: absolute;z-index: 99;">
            <i class="bi bi-check-circle-fill"></i>
            {{ Session::get('success') }}
        </div>
    @endif

    {{-- <p>halo</p> --}}
    <img src="../img/garis.png" alt="" style="position: absolute; z-index: 1; top: 0; width: 100%;">
    <a href="/produk" style="position: absolute; z-index: 2; top: -2px; left: 10px;">
        <i class="bi bi-arrow-left-circle" style="font-size: 35px; color: black;"></i>
    </a>
    {{-- <img src="img/blur.png" alt="" style="position: absolute; z-index: 1; top: 0; width: 100%;"> --}}
    <div class="container" style="max-width: 100%;">
        <div class="row align-items-center g-5 responsive-row" style="position: absolute; z-index: 1; ">
            <div class="col-11 col-sm-12 col-lg-6" style="margin: auto;">
                <img id="mainImage" src="../img/produk/{{ $produk->varian[0]->img }}" class="d-block mx-lg-auto img-fluid" alt="Keyboard Besar" loading="lazy" style="margin: auto; filter: drop-shadow(0px -5px 35px #ffff);">
                <section class="swiper mySwiper" style="margin-top: -60px;">
                    <div class="swiper-wrapper">
                        @foreach ($produk->varian as $item)
                            <div class="swiper-slide">
                                <div class="card container border-0 shadow" style="width: fit-content;">
                                    <img src="../img/produk/{{ $item->img }}" alt="" style="width: 100px;">
                                    <p class="text-center">{{ $item->warna }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-12" style="padding: 0 20px 0 40px !important;">
                <div class="card card-detail">
                    <div class="d-flex" style="position: absolute; top: 10px; right: 10px;">
                        @if (Auth::user())
                            @php
                                $sudahFavorit = $fav->has($produk->id);
                            @endphp
                            <a href="{{ $sudahFavorit ? '/tidaksimpan' : '/simpan' }}/{{ $produk->id }}" class="btn btn-light w-50" style="line-height: 1,5; border-radius: 50px; border: 0;" type="button">
                                <i class="{{ $sudahFavorit ? 'bi bi-bookmark-fill' : 'bi bi-bookmark' }}"></i>
                            </a>
                        @else
                            @php
                                $sudahFavorit = $fav->has($produk->id);
                            @endphp
                            <a href="{{ $sudahFavorit ? '/tidaksimpan' : '/simpan' }}/{{ $produk->id }}" class="btn btn-light w-50" style="line-height: 1,5; border-radius: 50px; border: 0; pointer-events: none;" type="button">
                                <i class="{{ $sudahFavorit ? 'bi bi-bookmark-fill' : 'bi bi-bookmark' }}"></i>
                            </a>
                        @endif
                        <button class="btn btn-info rounded-circle" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $produk->id }}">
                            <i class="bi bi-cart3"></i>
                        </button>
                    </div>
                    <h1 class="display-5 fw-bold text-white  lh-1 mb-3" style="padding: 0 80px 0 0;">{{ $produk->nama }}</h1>
                    <p class="lead">{{ $produk->deskripsi }}</p>
                    <div class="d-flex gap-2">
                        <i class="bi bi-keyboard" style="line-height: 1"></i>
                        <p>Layout : {{ $produk->layout }}</p>
                        {{-- <i class="bi bi-star-half" style="line-height: 1"></i>
                        <p>Rating : 9/10</p> --}}
                    </div>
                    @foreach ($produk->fitur as $fitur)
                        <div class="d-flex gap-2">
                            <i class="bi bi-caret-right-fill"></i>
                            <p>{{ $fitur->nama }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
    </div>



    <div class="modal fade" id="exampleModal{{ $produk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah ke Keranjang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('keranjang.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Pilih Warna</label>
                            <select class="form-select" id="inputGroupSelect01" name="id">
                                <option selected>Pilih...</option>
                                @foreach ($produk->varian as $v)
                                    <option value="{{ $v->id }}">{{ $v->warna }}</option>
                                @endforeach
                                {{-- @foreach ($varian as $item) --}}
                                {{-- <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option> --}}
                                {{-- @endforeach --}}
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Jumlah</span>
                            {{-- <span class="input-group-text">0.00</span> --}}
                            <input type="number" class="form-control" value="1" min="1" name="jumlah">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        @if (Auth::user())
                            <button type="submit" class="btn btn-primary"><i class="bi bi-cart3" style="line-height: 0"></i></button>
                        @else
                            <button type="submit" class="btn btn-secondary" disabled><i class="bi bi-cart3" style="line-height: 0"></i></button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- @include('tambahProduk') --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2.5,
            centeredSlides: true,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        // Ambil semua gambar kecil
        const thumbnails = document.querySelectorAll('.swiper-slide img');
        const mainImage = document.getElementById('mainImage');

        thumbnails.forEach(img => {
            img.addEventListener('click', () => {
                const newSrc = img.getAttribute('src'); // ambil path gambar kecil
                mainImage.setAttribute('src', newSrc); // ubah gambar utama
            });
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
</body>

</html>
