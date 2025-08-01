<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Registrasi</title>
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #131720;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad,
                    #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                    #ff512f,
                    #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            /* height: 520px; */
            width: 750px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 25px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 0px;
            font-size: 14px;
            font-weight: 300;
        }

        .input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 0px;
            font-size: 14px;
            font-weight: 300;
            border: 0;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 40px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .ha {
            background: red;
            width: 100%;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    @if (Session::has('status'))
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style=" background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(12px); border: 1px white;">
                    <div class="modal-body">
                        <img src="img/error.png" style="margin: auto; display: flex;" width="120" alt="">
                        <h6 class="title fw-bold text-center text-danger">
                            TIDAK DAPAT MASUK!
                        </h6>
                        <h6 class="text-center text-white">
                            Email atau Password yang diisi salah!
                        </h6>
                        {{-- <p class="text-center">
                    <div class="alert alert-danger text-center" role="alert">
                       
                    </div>
                    </p> --}}

                        {{-- <button type="button" class="btn btn-danger rounded-5" data-bs-dismiss="modal">Lanjut memilih</button> --}}
                    </div>

                </div>
            </div>
        </div>
    @endif
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class="sign-in-form" method="POST" action="{{ route('postRegistrasi') }}" id="loginForm" enctype="multipart/form-data">
        @csrf
        <h3>Daftar Akun</h3>
        <div class="d-flex flex-column flex-lg-row gap-5">
            <div style="margin-top: 25px;">
                <img id="output" src="../img/akun/user.png" alt="user-avatar" class="d-flex justify-content-center rounded" width="155" height="155" style="margin: auto;" />
                <label for="upload" class="btn btn-primary d-flex justify-content-center my-2" tabindex="0">
                    <span class="d-none text-center d-sm-block">Foto Profil</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" name="img" class="account-file-input" value="user.png" hidden onchange="loadFile(event)" />
                </label>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-6 col-12 ">
                        <label for="username">Email</label>
                        <input type="text" placeholder="Email" id="username" name="email" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="username">Nama</label>
                        <input type="text" placeholder="Nama" id="username" name="name" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Minimal 8 Karakter" id="password" name="password" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="nomor">Nomor</label>
                        <input type="text" placeholder="Nomor" id="nomor" name="nomor" required>
                    </div>
                </div>
                <label for="password">Alamat</label>
                <textarea class=" input" aria-label="With textarea" name="alamat" required></textarea>
            </div>
        </div>

        <button type="submit">Daftar</button>
        <a type="button" href="/login" class="ha mt-2">Kembali</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script>
        addEventListener('DOMContentLoaded', (event) => {
            const myModal = new bootstrap.Modal('#myModal', [])
            myModal.show();
        });
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $("#myModal").remove()
                $("div.fade").remove();

                $("div.jarak").remove();
                $("div.alert").remove();
            }, 5000); // 5 secs

        });
    </script>
</body>

</html>
