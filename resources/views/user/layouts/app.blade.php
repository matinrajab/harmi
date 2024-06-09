<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Health Association of Relawan Muda Indonesia">
    <link href="{{ asset('user/assets') }}/images/favicon/favicon.png" rel="icon">
    <title>@yield('title', 'HARMI')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('user/assets') }}/css/libraries.css">
    <link rel="stylesheet" href="{{ asset('user/assets') }}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout2">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <i class="icon-phone"></i><a>Emergency Line: {{ $contact->phone_number }}</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a>Location: {{ $contact->address }}</a>
                                    </li>
                                </ul><!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="mailto:{{ $contact->email }}"><i class="fa fa-envelope"></i></a>
                                        </li>
                                        <li><a href="https://wa.me/{{ $contact->phone_number }}"><i
                                                    class="fa fa-phone"></i></a></li>
                                        <li><a href="https://www.instagram.com/{{ $contact->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="{{ asset('user/assets') }}/images/logo/logo-harmi.png" class="logo-dark"
                            width="185" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse center-navbar" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="{{ route('homepage') }}"
                                    class="nav__item-link {{ isset($home_page) ? 'active' : '' }}">Home</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('open-volunteers.index') }}"
                                    class="nav__item-link {{ isset($volunteer_page) ? 'active' : '' }}">Harmi
                                    Project</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('events.index') }}"
                                    class="nav__item-link {{ isset($event_page) ? 'active' : '' }}">Event</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('blogs.index') }}"
                                    class="nav__item-link {{ isset($blog_page) ? 'active' : '' }}">Blog</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle nav__item-link {{ isset($collaboration_page) ? 'active' : '' }}">Collaboration</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="{{ route('showPartnership') }}" class="nav__item-link">Partnership</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="{{ route('showSponsorship') }}" class="nav__item-link">Sponsorship</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('about-us') }}"
                                    class="nav__item-link {{ isset($about_us_page) ? 'active' : '' }}">About Us</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-0">
                        <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Neurology Clinic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Cardiology Clinic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Pathology Clinic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Laboratory Clinic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Pediatric Clinic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="department-single.html" class="nav__item-link">Cardiac Clinic</a>
                            </li><!-- /.nav-item -->
                        </ul> <!-- /.miniPopup-departments -->
                        <a href="{{ route('open-volunteers.index') }}" class="btn btn__primary btn__rounded ml-30">
                            <span>explore now</span>
                        </a>
                    </div>
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        @yield('content')

        <a href="https://wa.me/{{ $contact->phone_number }}">
            <button class="action-button">
                <i class="ri-whatsapp-line"></i>
            </button>
        </a>

        <!-- ========================
      Footer
    ========================== -->
        <footer class="footer">
            <div class="footer-primary">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="footer-widget-about">
                                <img src="{{ asset('user/assets') }}/images/logo/logo-harmi.png" alt="logo"
                                    width="185" class="mb-30">
                                <p class="color-gray">HARMI berkomitmen untuk memberdayakan komunitas melalui aksi
                                    relawan di bidang kesehatan, pendidikan, kepemudaan, dan lingkungan. Bersama, kita
                                    bergerak, berjejak, dan berdampak.
                                </p>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-xl-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 offset-lg-1">
                            <div class="footer-widget-nav">
                                <h6 class="footer-widget__title">Explore Links</h6>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('homepage') }}">Home</a></li>
                                        <li><a href="{{ route('open-volunteers.index') }}">Harmi Project</a></li>
                                        <li><a href="{{ route('events.index') }}">Latest Events</a></li>
                                        <li><a href="{{ route('blogs.index') }}">Latest Blogs</a></li>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="footer-widget-nav">
                                <h6 class="footer-widget__title">Get Support</h6>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a>Email : {{ $contact->email }}</a></li>
                                        <li><a>Phone : {{ $contact->phone_number }}</a></li>
                                        <li><a>Instagram : {{ $contact->instagram }}</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-primary -->
            <div class="footer-secondary">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <p>
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a class="fz-14 color-primary" target="_blank" href="{{ route('homepage') }}">HARMI</a>
                            Development By
                            <a class="fz-14 color-primary" target="_blank"
                                href="https://punggawastudio.com/">Punggawa
                                Studio</a>
                        </p>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-secondary -->
        </footer><!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div><!-- /.wrapper -->

    <script src="{{ asset('user/assets') }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('user/assets') }}/js/plugins.js"></script>
    <script src="{{ asset('user/assets') }}/js/main.js"></script>

    @stack('scriptjs')
</body>


</html>
