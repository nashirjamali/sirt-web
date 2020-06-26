<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('dist/front/assets/img/favicon/favicon.png')}}" type="image/png">

    <!-- Fontawesome -->
    <link type="text/css" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Nucleo icons -->
    <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <!-- Prism -->
    <link type="text/css" href="{{asset('vendor/prismjs/themes/prism.css')}}" rel="stylesheet">
    <!-- Front CSS -->
    <link type="text/css" href="{{asset('css/front.css')}}" rel="stylesheet">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark navbar-theme-primary">
            <div class="container">
                <a class="navbar-brand d-none" href="./index.html">
                    <img class="navbar-brand-dark common" src="./assets/img/brand/light.svg" height="35" alt="Logo light">
                    <img class="navbar-brand-light common" src="./assets/img/brand/dark.svg" height="35" alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="./index.html">
                                    <img src="./assets/img/brand/dark.svg" height="35" alt="Logo Impact">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover justify-content-center">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">Overview</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                                <span class="nav-link-inner-text">Front pages</span>
                                <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                            </a>
                            <ul class="dropdown-menu" id="pages_submenu">
                                <li><a class="dropdown-item" href="./front/pages/index.html">Landing</a></li>
                                <li><a class="dropdown-item" href="./front/pages/about.html">About</a></li>
                                <li><a class="dropdown-item" href="./front/pages/pricing.html">Pricing</a></li>
                                <li><a class="dropdown-item" href="./front/pages/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                                <span class="nav-link-inner-text">App pages</span>
                                <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                            </a>
                            <ul class="dropdown-menu" id="pages_submenu">
                                <li><a class="dropdown-item" href="./dashboard/pages/dashboards/dashboard.html">Dashboard</a></li>
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="./dashboard/pages/examples/register.html">Register</a>
                                </li>
                                <li><a class="dropdown-item" href="./dashboard/pages/examples/profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="./dashboard/pages/tables/tables.html">Tables</a></li>
                                <li><a class="dropdown-item" href="./dashboard/pages/maps/google.html">Maps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                                <span class="nav-link-inner-text mr-1">Support</span>
                                <i class="fas fa-angle-down nav-link-arrow"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="col-auto px-0" data-dropdown-content>
                                    <div class="list-group list-group-flush">
                                        <a href="https://demos.creative-tim.com/impact-design-system-pro/docs/getting-started/overview/" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-secondary"><i class="fas fa-file-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                                <span class="small">Examples and guides</span>
                                            </div>
                                        </a>
                                        <a href="https://github.com/creativetimofficial/impact-design-system/issues" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-primary"><i class="fas fa-microphone-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Support</span>
                                                <span class="small">Found a bug? Create an issue!</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block d-lg-none">
                    <a href="/login" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3">
                        <i class="fas fa-sign-in-alt mr-2"></i> Login
                    </a>
                </div>
                <div class="d-flex d-lg-none align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <!-- <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <span class="loader-animated-dot"></span>
                <img src="./assets/img/brand/dark-loader.svg" height="40" alt="Impact logo">
            </div>
        </div> -->

        <!-- Hero -->
        <section class="section-header pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-sm-8 col-md-7 col-lg-6 text-center">
                        <img src="./assets/img/brand/light.svg" class="mb-4" height="65" alt="Logo Impact">
                        <h1 class="display-4 text-muted mb-5 font-weight-normal">Membantu administrasi dan informasi warga</h1>
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <a href="/" target="_blank" class="btn btn-secondary mb-3 mt-2 mr-3 animate-up-2">Coba Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>
        <div class="section pt-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="./assets/img/presentation-mockup.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="display-2 text-center mb-5 mb-lg-7">Apa saja yang didapatkan?</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5 order-lg-2">
                        <h2 class="h1">Akun untuk RW dan RT</h2>
                        <p class="lead mb-4">4 hand-crafted pages for your startup</p>
                        <p class="mb-5">Showcase your startup with the front and landing pages it deserves. With a lot of care we developed some of the best presentational pages you can get.</p>
                        <div class="d-flex justify-content-between align-items-center mt-lg-4 mb-4">
                            <div class="d-block">
                                <a href="./front/pages/index.html" class="btn btn-secondary mr-3 animate-up-2 mb-3">Coba sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <img src="./assets/img/presentation-mockup-2.jpg" alt="Front pages overview">
                    </div>
                </div>
                <div class="row justify-content-center mb-5 mb-lg-7">
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <i class="fas fa-pager"></i>
                        </div>
                        <h3 class="font-weight-bolder">4</h3>
                        <p class="text-gray">Front Pages</p>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="font-weight-bolder">100+</h3>
                        <p class="text-gray">Premium Components</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <i class="fab fa-sass"></i>
                        </div>
                        <h3 class="font-weight-bolder">Workflow</h3>
                        <p class="text-gray">Sass & Gulp</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3 class="font-weight-bolder">Full</h3>
                        <p class="text-gray">Documentation</p>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5">
                        <h2 class="h1">Akun untuk warga</h2>
                        <p class="lead mb-4">Over 100 individual components</p>
                        <p class="mb-5">Start your development with a open source dashboard with over 100 individual components, giving you the freedom of choosing and combining. All components can take variations in colour, that you can easily modify using SASS files.</p>
                        <div class="d-flex justify-content-between align-items-center mt-lg-4 mb-4">
                            <div class="d-block">
                                <a href="/" class="btn btn-primary mr-3 animate-up-2 mb-3">Coba sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/img/presentation-mockup-3.jpg" alt="Dashboard Preview">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-primary mb-4">
                            <i class="fas fa-pager"></i>
                        </div>
                        <h3 class="font-weight-bolder">5+</h3>
                        <p class="text-gray">Dashboard Pages</p>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-primary mb-4">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="font-weight-bolder">100</h3>
                        <p class="text-gray">Individual Components</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-primary mb-4">
                            <i class="fab fa-sass"></i>
                        </div>
                        <h3 class="font-weight-bolder">Workflow</h3>
                        <p class="text-gray">Sass & Gulp</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-primary mb-4">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3 class="font-weight-bolder">Full</h3>
                        <p class="text-gray">Documentation</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">Semua Fitur</h2>
                        <p class="lead px-lg-8">You get all Bootstrap components fully customized. Besides, you receive numerous plugins out of the box and ready to use.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><i class="fab fa-bootstrap"></i></span>
                                <h5 class="font-weight-normal text-primary">Bootstrap</h5>
                                <p>Built with the most popular CSS Framework</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><i class="fab fa-sass"></i></span>
                                <h5 class="font-weight-normal text-primary">Sass</h5>
                                <p>Variables and mixins to empower development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><i class="fas fa-mobile-alt"></i></span>
                                <h5 class="font-weight-normal text-primary">Responsive</h5>
                                <p>All pages and components are 100% responsive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><i class="fas fa-mobile-alt"></i></span>
                                <h5 class="font-weight-normal text-primary">Responsive</h5>
                                <p>All pages and components are 100% responsive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-soft">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2 class="h1 font-weight-light mb-3"><strong>Open source</strong> project</h2>
                        <p class="lead mb-4">Impact design system is an open source project featuring premium components, front pages and a dashboard. There's also a Pro version available with more components, pages and plugins.</p>
                        <div class="d-flex align-items-center">
                            <a href="https://github.com/creativetimofficial/impact-design-system" target="_blank" class="btn btn-secondary mr-4 animate-up-2">
                                View on GitHub
                            </a>
                            <!-- Place this tag where you want the button to render. -->
                            <div class="mt-2">
                                <!-- Place this tag where you want the button to render. -->
                                <a class="github-button" href="https://github.com/creativetimofficial/impact-design-system" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/pixel-bootstrap-ui-kit on GitHub">Star</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="github-big-icon">
                            <span class="fab fa-github"></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card border-light p-4">
                            <!-- Header -->
                            <div class="card-header bg-white pb-0">
                                <span class="d-block">
                                    <span class="h3 text-gray font-weight-bold align-top">
                                        Free Version
                                    </span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body">
                                <ul class="list-group list-group-flush price-list mb-4">
                                    <li class="list-group-item bg-white pl-0"><strong>100</strong> Components</li>
                                    <li class="list-group-item bg-white pl-0"><strong>5</strong> Front Pages</li>
                                    <li class="list-group-item bg-white pl-0"><strong>4</strong> Dashboard Pages</li>
                                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium plugins</li>
                                    <li class="list-group-item bg-white pl-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Charts</li>
                                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-danger"><span class="fas fa-times-circle mr-2"></span></span> Premium Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 mt-lg-n4">
                        <div class="card border-light p-4">
                            <!-- Header -->
                            <div class="card-header bg-white pb-0">
                                <span class="d-block">
                                    <span class="h3 text-primary font-weight-bold align-top">
                                        Pro Version
                                    </span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body">
                                <ul class="list-group list-group-flush price-list mb-5">
                                    <li class="list-group-item bg-white pl-0"><strong>1500+</strong> Components</li>
                                    <li class="list-group-item bg-white pl-0"><strong>25</strong> Front Pages</li>
                                    <li class="list-group-item bg-white pl-0"><strong>20+</strong> Dashboard Pages</li>
                                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium plugins</li>
                                    <li class="list-group-item bg-white pl-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Charts</li>
                                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-success"><span class="fas fa-check-circle mr-2"></span></span> Premium Support</li>
                                </ul>
                                <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank" class="btn btn-block btn-primary animate-up-2"><span class="fas fa-paper-plane mr-2"></span> Upgrade to Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
            <div class="pattern pattern-soft top"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a class="footer-brand mr-lg-5 d-flex" href="./index.html">
                            <img src="./front/assets/img/brand/light.svg" height="35" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Create, prototype, collaborate and turn your ideas into incredible products with the definitive platform for digital design.</p>
                        <div class="dropdown mb-4 mb-lg-0">
                            <a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle footer-language-link">
                                <img src="./front/assets/img/flags/united-states-of-america.svg" alt="USA Flag" class="language-flag"> English
                                <i class="fas fa-chevron-down ml-1"></i>
                            </a>
                            <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-center">
                                <a href="#" class="dropdown-item text-gray text-sm"><img src="./front/assets/img/flags/germany.svg" alt="Germany Flag" class="language-flag"> German</a>
                                <a href="#" class="dropdown-item text-gray text-sm"><img src="./front/assets/img/flags/spain.svg" alt="Spain Flag" class="language-flag"> Spanish</a>
                                <a href="#" class="dropdown-item text-gray text-sm"><img src="./front/assets/img/flags/france.svg" alt="France Flag" class="language-flag"> French</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h6>Themesberg</h6>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="https://themesberg.com/blog?ref=creativetim">Blog</a></li>
                            <li><a target="_blank" href="https://themesberg.com/themes?ref=creativetim">Themes</a></li>
                            <li><a target="_blank" href="https://themesberg.com/contact?ref=creativetim">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h6>Creative Tim</h6>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="https://www.creative-tim.com/blog">Blog</a></li>
                            <li><a target="_blank" href="https://www.creative-tim.com/templates">Products</a></li>
                            <li><a target="_blank" href="https://www.creative-tim.com/support-terms">Support</a></li>
                            <li><a target="_blank" href="https://www.creative-tim.com/license">License</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <h6>Subscribe</h6>
                        <p class="font-small">The latest Impact news, articles, and resources, sent straight to your inbox every month.</p>
                        <form action="#">
                            <div class="form-row">
                                <div class="col-8">
                                    <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-secondary btn-block"><span>Subscribe</span></button>
                                </div>
                            </div>
                        </form>
                        <small class="mt-2 form-text">We’ll never share your details. See our <a href="#" class="font-weight-bold text-underline">Privacy Policy</a></small>
                    </div>
                </div>
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">© <a href="https://themesberg.com?ref=creativetim*" target="_blank">Themesberg</a> & <a href="https://creative-tim.com">Creative Tim</a> <span class="current-year"></span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>

    <!-- Core -->

    <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/headroom.js/dist/headroom.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{asset('vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Impact JS -->
    <script src="{{asset('js/front.js')}}"></script>
</body>

</html>
