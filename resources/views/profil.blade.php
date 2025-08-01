<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        /* td {
            color: white;
        } */

        h1 {
            font-size: 30px;
            color: #000 !important;
            text-transform: uppercase;
            font-weight: 300;
            /* text-align: center; */
            /* margin-bottom: 15px; */
        }

        a {
            text-decoration: none;
        }

        .chckout {
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

        .chckout:hover {
            box-shadow: rgba(44, 132, 187, 0.35) 0 -25px 18px -14px inset, rgba(44, 125, 187, 0.25) 0 1px 2px, rgba(44, 137, 187, 0.25) 0 2px 4px, rgba(44, 108, 187, 0.25) 0 4px 8px, rgba(44, 115, 187, 0.25) 0 8px 16px, rgba(44, 120, 187, 0.25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }


        .ingfo {
            width: 16%;
            border-radius: 5px;
            /* margin-top: 10px; */
        }

        .col-12 {
            /* width: 90% !important; */
        }

        .row {
            margin-right: 0 !important;
            padding-left: 0 !important;
            margin-left: 0 !important;
            padding-right: 0 !important;
            margin-top: 18px;
        }

        .nav-pills .nav-link {
            background: #f5f5f5;
            color: black;
            border: 0;
            font-weight: 500;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show.nav-link {
            background-color: #6aa9fc !important;
        }

        .nav-pills .nav-link .nav-tolak .active,
        .nav-pills .show.nav-link.nav-tolak {
            background-color: #ff8731 !important;

        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: #2aabad;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        @media (max-width: 767px) {
            .walah {
                width: 85% !important;
                margin-top: 10px;
            }

            .ae {
                font-size: 14px !important;
            }

            .fofo {
                font-size: 12px !important;
            }

            .fifi {
                font-size: 16px !important;
                margin-top: -8px !important;
            }

            .ingfo {
                width: 35% !important;
                margin-top: 16px;
            }

            .nav-link {
                font-size: 14px !important;
                padding: 8px !important;
                width: 100% !important;
            }

            .nav-pills {
                width: 100% !important;
            }

            .col-3 {
                padding: 0 3px;
            }

        }

        @media (min-width: 767px) {
            .cuy {
                margin-left: -120px;
            }

            .awal {
                align-items: center
            }

            .bro {
                align-items: center !important;
            }

            .nav-link {
                width: 100%;
            }

        }
    </style>
</head>

<body style="">
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

    {{-- </div> --}}
    @if (Session::has('success'))
        <div id="alert-success" class="alert alert-success p-2 text-center" role="alert" style="top: 25%;left: 50%;transform: translateX(-50%);position: absolute;z-index: 99;">
            <i class="bi bi-check-circle-fill"></i>
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card h-100" style="border-radius: 0 0 25px 25px; background: #131720; ">
        <a href="/produk" style="position: absolute; z-index: 2; top: -2px; left: 10px;">
            <i class="bi bi-arrow-left-circle" style="font-size: 35px; color: white;"></i>
        </a>
        <div class="d-flex" style="margin-bottom: 140px;">
            <h1 class="ms-5 mt-2 text-white">Profil</h1>
        </div>
    </div>
    {{-- <p class="text-center" style="position: absolute; top: 10px; left: 45%;">{{ now()->format('d-m-Y ') }}</p> --}}

    <div class="px-3" style="margin-top: -120px;">
        <div class="card border-0 shadow px-3">
            <div class="d-fle" style="position: absolute; top: 10px; right: 10px;">
                {{-- <a href="/simpan" class="btn btn-light rounded-circle">
                    <i class="bi bi-bookmark"></i>
                </a> --}}
                <button class="btn btn-info rounded-circle" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-pen"></i>
                </button>
            </div>
            <div class="d-flex justify-content-start awal">
                <div>
                    <img class="walah" src="../img/akun/{{ $user->img }}" alt="" style="width: 30%; border-radius: 50px;">
                </div>
                <div class="cuy">
                    <h2 style="font-size: 20px; margin-top: 15px; margin-top: 3px;">{{ $user->name }}</h2>
                    <p style="margin-top: -12px; color: gray;">{{ $user->email }}</p>
                    <div class="d-flex gap-2">
                        <i class="bi bi-telephone" style="margin-top: -18px;"></i>
                        <p style="margin-top: -18px;">{{ $user->nomor }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <i class="bi bi-house-door" style="margin-top: -18px;"></i>
                        <p style="margin-top: -18px;">{{ $user->alamat }}</p>
                    </div>
                    {{-- <p>{{ now()->format('d-m-Y ') }}</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="bro d-flex gap-3  flex-column flex-md-row px-3" style="margin-top: 0px;">
                            <img class="ingfo" src="../img/buy.png" alt="">
                            <div>
                                <h2 class="fifi" style="font-size: 20px; margin-top: 15px; font-weight: 700;">{{ $buy }}</h2>
                                <p class="fofo" style="margin-top: -12px; font-weight: 500; color: #626262;">Total Pembelian</p>
                                {{-- <p class="fofo" style="font-weight: 500;font-size: 18px;color: #db872d;margin-top: -22px;">ahahha</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="bro d-flex gap-3  flex-column flex-md-row px-3" style="margin-top: 0px;">
                            <img class="ingfo" src="../img/money.png" alt="">
                            <div>
                                <h2 class="fifi" style="font-size: 20px; margin-top: 15px; font-weight: 700;">Rp. {{ number_format($total, 0, '.', '.') }}</h2>
                                <p class="fofo" style="margin-top: -12px; font-weight: 500; color: #626262;">Total Pengeluaran</p>
                                {{-- <p class="fofo" style="font-weight: 500;font-size: 18px;color: #db872d;margin-top: -22px;">ahahha</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="bro d-flex gap-3  flex-column flex-md-row  px-3" style="margin-top: 0px;">
                            <img class="ingfo" src="../img/save.png" alt="">
                            <div>
                                <h2 class="fifi" style="font-size: 20px; margin-top: 15px; font-weight: 700;">{{ $simpan }}</h2>
                                <p class="fofo" style="margin-top: -12px; font-weight: 500; color: #626262;">Total Markah</p>
                                {{-- <p class="fofo" style="font-weight: 500;font-size: 18px;color: #db872d;margin-top: -22px;">ahahha</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="bro d-flex gap-3  flex-column flex-md-row  px-3" style="margin-top: 0px;">
                            <img class="ingfo" src="../img/cart.png" alt="">
                            <div>
                                <h2 class="fifi" style="font-size: 20px; margin-top: 15px; font-weight: 700;">{{ $cart }}</h2>
                                <p class="fofo" style="margin-top: -12px; font-weight: 500; color: #626262;">Total Keranjang</p>
                                {{-- <p style="font-weight: 500;font-size: 18px;color: #db872d;margin-top: -22px;">ahahha</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-1">
            <i class="bi bi-bookmarks" style="font-size: 26px; margin-top: 5px;"></i>
            <h1 class="mt-2" style="font-weight: 500">Wish List</h1>
        </div>
        <section class="swiper mySwiper" style="margin-top: -8px;">
            <div class="swiper-wrapper" style="margin-bottom: 30px; margin-top: -20px;">
                @foreach ($fav as $item)
                    <div class="swiper-slide">
                        <div class="card container border-0 shadow-sm text-center h-100" style="width: fit-content;">
                            <img src="../img/produk/{{ $item->produk->varian[0]->img }}" alt="" style="width: 100%;">
                            <h2 class="ae" style="font-size: 16px; margin-top: 0px; font-weight: 700;">{{ $item->produk->nama }}</h2>
                            <p class="ea" style="margin-top: -12px; font-size: 14px; font-weight: 500; color: #626262;">Rp. {{ number_format($item->produk->harga, 0, '.', '.') }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- @endforeach --}}

            </div>
        </section>
    </div>
    <ul class="nav nav-pills mb-3 row" id="pills-tab" role="tablist" style="display: flex;
        justify-content: space-between; margin-top: -15px;">
        {{-- <section class="swiper mySwiper" style="margin-top: 0 !important;  margin-bottom: -30px;">
                <div class="swiper-wrapper" style="margin-top: 10px !important; margin-left: 12px;">
                    <div class="swiper-slide" style="width: 100% !important; margin-bottom: 0px !important;margin-left: -10px !important;"> --}}
        <li class="nav-item col-3" role="presentation" style="">
            <button class="nav-link active rounded-5 " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="margin: auto;">Semua</button>
        </li>
        {{-- </div> --}}
        {{-- <div class="swiper-slide" style="width: 100% !important; margin-bottom: 0px !important; margin-right: 5px !important;"> --}}
        <li class="nav-item col-3" role="presentation" style="">
            <button class="nav-link  rounded-5" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-siap" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="margin: auto;">Disiapkan</button>
        </li>
        {{-- </div> --}}
        {{-- <div class="swiper-slide" style="width: 100% !important; margin-bottom: 0px !important;"> --}}
        <li class="nav-item col-3" role="presentation">
            <button class="nav-link rounded-5 " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-kirim" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="margin: auto;">Dikirim</button>
        </li>
        {{-- </div> --}}
        {{-- <div class="swiper-slide" style="width: 100% !important; margin-bottom: 0px !important; margin-left: -8px;"> --}}
        <li class="nav-item col-3" role="presentation">
            <button class="nav-link nav-tolak  rounded-5 " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-selesai" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="margin: auto;">Selesai</button>
        </li>
        {{-- </div> --}}
        {{-- <div class="swiper-pagination"></div> --}}
        {{-- </div> --}}
        {{-- </section> --}}
    </ul>
    <div class="tab-content " id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div style="margin-bottom: 85px !important;">
                <div class="row">
                    @foreach ($beli as $item)
                        <div class="col-lg-4 col-12 col-md-6">
                            <a href="/Detail/{{ $item->id }}">
                                <div class="card mb-2 border-0 shadow">
                                    <div class="container">
                                        <div class="d-flex gap-3" style="margin-bottom: -3px;">
                                            {{-- <div style="margin-top: 15px;">
                                            <img src="img/{{ $item->image }}" class="rounded-3" width="50" alt="">
                                        </div> --}}
                                            <div style="margin-top: 10px;">
                                                <h6 style="font-size: 18px; font-weight: 700;">Rp. {{ number_format($item->total, 0, '.', '.') }}</h6>
                                                <h6 style="font-size: 16px; font-weight: 500; color: #dfaa46; margin-top: -10px;">{{ $item->detail?->sum('jumlah') ?? 0 }} Item</h6>
                                                <p style="margin-top: -10px; color: silver;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                                            </div>
                                            <div style="position: absolute; top: 0px; right: 13px;">
                                                <div class="alert rounded-5 text-center" style="width: 106px;padding: 1px;margin-top: 7px; font-weight: 500; {{ $item->status == 'disiapkan' ? 'background:#ffefd4; color:#ab7b25;' : ($item->status == 'dikirim' ? 'background:#ede1ff; color:#6c25ab;' : ($item->status == 'selesai' ? 'background:#d5ffd4; color:#25ab2a;' : '')) }}"> {{ ucfirst($item->status) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- </div> --}}
        <div class="tab-pane fade" id="pills-siap" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div style="margin-bottom: 85px !important;">
                <div class="row">
                    @foreach ($beli as $item)
                        @if ($item->status === 'disiapkan')
                            <div class="col-lg-4 col-12 col-md-6">
                                <a href="/Detail/{{ $item->id }}">
                                    <div class="card mb-2 border-0 shadow">
                                        <div class="container">
                                            <div class="d-flex gap-3" style="margin-bottom: -3px;">
                                                {{-- <div style="margin-top: 15px;">
                                            <img src="img/{{ $item->image }}" class="rounded-3" width="50" alt="">
                                        </div> --}}
                                                <div style="margin-top: 10px;">
                                                    <h6 style="font-size: 18px; font-weight: 700;">Rp. {{ number_format($item->total, 0, '.', '.') }}</h6>
                                                    <h6 style="font-size: 16px; font-weight: 500; color: #dfaa46; margin-top: -10px;">{{ $item->detail?->sum('jumlah') ?? 0 }} Item</h6>
                                                    <p style="margin-top: -10px; color: silver;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                                                </div>
                                                <div style="position: absolute; top: 0px; right: 13px;">
                                                    <div class="alert rounded-5 text-center" style="width: 106px;padding: 1px;margin-top: 7px; font-weight: 500; background:#ffefd4; color:#ab7b25;"> {{ ucfirst($item->status) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-kirim" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div style="margin-bottom: 85px !important;">
                <div class="row">
                    @foreach ($beli as $item)
                        @if ($item->status === 'dikirim')
                            <div class="col-lg-4 col-12 col-md-6">
                                <a href="/Detail/{{ $item->id }}">
                                    <div class="card mb-2 border-0 shadow">
                                        <div class="container">
                                            <div class="d-flex gap-3" style="margin-bottom: -3px;">
                                                {{-- <div style="margin-top: 15px;">
                                            <img src="img/{{ $item->image }}" class="rounded-3" width="50" alt="">
                                        </div> --}}
                                                <div style="margin-top: 10px;">
                                                    <h6 style="font-size: 18px; font-weight: 700;">Rp. {{ number_format($item->total, 0, '.', '.') }}</h6>
                                                    <h6 style="font-size: 16px; font-weight: 500; color: #dfaa46; margin-top: -10px;">{{ $item->detail?->sum('jumlah') ?? 0 }} Item</h6>
                                                    <p style="margin-top: -10px; color: silver;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                                                </div>
                                                <div style="position: absolute; top: 0px; right: 13px;">
                                                    <div class="alert rounded-5 text-center" style="width: 106px;padding: 1px;margin-top: 7px; font-weight: 500; background:#ede1ff; color:#6c25ab;"> {{ ucfirst($item->status) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-selesai" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div style="margin-bottom: 85px !important;">
                <div class="row">
                    @foreach ($beli as $item)
                        @if ($item->status === 'selesai')
                            <div class="col-lg-4 col-12 col-md-6">
                                <a href="/Detail/{{ $item->id }}">
                                    <div class="card mb-2 border-0 shadow">
                                        <div class="container">
                                            <div class="d-flex gap-3" style="margin-bottom: -3px;">
                                                {{-- <div style="margin-top: 15px;">
                                            <img src="img/{{ $item->image }}" class="rounded-3" width="50" alt="">
                                        </div> --}}
                                                <div style="margin-top: 10px;">
                                                    <h6 style="font-size: 18px; font-weight: 700;">Rp. {{ number_format($item->total, 0, '.', '.') }}</h6>
                                                    <h6 style="font-size: 16px; font-weight: 500; color: #dfaa46; margin-top: -10px;">{{ $item->detail?->sum('jumlah') ?? 0 }} Item</h6>
                                                    <p style="margin-top: -10px; color: silver;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                                                </div>
                                                <div style="position: absolute; top: 0px; right: 13px;">
                                                    <div class="alert rounded-5 text-center" style="width: 106px;padding: 1px;margin-top: 7px; font-weight: 500;background:#d5ffd4; color:#25ab2a;"> {{ ucfirst($item->status) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah ke Keranjang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/edit/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <img id="output" src="../img/akun/{{ $user->img }}" alt="user-avatar" class="d-flex justify-content-center rounded" width="155" height="155" style="margin: auto;" />
                        <label for="upload" class="btn btn-primary d-flex justify-content-center my-2" tabindex="0">
                            <span class="d-none text-center d-sm-block">Ubah Foto Profil</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" name="img" class="account-file-input" value="{{ $user->img }}" hidden onchange="loadFile(event)" />
                        </label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ubah Password (Min 8 Karakter)">
                            <span class="input-group-text">
                                <a href="#" onclick="togglePasswordVisibility()" style="text-decoration: none; color: inherit;">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama</span>
                            {{-- <span class="input-group-text">0.00</span> --}}
                            <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            {{-- <span class="input-group-text">0.00</span> --}}
                            <input type="text" class="form-control" value="{{ $user->email }}" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                            {{-- <span class="input-group-text">0.00</span> --}}
                            <input type="text" class="form-control" value="{{ $user->nomor }}" name="nomor">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                            <textarea class="form-control" aria-label="With textarea" name="alamat">{{ $user->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            const pass = document.getElementById("password");
            pass.type = pass.type === "password" ? "text" : "password";
        }
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            centeredSlides: false,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2, // Untuk HP
                },
                769: {
                    slidesPerView: 6, // Untuk Laptop ke atas
                },
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert-error").remove()
                $("#alert-success").remove()
                // $("div.alert").remove();
            }, 3000); // 5 secs

        });
    </script>
    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
</body>

</html>
