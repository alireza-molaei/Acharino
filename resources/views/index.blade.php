@extends('layout')
@section('content')

    <body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start of hero -->
        <section class="hero hero-slider-wrapper">
            <div class="hero-slider hero-slider-style-1">
                <div class="slide">
                    <img src="{{asset('images/slider/slide-1.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-sm-9 slide-caption">
                                <h2>ما بهترین خدمات <span> صنعتی </span> را در سراسر جهان ارائه می دهیم</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">درباره ما</a>
                                    <a href="#" class="theme-btn-s2">کاوش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="{{asset('images/slider/slide-2.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-sm-9 slide-caption">
                                <h2>ما بهترین خدمات <span> صنعتی </span> را در سراسر جهان ارائه می دهیم</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">درباره ما</a>
                                    <a href="#" class="theme-btn-s2">کاوش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="{{'images/slider/slide-3.jpg'}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-sm-9 slide-caption">
                                <h2>ما بهترین خدمات <span> صنعتی </span> را در سراسر جهان ارائه می دهیم</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">درباره ما</a>
                                    <a href="#" class="theme-btn-s2">کاوش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start of services -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title">
                            <h2>خدمات ما</h2>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-5">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                    </div>
                    <div class="col col-lg-3 col-md-3">
                        <div class="all-service-link">
                            <a href="{{route('services')}}" class="theme-btn">همه خدمات</a>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids service-slider dots-s1">
                            @foreach($services as $service)
                                <div class="grid">
                                    <div class="inner mk-bg-img">
                                        <div class="details ">
                                            <div class="info">
                                                <img src="{{$service->thumbnail}}" alt class="bg-image">
                                                <a href="{{route('service-'.$service->id)}}">
                                                    <h3><i class="fi flaticon-construction"></i>{{$service->title}}</h3>
                                                </a>
                                                <p>{{$service->description}}</p>
                                                <a href="{{route('service-'.$service->id)}}" class="more">دریافت جزئیات</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- end services-grids -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end of services -->


        <!-- start testimonials -->
        <section class="testimonials section-padding parallax" data-bg-image="{{asset('images/testimonials/bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="testimonials-slider slider-arrow-s1">

                                <div class="slide-item">
                                    <div class="inner">
                                        <div class="client-quote">
                                            <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
                                                شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                                                جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                            </p>
                                        </div>
                                        <div class="client-details">
                                            <div class="client-pic">
                                                <img src="{{asset('images/testimonials/client.jpg')}}" alt>
                                            </div>
                                            <div class="client-info">
                                                <h4>علیرضا ملائی</h4>
                                                <span>مدیر هیئت مدیره، Acharino</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="slide-item">
                                <div class="inner">
                                    <div class="client-quote">
                                        <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
                                            شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                                            جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                    </div>
                                    <div class="client-details">
                                        <div class="client-pic">
                                            <img src="{{asset('images/testimonials/client.jpg')}}" alt>
                                        </div>
                                        <div class="client-info">
                                            <h4>حسن کریمی</h4>
                                            <span>مدیر هیئت مدیره، Acharino</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonials -->

        <!-- start about-us-faq -->
        <section class="section-padding about-us-faq">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="about-us-section">
                            <div class="section-title-s3">
                                <span>درباره ما</span>
                                <h2>طیف گسترده ای از خدمات حقوقی صنعتی را برای کسب و کار خود دریافت کنید</h2>
                            </div>
                            <div class="details">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی </p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی </p>
                                <div class="btns">
                                    <a href="#" class="theme-btn-s3">بیشتر بدانید</a>
                                    <a href="#" class="theme-btn-s4">تاریخچه شرکت</a>
                                </div>
                            </div>
                            <div class="social">
                                <p>با ما ارتباط برقرار کنید:</p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-lg-offset-1">
                        <div class="faq-section">
                            <div class="section-title-s3">
                                <span>سؤالات متداول</span>
                                <h2>تمام این سال ها، خدمات مختلف ما نوآوری طولانی مدت را تحویل داده اند</h2>
                            </div>
                            <div class="details">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه</p>
                                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                    @foreach($faqs as $faq)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                   aria-expanded="true">{{$faq->question}}</a>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>{{$faq->answer}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseTwo">در این صورت می توان امید داشت</a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                                    دستاوردهای اصلی و جوابگوی سوالات</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
            <div class="backhoe-loader">
                <img src="{{asset('images/backhoe-loader.png')}}" alt>
            </div>
        </section>
        <!-- end start about-us-faq -->


        <!-- start partners -->
        <section class="section-padding partners">
            <h2 class="hidden">همکاران</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partners-slider">
                            <div class="grid">
                                <img src="{{asset('images/partners/img-1.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('images/partners/img-2.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('images/partners/img-3.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('images/partners/img-4.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('images/partners/img-2.png')}}" alt>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end partners -->
        <!-- news-section -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title">
                            <h2>آخرین اخبار</h2>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-5">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                    </div>
                    <div class="col col-lg-3 col-md-3">
                        <div class="all-news-link">
                            <a href="#" class="theme-btn">اخبار بیشتر</a>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="news-grids">
                            @foreach($blogs as $blog)
                                <div class="grid">
                                    <div class="entry-media">
                                        <img src="{{$blog->thumbnail}}" alt>
                                    </div>
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i>{{$blog->created_at}}</li>
                                            </ul>
                                        </div>
                                        <div class="entry-body">
                                            <h3><a href="#">{{$blog->title}}</a>
                                            </h3>
                                            <p>{{$blog->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end news-section -->


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
                                    <li><a href="#">پروژه ها</a></li>
                                    <li><a href="#">تعرفه ها</a></li>
                                    <li><a href="#">اخبار</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">گالری</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">حریم خصوصی</a></li>
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
            <div class="copyright-info">
                <div class="container">
                    <p>فارسی و راستچین سازی توسط <a href="https://karbarwp.com">کاربر وردپرس</a></p>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->


    </body>

@endsection



<!-- Mirrored from ghaleblake.ir/themes/industrial-demo/full-width/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 06:45:42 GMT -->
