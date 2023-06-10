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
                    <div class="col-xl-6">
                    <form method="POST" action="{{route('services.update',$service)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-title">ویرایش خدمات</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group"><label class="col-form-label">عنوان</label><input
                                        class="form-control" type="text" name="title" id="title" placeholder="{{$service->title}}" required></div>
                                <div class="form-group"><label class="col-form-label">توضیحات</label><input
                                        class="form-control" type="text" name="description" id="description" placeholder="{{$service->description}}" required>
                                </div>
                                <div class="form-group"><label class="col-form-label">تصویر بند انگشتی</label> <fieldset>
                                        <div class="form-group row"><label class="col-md-2 col-form-label">ورودی فایل</label>
                                            <div class="col-md-10"><input class="form-control filestyle" type="file" data-btnClass="btn btn-primary ml-3" id="thumbnail" name="thumbnail" value="{{$service->thumbnail}}"></div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <button class="btn btn-primary" type="submit">ثبت نام</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>>

@endsection
