<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
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
            color: #fff;
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

        .sticky-col {
            position: sticky;
            left: -16px;
            z-index: 2;
            /* agar tetap di atas kolom lain */
            background-color: #0b132b;
            /* sesuaikan agar tidak transparan */
        }
    </style>
</head>

<body style="background: linear-gradient(to right, #131720, #183356);">
    {{-- <p>halo</p> --}}
    {{-- <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0 mb-4 px-3" style="position: fixed; z-index: 999; top: 0;">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="img/logo-putih.png" alt="" style="width: 40%;">
            </a>
        </div>
        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item "><a href="/" class="nav-link px-2 rounded-5">Beranda</a></li>
            <li class="nav-item"><a href="/produk" class="nav-link active px-2">Produk</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <a href="/profil" type="button" class="btn btn-primary rounded-circle me-2">
                <i class="bi bi-person"></i>
            </a>
            <a href="/keranjang" type="button" class="btn btn-primary rounded-circle">
                <i class="bi bi-cart3"></i>
            </a>
        </div>
    </header> --}}
    <a href="/produk" style="position: absolute; z-index: 2; top: -2px; left: 10px;">
        <i class="bi bi-arrow-left-circle" style="font-size: 35px; color: white;"></i>
    </a>
    <h1 class="ms-5 mt-2 text-white">KERANJANG SAYA</h1>


    <div class=" mt-3 table-responsive px-3" style="margin-bottom: 85px;">
        <table class="table table-striped table-hover border-0">
            <thead>
                <tr class="table-light">
                    <th class="sticky-col te" style="border-radius: 20px 0 0 0; background: white !important;"></th>
                    <th class="text-center">Produk </th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Warna</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Sub Total</th>
                    <th class="text-center" style="border-radius: 0 20px 0 0;">Aksi</th>
                </tr>
            </thead>
            <tbody style="background: #131720 !important;">
                @php
                    for ($row = 1; $row <= 0; $row++);
                    $total = 0;
                @endphp
                @foreach ($keranjang as $item)
                    <tr>
                        <td class="text-white sticky-col" style="border-bottom: 0; border-top: 1; background: #131720 !important;">
                            <a href="{{ $item->dipilih == '1' ? '/tidak' : '/iya' }}/{{ $item->id }}" type="button" class="btn btn-primary rounded-2" style="line-height: 0; padding: 3px;">
                                <i class="{{ $item->dipilih == '1' ? 'bi bi-check-square-fill' : 'bi bi-square' }}"></i>
                            </a>
                        </td>
                        <td class="text-white text-center" style="border-bottom: 0; border-top: 1;"><img src="../img/produk/{{ $item->varian->img }}" alt="" style="width: 70px;"><br>Stok : {{ $item->varian->stok }}</td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">{{ $item->varian->produk->nama }}</td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">{{ $item->varian->warna }}</td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">
                            <div class="d-flex align-items-center justify-content-center gap-2 flex-nowrap">
                                <p>Rp.</p>
                                <p> {{ number_format($item->varian->produk->harga, 0, '.', '.') }}
                                </p>
                            </div>
                        </td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">
                            <div class="d-flex align-items-center justify-content-center gap-2 flex-nowrap">
                                @if ($item->jumlah == 1)
                                    <a href="/kurangjmlh/{{ $item->id }}" style="pointer-events: none;">
                                        <button class="btn " style="line-height: 0; border-radius: 50px; padding: 2px; background: #65bde9;" disabled>
                                            <i class="bi bi-dash" style="font-weight: 600; font-size: 20px;"></i>
                                        </button>
                                    </a>
                                @else
                                    <a href="/kurangjmlh/{{ $item->id }}">
                                        <button class="btn " style="line-height: 0; border-radius: 50px; padding: 2px; background: #65bde9;">
                                            <i class="bi bi-dash" style="font-weight: 600; font-size: 20px;"></i>
                                        </button>
                                    </a>
                                @endif
                                {{ $item->jumlah }}
                                @if ($item->jumlah == $item->varian->stok)
                                    <a href="/tambahjmlh/{{ $item->id }}" style="pointer-events: none;">
                                        <button class="btn " style="line-height: 0; border-radius: 50px; padding: 2px; background: #2778df;" disabled>
                                            <i class="bi bi-plus" style="font-weight: 600; font-size: 20px;"></i>
                                        </button>
                                    </a>
                                @else
                                    <a href="/tambahjmlh/{{ $item->id }}">
                                        <button class="btn " style="line-height: 0; border-radius: 50px; padding: 2px; background: #2778df;">
                                            <i class="bi bi-plus" style="font-weight: 600; font-size: 20px;"></i>
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">
                            <div class="d-flex align-items-center justify-content-center gap-2 flex-nowrap">
                                <p>Rp.</p>
                                @php
                                    $hasil = $item->varian->produk->harga * $item->jumlah;
                                    if ($item->dipilih == '1') {
                                        $total += $hasil;
                                    }
                                @endphp
                                <p> {{ number_format($hasil, 0, '.', '.') }}
                                </p>
                            </div>
                        </td>
                        <td class="text-white" style="border-bottom: 0; border-top: 1;">
                            {{-- <a href="{{ $item->dipilih == '1' ? '/tidak' : '/iya' }}/{{ $item->id }}" type="button" class="btn btn-primary rounded-2 mt-1" style="line-height: 0; padding: 7px;">
                                <i class="{{ $item->dipilih == '1' ? 'bi bi-check-square-fill' : 'bi bi-check-square' }}"></i> 
                            </a> --}}
                            <a href="/hapuskeranjang/{{ $item->id }}" type="button" class="btn btn-danger rounded-2 mt-1" style="line-height: 0; padding: 7px;">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card" style="position: fixed; bottom: 0; width: 100%; border-radius: 25px 25px 0 0; z-index: 99;">
        <div class="d-flex px-4 py-1 gap-5 align-items-center justify-content-between ">
            <div class="align-items-center">
                <h2 style="font-size: 30px; font-weight:700;">Total</h2>
                <p style="color: gray; margin-bottom: auto;font-size: 16px;margin-top: -15px; font-weight: 500;">Rp. {{ number_format($total, 0, '.', '.') }}</p>
            </div>
            <a href="/checkout" class="btn chckout">Check Out</a>
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
