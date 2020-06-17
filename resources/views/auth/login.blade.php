<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{asset('vendor/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">

</head>

<body class="bg-white">
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create new account in
                                your project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg></div>
        </div><!-- Page content -->
        <div class="container mt--9 pb-5 text-gray">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border border-soft mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-email-83"></i></span></div><input class="form-control" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span></div><input class="form-control" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox"><input class="custom-control-input" id=" customCheckLogin" type="checkbox"> <label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label></div>
                                <div class="text-center"><button type="button" class="btn btn-primary my-4">Sign in</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6"><a href="#" class="text-gray"><small>Forgot password?</small></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">&copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative
                            Tim</a> & <a href="https://themesberg.com?ref=creative-tim" class="font-weight-bold ml-1" target="_blank">Themesberg</a></div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item"><a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a></li>
                        <li class="nav-item"><a href="https://themesberg.com" class="nav-link" target="_blank">Themesberg</a></li>
                        <li class="nav-item"><a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a></li>
                        <li class="nav-item"><a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a></li>
                        <li class="nav-item"><a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core -->
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="{{asset('assets/js/dashboard.js?v=1.2.0')}}"></script>
</body>

</html>