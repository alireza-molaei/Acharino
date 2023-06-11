@extends('admin.index')
@section('main-content')
    <section class="section-container">

        <div class="content-wrapper">
            <div class="card card-default">
                <div class="card-header">
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
                    <h4>جدول سوالات متداول</h4>
                    <div class="text-left">
                        <a class="btn btn-lg btn-success" href="{{route('faqs.create')}}"> ایجاد کردن</a>

                    </div>
                </div>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>سوال</th>
                        <th>جواب</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $faq->id }}</td>
                            <td><strong>{{ $faq->question }}</strong></td>
                            <td>{{ $faq->answer }}</td>
                            <td>
                                <a class="btn btn-primary" type="button"
                                   href="{{route('faqs.edit',$faq)}}"> ویرایش <em class="fas mr-2 fa-edit"></em></a>
                            </td>
                            <td>
                                <form action="{{route('faqs.destroy',$faq->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">حذف<em class="fas ml-2 fa-window-close"></em></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <div class="row justify-content-sm-center justify-content-center">
                <div class="col-sm-12 col-lg-2">
                    {{ $faqs->links() }}
                </div>
            </div>
        </div>


    </section>

@endsection
