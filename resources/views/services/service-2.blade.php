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
                    <h2>توضیحات سرویس</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                        <li>توضیحات سرویس</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start service-singel-section -->
    <section class="service-singel-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-push-2">
                    <div class="service-single-content">
                        <div>
                            <img src="{{asset('images/service-single-info.jpg')}}" alt>
                        </div>
                        <div class="title">
                            <h3>قطعات خودرو و سیستم</h3>
                        </div>
                        <div class="details">
                            <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <ul>
                                <li><i class="fa fa-plus"></i> چاپگرها و متون بلکه روزنامه و مجله در ستون</li>
                                <li><i class="fa fa-plus"></i> سطرآنچنان که لازم است و برای شرایط فعلی</li>
                                <li><i class="fa fa-plus"></i> کنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود</li>
                            </ul>
                            <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <h4>ابزارهای کاربردی می باشد</h4>
                            <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <a href="#" class="theme-btn">تماس با ما</a>
                        </div>
                    </div> <!-- end service content -->
                </div> <!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end service-single-section -->

</div>
<!-- end of page-wrapper -->
@endsection
