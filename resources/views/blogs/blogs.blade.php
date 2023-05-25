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
                        <h2>بلاگ شبکه ای</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li>بلاگ شبکه ای</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start blog-grid-section -->
        <section class="blog-grid-section section-padding">
            <div class="container">
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
                </div> <!-- end news-grids -->

                <div class="pagination-wrapper">
                    <ul class="pg-pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-grid-section     -->

    </div>
    <!-- end of page-wrapper -->

    </body>

@endsection
