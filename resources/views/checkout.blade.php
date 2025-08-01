<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

        /* .sticky-col {
            position: sticky;
            left: -16px;
            z-index: 2;
        background-color: #0b132b;
        }

        */
        .ingfo {
            font-weight: 600;
            font-size: 14px;
        }

        .iya {
            font-size: 14px;
            color: gray;
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

        @media (max-width: 767px) {
            .walah {
                width: 85% !important;
            }
        }

        @media (min-width: 768px) {
            .cuy {
                margin-left: -120px;
            }
        }
    </style>
</head>

<body style="background: #ebebeb">

    <a href="/keranjang" style="position: absolute; z-index: 2; top: -2px; left: 10px;">
        <i class="bi bi-arrow-left-circle" style="font-size: 35px; color: black;"></i>
    </a>
    <div class="d-flex">
        <h1 class="ms-5 mt-2">CHECK OUT</h1>
    </div>
    {{-- <p class="text-center" style="position: absolute; top: 10px; left: 45%;">{{ now()->format('d-m-Y ') }}</p> --}}

    <div class="px-3" style="margin-top: 18px;">
        <div class="card border-0 shadow px-3">
            <div class="d-flex justify-content-start align-items-center">
                <div>
                    <img class="walah" src="../img/akun/{{ Auth::user()->img }}" alt="" style="width: 30%; border-radius: 50px;">
                </div>
                <div class="cuy">
                    <h2 style="font-size: 22px; margin-top: 3px;">{{ Auth::user()->name }}</h2>
                    <p style="margin-top: -12px; color: gray;">{{ Auth::user()->email }}</p>
                    <p style="margin-top: -18px;">{{ Auth::user()->alamat }}</p>
                    {{-- <p>{{ now()->format('d-m-Y ') }}</p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @php
            $total = 0;
        @endphp
        @foreach ($pesan as $item)
            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="card h-100 border-0 shadow">
                    <div class="d-flex gap-3 align-items-center">
                        <img src="../img/produk/{{ $item->varian->img }}" alt="" style="width: 150px;">
                        <div style="padding-right: 10px;">
                            <h2 style="font-size: 22px; font-weight: 700;">{{ $item->varian->produk->nama }}</h2>
                            <p style="margin-top: -12px; font-weight: 500; color: #626262;">Warna : {{ $item->varian->warna }}</p>
                            <p style="font-weight: 500;font-size: 18px;color: #db872d;margin-top: -22px;">Rp. {{ number_format($item->varian->produk->harga, 0, '.', '.') }}</p>
                        </div>
                    </div>
                    @php
                        $hasil = $item->varian->produk->harga * $item->jumlah;
                        if ($item->dipilih == '1') {
                            $total += $hasil;
                        }
                    @endphp
                    <div class="card-footer" style="margin-top: -18px;">
                        <div class="d-flex justify-content-between">
                            <p>Jumlah : {{ $item->jumlah }}</p>
                            <p>Rp. {{ number_format($hasil, 0, '.', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="px-3" style="margin-bottom: 100px;">
        <div class="card px-3 py-2 border-0 shadow">
            <div class="d-flex justify-content-between">
                <p class="ingfo">Metode pembayaran</p>

                <p class="ya">COD</p>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: -12px;">
                <p class="ingfo">Sub total pemesanan</p>
                <p class="ya">Rp. {{ number_format($total, 0, '.', '.') }}</p>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: -12px;">
                <p class="ingfo">Biaya pengiriman</p>
                <p class="ya">Rp. 20.000</p>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: -12px;">
                <p class="ingfo">Biaya pelayanan</p>
                <p class="ya">Rp. 8.000</p>
            </div>
        </div>
    </div>

    <div class="card border-0 sticky-bottom" style="position: fixed; bottom: 0; width: 100%; border-radius: 25px 25px 0 0;">
        <div class="d-flex px-4 py-1 gap-5 align-items-center justify-content-between justify-content-lg-end ">
            <div class="align-items-center">
                <p style="color: gray; font-size: 14px; font-weight: 500;">Total</p>
                <h2 style="font-size: 18px; font-weight:700; margin-top: -16px;margin-bottom: auto; color: #1d7e9d;">Rp. {{ number_format($total + 20000 + 8000, 0, '.', '.') }}</h2>
            </div>
            <a href="/pesan" class="btn chckout">Check Out</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
