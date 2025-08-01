<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    {{-- <meta name="description" content="" /> --}}

    <title>Dashboard</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../img/logo-putih.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Mukta:wght@300&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/vendor/css/theme-default.css" />
    <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.css" />

    <style>
        .apexcharts-toolbar {
            display: none !important;
        }

        .apexcharts-legend {
            display: none !important;
        }

        .apexcharts-legend-text {
            display: none !important;
        }
    </style>
</head>

<body style="user-select: none">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo my-2">
                    <a href="index.html" class="app-brand-link">
                        <span>
                            <img src="../img/logo-hitam.png" alt="" style="width: 100%;">
                        </span>
                        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2 mt-3"> PILIKADES</span> --}}
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <ul class="menu-inner py-1 mt-4">
                    <!-- Dashboard -->
                    <li class="menu-item active" style="margin-top: 0px !important;">
                        <a href="/admin/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase" style="    margin-top: 4px !important; margin-bottom: -6px">
                        <span class="menu-header-text">Halaman</span>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/produk" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Tables">Manajemen Produk</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/pengguna" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Tables">Manajemen Pengguna</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/pesanan" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cart"></i>
                            <div data-i18n="Tables">Manajemen Pesanan</div>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme mb-4" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex justify-content-between align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav d-grid align-items-center mt-3">
                            <p class=" mb-2" style="font-family: 'Mukta', sans-serif; font-weight: 60 !important; user-select: none; color: rgb(203, 203, 203); font-size: 14px">
                                <i>Selamat Datang Admin,</i>
                            </p>
                            <h6 class="card-title" style="margin-top: -11px;"> {{ Auth::user()->name }}</h6>
                        </div>
                        <!-- /Search -->
                        <div class="d-flex justify-content-center mx-auto">
                            {{-- {{ $waktu }} --}}
                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar">
                                        <img src="../img/akun/{{ Auth::user()->img }}" width="30" height="40" class="w-px-40  rounded-circle" />

                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    {{-- @if (Auth::user()->role == 'Admin') --}}
                                    {{-- <li>
                                        <a class="dropdown-item" href="/admin/profil">
                                            <i class='bx bx-user-circle'></i>
                                            <span>Profil Akun</span>
                                        </a>
                                    </li> --}}
                                    {{-- @endif --}}
                                    <li>
                                        <a class="dropdown-item" href="/logout">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;">
                                                <path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"></path>
                                                <path d="M11 2h2v10h-2z"></path>
                                            </svg>
                                            <span class="align-middle">Keluar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <a href="/admin/produk">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between">

                                                <div class="avatar flex-shrink-0">
                                                    <img src="../img/box.png" alt="Credit Card" class="rounded" />
                                                </div>
                                                <h3 class="card-title text-nowrap mb-1 mt-2">{{ $produk }}</h3>

                                            </div>
                                            <h6 class="fw-semibold d-block mb-0 mt-2">Jumlah Produk</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <a href="/admin/pengguna">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class=" d-flex align-items-start justify-content-between">

                                                <div class="avatar flex-shrink-0">
                                                    <img src="../img/user.png" alt="chart success" class="rounded" />
                                                </div>

                                                <h3 class="card-title text-nowrap mb-2 mt-2">{{ $user }}</h3>

                                            </div>
                                            <h6 class="fw-semibold d-block mb-0 mt-2" style="text-decoration: none;">Jumlah Pengguna</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-6 mb-4">
                                <a href="/admin/pesanan">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class=" d-flex align-items-start justify-content-between">

                                                <div class="avatar flex-shrink-0">
                                                    <img src="../img/cart.png" alt="Credit Card" class="rounded" />
                                                </div>
                                                <h3 class="card-title text-nowrap mb-2 mt-2">{{ $pesanan }}</h3>
                                            </div>
                                            <h6 class="fw-semibold d-block mb-0 mt-2">Jumlah Pesanan</h6>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            {{-- <div class="col-lg-3 col-6 mb-4">
                                <a href="/admin/pemilih">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class=" d-flex align-items-start justify-content-between">

                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/suara.png" alt="Credit Card" class="rounded" />
                                                </div>

                                                <h3 class="card-title mb-2 mt-2">100</h3>


                                            </div>

                                            <h6 class="fw-semibold d-block mb-0 mt-2">Jumlah ...?</h6>
                                        </div>

                                    </div>
                                </a>
                            </div> --}}
                        </div>
                        <div class="card mb-5">
                            <h5 class="text-center mt-2">Pesanan Baru</h5>
                            <div class="table-responsive text-nowrap" id="horizontal-example">
                                <table class="table" id="example">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal Beli</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Nama Pembeli</th>
                                            <th class="text-center">Nomor Pembeli</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center"></th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">

                                        @foreach ($pesan as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</>
                                                    {{-- <td class="text-center"><img src="../img/akun/{{ $item->img }}" class="rounded-3 me-3" alt="" style="width: 80%;"></td> --}}
                                                <td> <strong>{{ $item->tanggal }}</strong></td>
                                                <td>Rp. {{ number_format($item->total, 0, '.', '.') }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->user->nomor }}</td>
                                                <td>
                                                    @if ($item->status == 'disiapkan')
                                                        <span class="badge bg-label-warning">Disiapkan</span>
                                                    @elseif($item->status == 'dikirim')
                                                        <span class="badge bg-label-primary">Dikirim</span>
                                                    @else
                                                        <span class="badge bg-label-success">Selesai</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="/kirim/{{ $item->id }}" class="btn btn-primary">Kirim</a>
                                                </td>
                                                <td class="text-center">
                                                    <a type="button" class="dropdown-item" href="/admin/detail/{{ $item->id }}"><i class='bx bx-show'></i>Lihat Data</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card mb-3">
                                    <h5 class="text-center mt-2">Jumlah Pesanan Per-Minggu</h5>
                                    <div id="uang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card">
                                    <h5 class="text-center mt-2">10 Produk Paling Laris</h5>
                                    <div id="produk">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme mt-4 mb-2">
                            <div class="container-xxl d-flex flex-wrap justify-content-center flex-md-row flex-column">
                                <div class="mb-0 mb-md-0">
                                    &copy; 2025 Copyright, All rights reserved

                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/vendor/js/helpers.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.layout-menu-toggle');

            if (menuToggle) {
                menuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Toggle class pada <html> agar sidebar bisa dibuka/tutup
                    document.documentElement.classList.toggle('layout-menu-expanded');
                });
            }
        });
    </script>

    <script>
        var options = {
            chart: {
                height: 280,
                type: "area"
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                name: "Total Pemesanan",
                data: @json($total)
            }],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: @json($tanggal)
            }

        };

        var chart = new ApexCharts(document.querySelector("#uang"), options);

        chart.render();
    </script>

    <script>
        var options = {
            series: [{
                name: 'Terjual',
                data: @json($jumlahTerjual)
            }],
            chart: {
                height: 350,
                type: 'bar',
            },
            colors: ['#40e1bd'], // <-- warna tiap bar
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    dataLabels: {
                        position: 'top',
                    },
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val + "x";
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: @json($namaProduk),
                labels: {
                    show: false // menyembunyikan label produk
                },
                tooltip: {
                    enabled: true // tetap tampil saat hover
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    formatter: function(val) {
                        return val + "x";
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#produk"), options);
        chart.render();
    </script>


</body>

</html>
