@extends('admin.index')
@section('main-content')
    <section class="section-container">
        <div class="content-wrapper">
            <div class="wrapper">
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
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-4 mb-3">
                            <div class="row row-flush">
                                <div class="col-5"><img class="img-fluid" style="width:350px;height:200px"src="{{$service->service_thumbnail}}">
                                </div>
                                <div class="col-7 bg-white">
                                    <div class="p-3">
                                        <div class="float-left mb-3"><a class="btn btn-primary btn-sm" href="{{route('services.edit',$service)}}">ویرایش <em class="fas mr-2 fa-edit"></em></a>
                                        </div>
                                        <p><strong>{{$service->title}}</strong></p>
                                        <p>{{$service->description}}
                                     </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>>
@endsection
