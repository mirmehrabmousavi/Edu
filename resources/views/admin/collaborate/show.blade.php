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
                                <td>{{$coll->name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">نام خانوادگی :</td>
                                <td>{{$coll->family}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">ایمیل :</td>
                                <td>{{$coll->email}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">شماره تماس :</td>
                                <td>{{$coll->number}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">آدرس :</td>
                                <td>{{$coll->address}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">عنوان :</td>
                                <td>{{$coll->title}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">توضیحات :</td>
                                <td>{{$coll->desc}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">رزومه :</td>
                                <td>{{$coll->resume}}</td>
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
