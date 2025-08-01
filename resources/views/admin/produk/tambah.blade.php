<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    {{-- <meta name="description" content="" /> --}}

    <title>Tambah Produk</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo-putih.png" />
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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo my-2">
                    <a href="index.html" class="app-brand-link">
                        <span>
                            <img src="../img/logo-hitam.png" width="30" alt="">
                        </span>
                        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2 mt-3"> PILIKADES</span> --}}
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <ul class="menu-inner py-1 mt-4">
                    <!-- Dashboard -->
                    <li class="menu-item" style="margin-top: 0px !important;">
                        <a href="/admin/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase" style="    margin-top: 4px !important; margin-bottom: -6px">
                        <span class="menu-header-text">Halaman</span>
                    </li>
                    <li class="menu-item active">
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
                                    <li>
                                        <a class="dropdown-item" href="/admin/profil">
                                            <i class='bx bx-user-circle'></i>
                                            <span>Profil Akun</span>
                                        </a>
                                    </li>
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
                        {{-- <a href="/admin/tambah-produk" class="btn btn-info">Tambah</a> --}}
                        <div class="container mt-4">
                            <h1>Tambah Produk</h1>
                            <form action="/admin/tambah" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Data Produk -->
                                <div class="form-group mb-3">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama produk" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="layout">Layout</label>
                                    <select name="layout" id="layout" class="form-control" required>
                                        <option value="" disabled selected>Pilih layout</option>
                                        <option value="60%">60%</option>
                                        <option value="65%">65%</option>
                                        <option value="75%">75%</option>
                                        <option value="80%">80%</option>
                                        <option value="95%">95%</option>
                                        <option value="100%">100%</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label><input type="checkbox" name="knob" value="1"> Ada Knob</label>
                                </div>
                                <hr>

                                <!-- Data Varian -->
                                <h3>Varian Produk</h3>
                                <div id="varian-container">
                                    <div class="varian-item mb-3">
                                        <div class="form-group">
                                            <label>Nama Varian</label>
                                            <input type="text" name="varian[0][warna]" class="form-control" placeholder="Nama Varian" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="gambar">Gambar Produk</label>
                                            <input type="file" name="varian[0][img]" id="gambar" class="form-control" required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Stok</label>
                                            <input type="number" name="varian[0][stok]" class="form-control" placeholder="Harga" required>
                                        </div>
                                        <button type="button" class="btn btn-danger remove-varian mt-2">Hapus Varian</button>
                                        <hr>
                                    </div>
                                </div>
                                <button type="button" id="add-varian" class="btn btn-primary mb-3">Tambah Varian</button>

                                <hr>

                                <!-- Data Fitur -->
                                <h3>Fitur Produk</h3>
                                <div id="fitur-container">
                                    <div class="fitur-item mb-3">
                                        <div class="form-group">
                                            <label>Fitur</label>
                                            <input type="text" name="fitur[]" class="form-control" placeholder="Fitur Produk" required>
                                        </div>
                                        <button type="button" class="btn btn-danger remove-fitur mt-2">Hapus Fitur</button>
                                        <hr>
                                    </div>
                                </div>
                                <button type="button" id="add-fitur" class="btn btn-primary mb-3">Tambah Fitur</button>

                                <hr>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Simpan Produk</button>
                                </div>
                            </form>
                        </div>
                        {{-- @endsection --}}
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        let varianCount = 1;
        let fiturCount = 1;

        document.getElementById('add-varian').addEventListener('click', function() {
            const container = document.getElementById('varian-container');

            const div = document.createElement('div');
            div.classList.add('border', 'p-3', 'mb-3', 'rounded');
            div.innerHTML = `
            <div class="mb-2">
                <label>Warna</label>
                <input type="text" name="varian[${varianCount}][warna]" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Gambar</label>
                <input type="file" name="varian[${varianCount}][img]" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Stok</label>
                <input type="number" name="varian[${varianCount}][stok]" class="form-control" required>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-varian">Hapus Varian</button>
        `;
            container.appendChild(div);

            varianCount++;
        });

        document.getElementById('add-fitur').addEventListener('click', function() {
            const container = document.getElementById('fitur-container');

            const div = document.createElement('div');
            div.classList.add('fitur-item', 'mb-3');

            div.innerHTML = `
        <div class="form-group">
            <label>Fitur</label>
            <input type="text" name="fitur[]" class="form-control" placeholder="Fitur Produk" required>
        </div>
        <button type="button" class="btn btn-danger remove-fitur mt-2">Hapus Fitur</button>
        <hr>
    `;
            container.appendChild(div);
        });

        // Event delegation untuk hapus varian/fitur
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-varian')) {
                e.target.parentElement.remove();
            }

            if (e.target.classList.contains('remove-fitur')) {
                e.target.parentElement.remove();
            }
        });
    </script>

</body>

</html>
