<!doctype html>
<html lang="Ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}" />

    {{-- <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ config('app.name', 'مكتبة غزية بنت جابر') }}</title>

    @livewireStyles
    <style>
        body::-webkit-scrollbar {
            width: 1em;
        }

        body::-webkit-scrollbar-track {
            /* box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); */
        }

        body::-webkit-scrollbar-thumb {
            background-color: #2192f1;
            outline: 1px solid #2192f1;
            border-radius: 20px
        }

        .page-title-area {
            margin-top: 100px
        }

        .nice-select span {
            display: block;
            color: black;
        }

        span.odometer {
            direction: ltr;
        }

        .main-nav{padding: 0 !important}
        .feedback-item{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            max-width: unset;
            margin: unset;
            width: 100%;
            height: 500px;

        }
        .feedback-item .feedback-title {
            display: block;
            padding: 0;
            text-align: center;
            margin: auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            color: black;
        }
        .feedback-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f5f6fa;
            opacity: 0.5;
        }

        .page-title-area.bg-10 {
            background-image: url("{{ asset('img/header.png') }}") !important;
        }

        .page-title-area::before {
            background-color: unset
        }

        .form-control {
            color: black !important;
        }

        @media only screen and (max-width: 991px) {
            .page-title-area, .feedback-area{
                margin-top: 70px !important
            }
        }

    </style>
    @stack('css')
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>

    <div class="navbar-area navbar-area-two">

        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo" style="top:11px">
                <img style="height: 50px;width:70px" src="{{ asset('img/logo.png') }}" class="main-logo" alt="Logo" />
            </a>
        </div>
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">

                    <a href="{{ route('home') }}" class="logo" style="top:11px">
                        <img style="height: 150px;width:140px" src="{{ asset('img/logo.png') }}" class="main-logo" alt="Logo" />
                    </a>

                    <div class="collapse navbar-collapse mean-menu">

                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}/#about" class="nav-link">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}/#services" class="nav-link">خدماتنا</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contactus') }}" class="nav-link">تواصل معنا</a>
                            </li>
                            @if (!auth('admin')->check() && !auth('teacher')->check())
                                <li class="nav-item">
                                    <a href="{{ route('teacher.login') }}" class="nav-link">تسجيل دخول</a>
                                </li>
                            @endif
                            @auth('admin')
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        {{ Auth::guard('admin')->user()->name }}
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.dashboard') }}" class="nav-link">لوحة التحكم</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.logout') }}" class="nav-link">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                            @auth('teacher')
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        {{ Auth::guard('teacher')->user()->name }}
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('teacher.profile') }}" class="nav-link">البروفايل</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('teacher.logout') }}" class="nav-link">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                        </ul>

                    </div>
                </nav>
            </div>
        </div>

    </div>

    @yield('main')


    <footer class="footer-bottom-area">
        <div class="container">
            <div class="copyright-wrap">
                <p>
                    2024 <i class="bx bx-copyright"></i>
                    <a href="{{ route('home') }}" style="color: white">Estethan Website</a>
                </p>
            </div>
        </div>
    </footer>
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/meanmenu.min.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script src="{{ asset('js/nice-select.min.js') }}"></script>

    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>

    <script src="{{ asset('js/jarallax.min.js') }}"></script>

    <script src="{{ asset('js/appear.min.js') }}"></script>

    <script src="{{ asset('js/odometer.min.js') }}"></script>

    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    @livewireScripts
    @stack('js')
</body>


</html>
