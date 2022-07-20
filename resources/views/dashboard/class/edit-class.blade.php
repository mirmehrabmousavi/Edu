 required@extends('dashboard.layout.app')
@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش کلاس</li>
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
                            <h4>کلاس خود را ثبت نمایید</h4>
                        </div>
                    </div>
                    <div class="dashboard_container_body p-4">
                        <!-- Basic info -->
                        <form action="{{route('updateClass',['id' => $class->id])}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>عنوان</label>
                                        <input type="text" name="topic" class="form-control" value="{{$class->topic}}" placeholder="عنوان" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>تاریخ شروع</label>
                                        <input type="datetime-local" name="start_time" class="form-control" value="{{$class->start_time}}" placeholder="تاریخ شروع" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>مدت زمان کلاس</label>
                                        <input type="text" name="duration" class="form-control" value="{{$class->duration}}" placeholder="مدت زمان کلاس" required>
                                    </div>

                                    <div class="form-group col-md-6">

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>لینک ورود به کلاس</label>
                                        <input type="text" name="join_url" class="form-control" value="{{$class->join_url}}" placeholder="لینک ورود به کلاس" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>گذرواژه</label>
                                        <input type="text" name="password" class="form-control" value="{{$class->password}}" placeholder="گذرواژه" required>
                                    </div>

                                </div>
                            </div>
                            <!-- Basic info -->
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="btn btn-theme" type="submit">بروزرسانی</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->


    </div>
@endsection
