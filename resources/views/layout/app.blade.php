<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Impact Dashboard</title>
    {{-- Header Script --}}
    @include('include._header-script')
</head>
<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/admin">
                <img src="{{asset('assets/img/brand/dark.svg')}}" height="40" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            {{-- SideBar --}}
            @include('include._sidebar')
        </div>
    </div>
</nav>
{{-- Main content --}}
<div class="main-content" id="panel">
    {{-- Navbar --}}
    @include('include._navbar')

    {{-- Content --}}
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            @yield('header')
        </div>
    </div>
    @yield('content')

    {{-- Footer --}}
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center text-lg-left text-muted">
                    &copy; 2020
                    <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">
                        Creative Tim
                    </a> &
                    <a href="https://themesberg.com?ref=creative-tim" class="font-weight-bold ml-1" target="_blank">
                        Themesberg
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">
                            Creative Tim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://themesberg.com" class="nav-link" target="_blank">
                            Themesberg
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">
                            License
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

{{-- Footer Script --}}
@include('include._footer-script')
</body>
</html>
