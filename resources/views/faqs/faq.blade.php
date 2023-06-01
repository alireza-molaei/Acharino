@extends('layout')
@section('content')

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
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>سوالات متداول</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                        <li>سوالات متداول</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start faq-section -->
    <section class="faq-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="section-title-s4">
                        <h2>پاسخ های آموزنده ای به تمام سوالات خود در مورد محصولات صنعتی در زیر پیدا کنید.</h2>
                        <p>آیا پرسشی دارید که در اینجا به آن اشاره نشده است؟ لطفا از طریق ایمیل یا تلفن زیر با ما تماس بگیرید. <span> (123)456-7890.</span></p>
                    </div>
                </div>
            </div>

            <div class="faq-section">
                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                    @foreach($faqs as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="{{'#collapse'.$faq->id}}"
                               aria-expanded="true">{{$faq->question}}</a>
                        </div>
                        <div id="{{'collapse'.$faq->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{{$faq->answer}} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!-- end faq-section -->
        </div> <!-- end container -->
    </section>
    <!-- end faq-section -->



</div>
<!-- end of page-wrapper -->




</body>
@endsection
