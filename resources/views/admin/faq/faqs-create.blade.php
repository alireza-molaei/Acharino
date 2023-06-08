@extends('admin.index')
@section('main-content')
    <section class="section-container">
        <div class="content-wrapper">
            <div class="card card-default">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('faqs.store')}}" method="post">
                        @csrf
                        <section class="wrapper"
                                 style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                <div class="page-title">

                                    <div class="pull-left">
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
                                        <h1 class="title">ساخت سوالات متداول</h1></div>


                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-lg-12">
                                <section class="box ">

                                    <header class="panel_header">
                                        <h4 class="title pull-left">سوال</h4>
                                    </header>

                                    <div class="content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                                <textarea placeholder=""
                                                          style="width: 30%; height: 100px; font-size: 14px; line-height: 23px;padding:15px;"
                                                          name="question"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="title pull-left">جواب</h4>
                                    <div class="content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <textarea class="bootstrap-wysihtml5-textarea"
                                                          value=""
                                                          style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px;"
                                                          name="answer"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-labeled btn-success" type="submit"><span
                                                class="btn-label"><i class="fa fa-check"></i></span>انجام
                                        </button>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
