@extends('admin.index')
@section('main-content')
    <section class="section-container">
        <div class="content-wrapper">
            <div class="wrapper">
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
                                            <th>مشاهده</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>مارک</td>
                                            <td>اوتو</td>
                                            <td>اوتو</td>
                                            <td>اوتو</td>
                                            <td>اوتو</td>
                                            <td>اوتو</td>
                                            <td class="has-code">@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>جیکوب</td>
                                            <td>تورنتون</td>
                                            <td>تورنتون</td>
                                            <td>تورنتون</td>
                                            <td>تورنتون</td>
                                            <td>تورنتون</td>
                                            <td class="has-code">@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>لری</td>
                                            <td>برد</td>
                                            <td>برد</td>
                                            <td>برد</td>
                                            <td>برد</td>
                                            <td>برد</td>
                                            <td class="has-code">@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>>
@endsection
