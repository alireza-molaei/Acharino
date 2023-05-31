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
                            <li><a href="{{route('index')}}">صفحه اصلی</a></li>
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
               <div class="row">


                <div class="news-grids">
                    @foreach($blogs as $blog)
                        <div class="grid">
                            <div class="entry-media">
                                <img class="img-responsive img-thumbnail" src="{{$blog->thumbnail}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>{{$blog->created_at}}</li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3 class="blog-custom-style"><a href="#">{{$blog->title}}</a>
                                    </h3>
                                    <span class="small">{{$blog->description}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center">

                        {{$blogs->links()}}
                    </div>
               </div><!-- end news-grids -->
                </div>
            </div>
            <!-- end container -->

        </section>
        <!-- end blog-grid-section     -->

    </div>
    <!-- end of page-wrapper -->

    </body>

@endsection
