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
                    <div class="col-xl-12">
                        <div class="card card-default">
                            <div class="card-header">اطلاعات تماس</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th>ایمیل</th>
                                            <th>شماره تلفن</th>
                                            <th>پیام</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($contacts as $contact)
                                          <tr>
                                              <td>{{$contact->id}}</td>
                                              <td>{{$contact->name}}</td>
                                              <td>{{$contact->family}}</td>
                                              <td>{{$contact->email}}</td>
                                              <td>{{$contact->phone}}</td>
                                              <td>{{$contact->message}}</td>
                                              <td>  <form action="{{route('contacts.destroy',$contact)}}" method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button class="btn btn-danger" type="submit">حذف</button>
                                                  </form></td>
                                          </tr>


                                      @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-sm-center justify-content-center">
                            <div class=" col-sm-12 col-lg-2">
                                {{ $contacts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>>
@endsection
