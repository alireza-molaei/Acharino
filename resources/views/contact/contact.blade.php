@extends('layout')
@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>تماس</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">صفحه اصلی</a></li>
                        <li>تماس</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    <!-- start contact-pg-section -->
    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <p><span>تلفن</span> +1 478 (2492) 54 </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <p><span>ایمیل</span> support@industrial.com </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <p><span>ساعات کاری:</span> +1 478 (2492) 54 </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                <p><span>دفتر</span> 1802 Stout Rd, Menomonie,WI 54751 </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-offset-1 col-md-8">
                    <div class="location-map" id="map">

                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col col-xs-12">
                    <form class="contact-form form contact-validation-active row" id="contact-form-s2">
                        <div class="col col-sm-6">
                            <label for="f-name">نام</label>
                            <input type="text" class="form-control" id="f-name" name="f_name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="l-name">نام خانوادگی</label>
                            <input type="text" class="form-control" id="l-name" name="l_name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">شماره تلفن</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col col-sm-12">
                            <label for="message">پیام</label>
                            <textarea class="form-control" id="message" name="note"></textarea>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button class="theme-btn">ارسال</button>
                            <div id="loader">
                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                            </div>
                        </div>
                        <div class="error-handling-messages">
                            <div id="success">با سپاس از شما</div>
                            <div id="error">هنگام ارسال ایمیل خطایی رخ داد. لطفا بعدا دوباره امتحان کنید.</div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-pg-section -->

@endsection
