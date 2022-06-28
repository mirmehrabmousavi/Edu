@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">پرداخت ها</li>
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
                        <div class="dashboard_fl_1">
                            <h4>پرداخت ها</h4>
                        </div>
                    </div>
                    <div class="dashboard_container_body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">عنوان پرداخت</th>
                                    <th scope="col">جمع کل</th>
                                    <th scope="col">تاریخ</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transaction as $val)
                                <tr>
                                    <th scope="row">#0000{{+$loop->index+1}}</th>
                                    @php $course = \App\Models\Course::where('id',$val->course_id)->first() @endphp
                                    <td>{{$course->title}}</td>
                                    <td>{{$val->paid}}</td>
                                    <td>{{$val->created_at->diffForHumans()}}</td>
                                    @php
                                        $status = 'موفق';
                                        $color = '';
                                        switch ($val->status) {
                                            case 0:
                                                $status = 'کنسل شده';
                                                $color = 'cancel';
                                                break;
                                            case 1:
                                                $status = 'در انتظار پرداخت';
                                                $color = 'pending';
                                                break;
                                            case 2:
                                                $status = 'موفق';
                                                $color = 'complete';
                                                break;
                                        }
                                    @endphp
                                    <td><span class="payment_status {{$color}}">{{$status}}</span></td>
                                    {{--<td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>--}}
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$transaction->links('pagination.paginate')}}
                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
