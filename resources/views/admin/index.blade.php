<!DOCTYPE html>
<html lang="fa-IR">
<!-- Mirrored from www.gold-themes.com/themes/47admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 07:32:53 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="description" content="Bootstrap Admin App"/>
    <meta
        name="keywords"
        content="app, responsive, jquery, bootstrap, dashboard, admin"
    />
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <title>Acharnio</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link
        rel="stylesheet"
        href="{{asset('admin/vendor/%40fortawesome/fontawesome-free/css/brands.css')}}"
    />
    <link
        rel="stylesheet"
        href="{{asset('admin/vendor/%40fortawesome/fontawesome-free/css/regular.css')}}"
    />
    <link
        rel="stylesheet"
        href="{{asset('admin/vendor/%40fortawesome/fontawesome-free/css/solid.css')}}"
    />
    <link
        rel="stylesheet"
        href="{{asset('admin/vendor/%40fortawesome/fontawesome-free/css/fontawesome.css')}}"
    />
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.css')}}"/>
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}" id="bscss"/>
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" id="maincss"/>
    <link rel="stylesheet" href="{{asset('admin/css/rtl.css')}}" id="rtlcss"/>

</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">
                    <div class="brand-logo" style="background-color:#fab243;">
                        <img class="img-fluid" src="{{asset('assets/images/favicon/acharino.png')}}"
                             style="width: 70px;height:70px" alt="لوگو"/>
                    </div>
                    <div class="brand-logo-collapsed" style="background-color:#d31900;">
                        <img class="img-fluid" src="{{asset('assets/images/favicon/acharino.png')}}"
                             style="width: 70px;height:70px" alt="لوگو"/>
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Right navbar-->
            <ul class="navbar-nav mr-auto flex-row">
                <li class="nav-item">
                    <!-- Button used to collapse the Right sidebar. Only visible on tablet and desktops--><a
                        class="nav-link d-none d-md-block d-lg-block d-xl-block"
                        href="#"
                        data-trigger-resize=""
                        data-toggle-state="aside-collapsed"
                    ><em class="fas fa-align-right"></em></a
                    ><!-- Button to show/hide the sidebar on mobile. Visible on mobile only.--><a
                        class="nav-link sidebar-toggle d-md-none"
                        href="#"
                        data-toggle-state="aside-toggled"
                        data-no-persist="true"
                    ><em class="fas fa-align-right"></em
                        ></a>
                </li>
            </ul>
            <!-- END Right navbar-->
            <!-- START Left Navbar-->
            <ul class="navbar-nav flex-row">
                <!-- START Messages menu-->
                <li class="nav-item dropdown dropdown-list">
                    <!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated bounceIn">
                        <div class="p-3 text-center"></div>
                        <!-- END list group-->
                    </div>
                    <!-- END Dropdown menu-->
                </li>
                <!-- START Alert menu-->

                <!-- END Alert menu-->
                <!-- START Messages menu-->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                        href="#"
                        data-toggle="dropdown"
                    ><em class="fas fa-user"></em></a
                    ><!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated bounceIn">
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item">
                            <form method="POST" action="{{ route('logout')}}">
                                @csrf
                                <button

                                    class="btn btn-link"
                                    type="submit"
                                    data-toggle="tooltip"
                                    data-title="خروج"
                                >
                                    <em class="fas fa-sign-out-alt text-muted"> خروج</em>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- END Dropdown menu-->
                </li>
            </ul>
            <!-- END Right Navbar-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <aside class="aside-container">
        <!-- START Sidebar (Right)-->
        <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close>
                <!-- START sidebar nav-->
                <ul class="sidebar-nav">
                    <!-- START user info-->

                    <!-- Iterates over all sidebar items-->
                    <li class="active">
                        <a href="{{route('dashboard')}}" title="داشبورد">
                            <em class="fas fa-tachometer-alt"></em><span>داشبورد</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('faqs.show')}}" title="سوالات متداول"
                        ><em class="fa-l fab fa-readme"></em><span>سوالات متداول</span></a
                        >
                    </li>
                    <li class="">
                        <a href="{{route('services.show')}}" title="خدمات ما"
                        ><em class="fas fa-cogs"></em><span>خدمات ما</span></a
                        >
                    </li>
                    <li class=" ">
                        <a href="{{route('contact.show')}}" title="اطلاعات تماس"
                        ><em class="fas fa-comments"></em><span>اطلاعات تماس</span></a
                        >
                    </li>
                </ul>
                <!-- Sidebar footer-->
                <div class="nav-footer">
                    <div class="nav-footer-divider"></div>
                    <!-- START button group-->
                    <div class="btn-group text-center">
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                            <button

                                class="btn btn-link"
                                type="submit"
                                data-toggle="tooltip"
                                data-title="خروج"
                            >
                                <em class="fas fa-sign-out-alt text-muted"> خروج</em>
                            </button>
                        </form>
                        >
                    </div>
                    <!-- END button group-->
                </div>
                <!-- END sidebar nav-->
            </nav>

        </div>
        <!-- END Sidebar (Right)-->


    </aside>
    <!-- offsidebar-->
    @yield('main-content')

    <!-- Main section-->
</div>

<!-- =============== VENDOR SCRIPTS ===============-->
<!-- STORAGE API-->
<script src="{{asset('admin/vendor/js-storage/js.storage.js')}}"></script>
<!-- SCREENFULL-->
<script src="{{asset('admin/vendor/screenfull/dist/screenfull.js')}}"></script>
<!-- i18next-->
<script src="{{asset('admin/vendor/i18next/i18next.js')}}"></script>
<script src="{{asset('admin/vendor/i18next-xhr-backend/i18nextXHRBackend.js')}}"></script>
<script src="{{asset('admin/vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('admin/vendor/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- SLIMSCROLL-->
<script src="{{asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- SPARKLINE-->
<script src="{{asset('admin/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<!-- FLOT CHART-->
<script src="{{asset('admin/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('admin/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin/vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/vendor/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('admin/vendor/flot-spline/js/jquery.flot.spline.js')}}"></script>
<!-- EASY PIE CHART-->
<script src="{{asset('admin/vendor/easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
<!-- MOMENT JS-->
<script src="{{asset('admin/vendor/moment/min/moment-with-locales.js')}}"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('admin/js/app.js')}}"></script>
</body>

<!-- Mirrored from www.gold-themes.com/themes/47admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 07:33:29 GMT -->
</html>
