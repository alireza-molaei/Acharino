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
                <a class="navbar-brand" href="#/">
                    <div class="brand-logo">
                        <img class="img-fluid" src="img/logo.png" alt="لوگو"/>
                    </div>
                    <div class="brand-logo-collapsed">
                        <img class="img-fluid" src="img/logo-single.png" alt="لوگو"/>
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
                <li class="nav-item dropdown dropdown-list">
                    <!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated bounceIn">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-3">
                                            <em class="fas fa-fire fa-2x"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-1">آپدیت ها</p>
                                            <p class="m-0 text-muted">
                                                <small
                                                ><strong class="mx-1 text-primary">2</strong>
                                                    آپدیت جدید وجود دارد</small
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- last list item-->
                            </div>
                            <!-- END list group-->
                        </div>
                    </div>
                    <!-- END Dropdown menu-->
                </li>
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
                        <div class="dropdown-item">پروفایل</div>
                        <div class="dropdown-item">تنظیمات</div>

                        <div class="dropdown-item">خروج</div>
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
                    <li
                        class="sidebar-app-logo d-flex align-items-center justify-content-center py-3 d-md-none"
                    >
                        <img class="img-fluid" src="img/logo.png" alt="لوگو"/>
                    </li>
                    <!-- START user info-->
                    <li class="has-user-block">
                        <div
                            id="user-block"
                            data-toggle="collapse"
                            data-target="#user-links"
                        >
                            <div class="item user-block">
                                <div class="user-block-content">
                                    <!-- User picture-->
                                    <div class="user-block-picture">
                                        <img
                                            class="img-thumbnail rounded-circle"
                                            src="img/user/02.jpg"
                                            alt="آواتار"
                                            width="60"
                                            height="60"
                                        />
                                    </div>
                                    <!-- Name and Job-->
                                    <div class="user-block-info">
                        <span class="user-block-name">الکس، خوش اومدی</span
                        ><span class="user-block-role">طراح</span
                                        ><!-- START Dropdown to change status-->

                                        <!-- END Dropdown to change status-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END user info-->
                    <li class="nav collapse" id="user-links">
                        <!-- START User links collapse-->
                        <ul class="sidebar-nav sidebar-subnav">
                            <li><a href="#">پروفایل</a></li>
                            <li><a href="#">تنظیمات</a></li>

                            <li><a href="#">خروج</a></li>
                        </ul>
                        <!-- END User links collapse-->
                    </li>
                    <!-- Iterates over all sidebar items-->
                    <li class="active">
                        <a href="dashboard.html" title="داشبورد">
                            <em class="fas fa-tachometer-alt"></em><span>داشبورد</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('faqs.show')}}" title="سوالات متداول"
                        ><em class="fas fa-chart-bar"></em><span>سوالات متداول</span></a
                        >
                    </li>
                    <li class="">
                        <a href="{{route('services.show')}}" title="خدمات ما"
                        ><em class="fas fa-table"></em><span>خدمات ما</span></a
                        >
                    </li>
                    <li class=" ">
                        <a href="#forms" title="فرم ها" data-toggle="collapse"
                        ><em class="fas fa-edit"></em><span>فرم ها</span></a
                        >
                        <ul class="sidebar-nav sidebar-subnav collapse" id="forms">
                            <li class="sidebar-subnav-header">فرم ها</li>
                            <li class=" ">
                                <a href="form-standard.html" title="استاندارد"
                                ><span>استاندارد</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="form-extended.html" title="گسترده"
                                ><span>گسترده</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="form-validation.html" title="اعتبارسنجی"
                                ><span>اعتبارسنجی</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="form-wizard.html" title="مرحله ای"
                                ><span>مرحله ای</span></a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#elements" title="المنت ها" data-toggle="collapse"
                        ><em class="fas fa-wrench"></em><span>المنت ها</span></a
                        >
                        <ul class="sidebar-nav sidebar-subnav collapse" id="elements">
                            <li class="sidebar-subnav-header">المنت ها</li>
                            <li class=" ">
                                <a href="cards.html" title="کارت ها"
                                ><span>کارت ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="portlets.html" title="پرتلت ها"
                                ><span>پرتلت ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="buttons.html" title="دکمه ها"
                                ><span>دکمه ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="icons.html" title="آیکون ها"
                                ><span>آیکون ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="notifications.html" title="نوتیفیکیشن ها"
                                ><span>نوتیفیکیشن ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="typo.html" title="تایپوگرافی"
                                ><span>تایپوگرافی</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="grid.html" title="گرید"><span>گرید</span></a>
                            </li>
                            <li class=" ">
                                <a href="grid-masonry.html" title="گرید Masonry"
                                ><span>گرید Masonry</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="dropdown-animations.html" title="کشویی"
                                ><span>کشویی</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="widgets.html" title="ویجت ها"
                                ><span>ویجت ها</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="maps.html" title="نقشه ها"><span>نقشه ها</span></a>
                            </li>
                            <li class=" ">
                                <a href="calendar.html" title="تقویم"><span>تقویم</span></a>
                            </li>
                            <li class=" ">
                                <a href="spinners.html" title="اسپینرها"
                                ><span>اسپینرها</span></a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#pages" title="صفحات" data-toggle="collapse"
                        ><em class="far fa-file-alt"></em><span>صفحات</span></a
                        >
                        <ul class="sidebar-nav sidebar-subnav collapse" id="pages">
                            <li class="sidebar-subnav-header">صفحات</li>
                            <li class=" ">
                                <a href="landing.html" title="صفحه فرود"
                                ><span>صفحه فرود</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="login.html" title="ورود"><span>ورود</span></a>
                            </li>
                            <li class=" ">
                                <a href="login-multi.html" title="ورود چندگانه"
                                ><span>ورود چندگانه</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="register.html" title="عضویت"><span>عضویت</span></a>
                            </li>
                            <li class=" ">
                                <a href="lock.html" title="قفل"><span>قفل</span></a>
                            </li>
                            <li class=" ">
                                <a href="recover.html" title="بازیابی رمزعبور"
                                ><span>بازیابی رمزعبور</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="template.html" title="قالب بدون محتوا"
                                ><span>قالب بدون محتوا</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="timeline.html" title="جدول زمانی"
                                ><span>جدول زمانی</span></a
                                >
                            </li>
                            <li class=" ">
                                <a href="inbox.html" title="صندوق ورودی پیام"
                                ><span>صندوق ورودی پیام</span></a
                                >
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar footer-->
                <div class="nav-footer">
                    <div class="nav-footer-divider"></div>
                    <!-- START button group-->
                    <div class="btn-group text-center">
                        <form method="POST" action="{{ route('logout') }}">
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
