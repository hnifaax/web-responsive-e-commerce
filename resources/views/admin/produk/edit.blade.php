<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    {{-- <meta name="description" content="" /> --}}

    <title>Edit Produk</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />
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
                                        <img src="../../img/akun/{{ Auth::user()->img }}" width="30" height="40" class="w-px-40  rounded-circle" />

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
                            <h1>Edit Produk</h1>
                            <form action="/admin/edit/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" required>{{ $produk->deskripsi }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Layout</label>
                                    <select name="layout" class="form-control" required>
                                        <option value="75%" {{ $produk->layout == '75%' ? 'selected' : '' }}>75%</option>
                                        <option value="TKL" {{ $produk->layout == 'TKL' ? 'selected' : '' }}>TKL</option>
                                        <option value="Full" {{ $produk->layout == 'Full' ? 'selected' : '' }}>Full</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Knob</label>
                                    <select name="knob" class="form-control" required>
                                        <option value="1" {{ $produk->knob ? 'selected' : '' }}>Ya</option>
                                        <option value="0" {{ !$produk->knob ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>

                                <hr>
                                <h5>Varian Lama</h5>

                                @foreach ($produk->varian as $varian)
                                    <div class="mb-3 border p-2">
                                        <img src="{{ asset('img/produk/' . $varian->img) }}" width="100">
                                        <br>
                                        <input type="hidden" name="old_varian[{{ $varian->id }}][id]" value="{{ $varian->id }}">

                                        <label>Warna</label>
                                        <input type="text" name="old_varian[{{ $varian->id }}][warna]" class="form-control" value="{{ $varian->warna }}" required>

                                        <label>Stok</label>
                                        <input type="number" name="old_varian[{{ $varian->id }}][stok]" class="form-control" value="{{ $varian->stok }}" required>

                                        <label>Gambar Baru (jika ingin ganti)</label>
                                        <input type="file" name="old_varian[{{ $varian->id }}][img]" class="form-control">

                                        <div class="form-check mt-2">
                                            <input type="checkbox" name="delete_varian[]" value="{{ $varian->id }}" class="form-check-input">
                                            <label class="form-check-label">Hapus Varian Ini</label>
                                        </div>
                                    </div>
                                @endforeach

                                <h5>Tambah Varian Baru</h5>
                                <div id="varian-container"></div>
                                <button type="button" class="btn btn-primary my-2" id="add-varian">Tambah Varian</button>

                                <hr>
                                <h5>Fitur Lama</h5>
                                @foreach ($produk->fitur as $fitur)
                                    <div class="mb-2">
                                        <input type="hidden" name="old_fitur[{{ $fitur->id }}][id]" value="{{ $fitur->id }}">
                                        <input type="text" name="old_fitur[{{ $fitur->id }}][nama]" class="form-control d-inline-block w-75" value="{{ $fitur->nama }}" required>

                                        <input type="checkbox" name="delete_fitur[]" value="{{ $fitur->id }}" class="form-check-input mx-2">
                                        <label class="form-check-label">Hapus</label>
                                    </div>
                                @endforeach

                                <h5>Tambah Fitur Baru</h5>
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
                                <button type="button" class="btn btn-primary" id="add-fitur">Tambah Fitur</button>

                                <div class="mt-4 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                </div>
                            </form>

                            {{-- <form action="/admin/edit" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                                @method('PUT')

                                <label>Nama Produk</label>
                                <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control" required>
                                <label>Deskripsi Produk</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi produk" required>{{ $produk->deskripsi }}</textarea>
                                <label>Harga Produk</label>
                                <input type="number" name="nama" value="{{ $produk->harga }}" class="form-control" required>

                                <label>Knob</label>
                                <select name="knob" class="form-control">
                                    <option value="1" {{ $produk->knob ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$produk->knob ? 'selected' : '' }}>Tidak</option>
                                </select>

                                <label>Layout</label>
                                <select name="layout" class="form-control">
                                    <option value="60%" {{ $produk->layout == '60%' ? 'selected' : '' }}>60%</option>
                                    <option value="65%" {{ $produk->layout == '65%' ? 'selected' : '' }}>65%</option>
                                    <option value="75%" {{ $produk->layout == '75%' ? 'selected' : '' }}>75%</option>
                                    <option value="80%" {{ $produk->layout == '80%' ? 'selected' : '' }}>80%</option>
                                    <option value="95%" {{ $produk->layout == '95%' ? 'selected' : '' }}>95%</option>
                                    <option value="100%" {{ $produk->layout == '100%' ? 'selected' : '' }}>100%</option>
                                    <!-- Tambahkan opsi lain jika perlu -->
                                </select>

                                <!-- Data Produk -->

                                <hr>

                                <!-- Data Varian -->
                                <h3>Varian Produk</h3>
                                <div id="varian-container">
                                    @foreach ($produk->varian as $i => $varian)
                                        <div class="varian-item mb-3">
                                            <label>Warna</label>
                                            <input type="text" name="varian[{{ $varian->id }}][warna]" class="form-control" value="{{ $varian->warna }}">

                                            <label>Stok</label>
                                            <input type="number" name="varian[{{ $varian->id }}][stok]" class="form-control" value="{{ $varian->stok }}">

                                            <label>Gambar Lama</label><br>
                                            <img src="{{ asset('img/produk/' . $varian->img) }}" width="100">

                                            <label>Ganti Gambar</label>
                                            <input type="file" name="varian[{{ $varian->id }}][img]" class="form-control">

                                            <button type="button" class="btn btn-danger remove-varian mt-2">Hapus Varian</button>
                                            <hr>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" id="add-varian" class="btn btn-primary mb-3">Tambah Varian</button>

                                <hr>

                                <!-- Data Fitur -->
                                <h3>Fitur Produk</h3>
                                <div id="fitur-container">
                                    @foreach ($produk->fitur as $i => $fitur)
                                        <div class="fitur-item mb-2">
                                            <input type="text" name="fitur[{{ $fitur->id }}]" class="form-control d-inline-block w-75" value="{{ $fitur->nama }}">
                                            <button type="button" class="btn btn-danger remove-fitur">X</button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" id="add-fitur" class="btn btn-primary mb-3">Tambah Fitur</button>

                                <hr>

                                <button type="submit" class="btn btn-success">Simpan Produk</button>
                            </form> --}}
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
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert-error").remove()
                $("#alert-success").remove()
                $("div.alert").remove();
            }, 3000); // 5 secs

        });
    </script>
    <script>
        let varianCount = 0;
        document.getElementById('add-varian').addEventListener('click', function() {
            const container = document.getElementById('varian-container');
            const div = document.createElement('div');
            div.classList.add('mb-3', 'border', 'p-2');
            div.innerHTML = `
            <label>Warna</label>
            <input type="text" name="varian[${varianCount}][warna]" class="form-control" required>

            <label>Gambar</label>
            <input type="file" name="varian[${varianCount}][img]" class="form-control" required>

            <label>Stok</label>
            <input type="number" name="varian[${varianCount}][stok]" class="form-control" required>

            <button type="button" class="btn btn-danger mt-2 remove-varian">Hapus</button>
        `;
            container.appendChild(div);
            varianCount++;
        });

        document.getElementById('varian-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-varian')) {
                e.target.parentElement.remove();
            }
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

        document.getElementById('fitur-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-fitur')) {
                e.target.closest('.fitur-item').remove();
            }
        });
    </script>


</body>

</html>
