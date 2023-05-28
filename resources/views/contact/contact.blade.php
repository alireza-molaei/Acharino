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
                @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
                @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                    <form action="{{route('contact.store')}}" method="POST" class="contact-form form contact-validation-active row" >
                        @csrf
                        <div class="col col-sm-6">
                            <label for="name">نام</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="col col-sm-6">
                            <label for="family">نام خانوادگی</label>
                            <input type="text" class="form-control"  name="family" value="{{old('family')}}">
                        </div>
                        <div class="col col-sm-6">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control"  name="email" value="{{old('email')}}">
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">شماره تلفن</label>
                            <input type="text" class="form-control"  name="phone-number" value="{{old('phone-number')}}">
                        </div>
                        <div class="col col-sm-12">
                            <label for="message">پیام</label>
                            <textarea class="form-control" name="message">{{old('message')}}</textarea>
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
