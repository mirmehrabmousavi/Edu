@extends('admin.layout.app')

@section('content')
    <section class="page-users-view">
        <div class="row">
            <!-- information start -->
            <div class="col-md-6 col-12 ">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title mb-2">اطلاعات</div>
                    </div>
                    <div class="card-body">
                        <table>
                            <tbody>
                            <tr>
                                <td class="font-weight-bold">نام :</td>
                                <td>{{$val->name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">نام خانوادگی :</td>
                                <td>{{$val->family}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">ایمیل :</td>
                                <td>{{$val->email}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">شماره تماس :</td>
                                <td>{{$val->number}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">آدرس :</td>
                                <td>{{$val->address}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">عنوان :</td>
                                <td>{{$val->title}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">توضیحات :</td>
                                <td>{{$val->desc}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- information start -->
        </div>
    </section>
@endsection
