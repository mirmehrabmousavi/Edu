@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">کلاس های من</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                                <h4>کلاس ها</h4>
                            </div>
                            <div class="dashboard_fl_2">
                                <div class="form-group col-lg-12 col-md-12">
                                    <a href="{{route('addClass')}}" class="btn btn-theme">افزودن کلاس</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_container_body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">تاریخ</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">جمع کل</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">#0000149</th>
                                    <td>2مهر 1399</td>
                                    <td><span class="payment_status inprogress">درحال بررسی</span></td>
                                    <td>110000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#0000150</th>
                                    <td>4شهریور 1399</td>
                                    <td><span class="payment_status complete">تکمیل</span></td>
                                    <td>119000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#0000151</th>
                                    <td>7مرداد 1399</td>
                                    <td><span class="payment_status complete">تکمیل</span></td>
                                    <td>149000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#0000152</th>
                                    <td>10تیر 1399</td>
                                    <td><span class="payment_status pending">در انتظار پرداخت</span></td>
                                    <td>199000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#0000153</th>
                                    <td>21خرداد 1399</td>
                                    <td><span class="payment_status hold">در صف نتظار</span></td>
                                    <td>166000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#0000154</th>
                                    <td>11اردیبهشت 1399</td>
                                    <td><span class="payment_status cancel">کنسل</span></td>
                                    <td>862000 ت</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
