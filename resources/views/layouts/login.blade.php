<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Sistem Informasi RT dan RW">
    <title>
        SiRT - Login
    </title>

    @include('include._header-script')
</head>
<body class="" id="body">
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                        <a href="/index.html">
                            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                                 width="30" height="33"
                                 viewBox="0 0 30 33">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z"/>
                                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z"/>
                                </g>
                            </svg>
                            <span class="brand-name">SiRT</span>
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">

                    <h4 class="text-dark mb-5">Masuk</h4>
                    <form action="/">
                        <div class="row">
                            <div class="form-row col-md-12 mb-4">
                                <label for="username">NIK (Nomor Induk Penduduk)</label>
                                <input type="text" class="form-control input-lg" id="username" placeholder="Masukan NIK" required>
                                <div class="invalid-feedback">
                                    NIK Salah
                                </div>
                            </div>
                            <div class="form-row col-md-12 mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control input-lg" id="password" placeholder="Masukan Password" required>
                                <div class="invalid-feedback">
                                    Password Salah
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Masuk ke Aplikasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright pl-0">
        <p class="text-center">
            &copy; <span id="copy-year">2020</span> Copyright SiRT by
            <a class="text-primary" href="http://github.com/nashirjamali/" target="_blank">Nashir, Asrori, Amirul</a>.
        </p>
    </div>
    <script>
        let d = new Date();
        let year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</div>
@include('include._footer-script')
</body>
</html>
