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
                        <h2>خدمات</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li>خدمات</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start of services -->
        <section class="section-padding services-grid-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids services-grid-view">
                            @foreach($services as $service)
                                <div class="grid">
                                    <div class="inner mk-bg-img">
                                        <div class="details ">
                                            <div class="info">
                                                <img src="{{$service->thumbnail}}" alt class="bg-image">
                                                <a href="service-single.html">
                                                    <h3><i class="fi flaticon-construction"></i>{{$service->title}}</h3>
                                                </a>
                                                <p>{{$service->description}}</p>
                                                <a href="service-single.html" class="more">دریافت جزئیات</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="inner mk-bg-img">
                                <div class="details ">
                                    <div class="info">
                                        <img src="assets/images/services/img-4.jpg" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3><i class="fi flaticon-construction"></i> Material Engineering</h3>
                                        </a>
                                        <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان</p>
                                        <a href="service-single.html" class="more">دریافت جزئیات</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end services-grids -->
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="all-services">
                <a href="#" class="theme-btn">Load More</a>
            </div>
    </div> <!-- end container -->
    </section>
    <!-- end of services -->


    </div>
    <!-- end of page-wrapper -->


    </body>

@endsection
