<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from ghaleblake.ir/themes/industrial-demo/full-width/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 06:44:12 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Acharino </title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/favicon/apple-touch-icon-57x57.png')}}" rel="apple-touch-icon" sizes="57x57">
    <link href="{{asset('images/favicon/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/favicon/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/favicon/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{asset('sass/style.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{asset('images/preloader.gif')}}" alt>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-5">
        <div class="topbar topbar-style-2">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-7">
                        <div class="topbar-contact-info-wrapper">
                            <div class="topbar-contact-info">
                                <div>
                                    <i class="fa fa-location-arrow"></i>
                                    <div class="details">
                                        <p>ایران، تهران بزرگ، تهران، میدان آزادی</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa fa-phone"></i>
                                    <div class="details">
                                        <p>+012 (3546) 547</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-5">
                        <div class="social">
                            <span>دنبال کنید: </span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a href="{{route('index')}}"><img src="{{asset('images/logo-2.png')}}" alt></a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="awards">
                            <div>
                                <div class="icon"><i class="fi flaticon-title"></i></div>
                                <div class="award-info">
                                    <h4>گواهی بین المللی</h4>
                                    <p>ISO 9001:2016</p>
                                </div>
                            </div>
                            <div>
                                <div class="icon"><i class="fi flaticon-medal"></i></div>
                                <div class="award-info">
                                    <h4>برنده</h4>
                                    <p>مسابقه ساخت و ساز 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end lower-topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{route('index')}}">صفحه اصلی</a>
                        </li>
                        <li><a href="{{route('services')}}">خدمات</a></li>
                        <li><a href="{{route('faqs.index')}}">سؤالات متداول</a></li>

                        <li>
                            <a href="{{route('blogs')}}">بلاگ</a>
                        </li>
                        <li><a href="{{route('about')}}">درباره</a></li>
                        <li><a href="{{route('contact.create')}}">تماس</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav> <!-- end navigation -->
    </header>
    <!-- end of header -->
    @yield('content')


    <!-- start site-footer -->
    <footer class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3 col-sm-6">
                        <div class="widget about-widget">
                            <div class="footer-logo"><img src="{{asset('images/logo.png')}}" alt></div>
                            <ul class="contact-info">
                                <li><i class="fa fa-home"></i> ایران، تهران بزرگ، تهران، میدان آزادی</li>
                                <li><i class="fa fa-phone"></i> +1-(547)-257</li>
                                <li><i class="fa fa-home"></i> ساعات کاری: <br>ش - ج (8صبح - 8شب)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-3 col-sm-6">
                        <div class="widget service-links-widget">
                            <h3>خدمات</h3>
                            <ul>
                                <li><a href="#">پردازش کشاورزی</a></li>
                                <li><a href="#">تحقیقات شیمیایی</a></li>
                                <li><a href="#">مهندسی فلز</a></li>
                                <li><a href="#">مهندسی مکانیک</a></li>
                                <li><a href="#">نفت و گاز</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-3 col-sm-6">
                        <div class="widget quick-links-widget">
                            <h3>ناوبری</h3>
                            <ul>
                                <li><a href="#">صفحه اصلی</a></li>
                                <li><a href="#">درباره</a></li>
                                <li><a href="#">خدمات</a></li>

                                <li><a href="#">تماس با ما</a></li>
                                <li><a href="#">اخبار</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col col-md-3 col-sm-6">
                        <div class="widget twitter-feed-widget">
                            <h3>خوراک توییتر</h3>
                            <ul>
                                <li>
                                    <div class="text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است.</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fa fa-twitter"></i>
                                        <strong><a href="#">@Mark Wahlberg</a></strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است.</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fa fa-twitter"></i>
                                        <strong><a href="#">@Mark Wahlberg</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end upper-footer -->
    </footer>
    <!-- end site-footer -->
</div>
<!-- end of page-wrapper -->


<!-- All JavaScript files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('js/script.js')}}"></script>
</body>


<!-- Mirrored from ghaleblake.ir/themes/industrial-demo/full-width/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 06:45:42 GMT -->
</html>
