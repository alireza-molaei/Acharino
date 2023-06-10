@extends('layout')
@section('content')

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>درباره ما</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                        <li>درباره ما</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>طیف گسترده ای از خدمات حقوقی صنعتی را برای کسب و کار خود دریافت کنید</h2>
                    </div>
                    <div class="offer-text">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله </p>
                        <p>در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                            هدف بهبود ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="{{asset('assets/images/offer-pic.jpg')}}" alt>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->


    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="{{asset('assets/images/cta-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>اولویت اول ما <span> رضایت مشتری</span> است</h2>
                    <a href="{{route('contact.create')}}" class="theme-btn-s5">تماس با ما</a>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start features -->
    <section class="features section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="features-title">
                        <h2>چرا ما بهترین هستیم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-people"></i>
                        </div>
                        <div class="details">
                            <h3>مهندسان متخصص</h3>
                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی </p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-support"></i>
                        </div>
                        <div class="details">
                            <h3>پشتیبانی حرفه ای</h3>
                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی </p>

                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-time-passing"></i>
                        </div>
                        <div class="details">
                            <h3>تحویل به موقع</h3>
                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی </p>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end features -->


    <!-- start our-team -->
    <section class="our-team our-team-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s5">
                        <h2>تیم ما</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="team-slider team-grids">
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{asset('assets/images/team/img-1.jpg')}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>علیرضا ملائی</h3>
                                <p>مدیر هیئت مدیره</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{asset('assets/images/team/img-2.jpg')}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>علیرضا ملائی</h3>
                                <p>مدیر هیئت مدیره</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{asset('assets/images/team/img-3.jpg')}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>علیرضا ملائی</h3>
                                <p>مدیر هیئت مدیره</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{asset('assets/images/team/img-1.jpg')}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>علیرضا ملائی</h3>
                                <p>مدیر هیئت مدیره</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end our-team -->


    <!-- start fun-fact -->
    <section class="fun-fact">
        <div class="container">
            <div class="row start-count">
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                        <span class="fact-title">پروژه ها</span>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                        <span class="fact-title">مشتری</span>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                        <span class="fact-title">رضایتمندی</span>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact -->


    <!-- start partners -->
    <section class="section-padding partners partners-bg">
        <h2 class="hidden">همکاران</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider">
                        <div class="grid">
                            <img src="{{asset('assets/images/partners/img-1.png')}}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{asset('assets/images/partners/img-2.png')}}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{asset('assets/images/partners/img-3.png')}}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{asset('assets/images/partners/img-4.png')}}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{asset('assets/images/partners/img-2.png')}}" alt>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end partners -->
</div>
<!-- end of page-wrapper -->
</body>
@endsection
