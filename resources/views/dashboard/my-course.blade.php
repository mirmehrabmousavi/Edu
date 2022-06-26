@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست دوره ها</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <!-- Course Style 1 For Student -->
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_fl_1">
                            <h4>همه دوره ها</h4>
                        </div>
                        <div class="dashboard_fl_2">
                            <div class="form-group col-lg-12 col-md-12">
                                <a href="{{route('addCourse')}}" class="btn btn-theme">افزودن دوره</a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_container_body">
                        @foreach($courses as $course)
                        <!-- Single Course -->
                            <div class="dashboard_single_course">
                                <div class="dashboard_single_course_thumb">
                                    <img
                                        src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}"
                                        class="img-fluid" alt="">
                                    <div class="dashboard_action">
                                        <a href="{{route('editCourse',['id' => $course->id])}}" class="btn btn-ect">ویرایش</a>
                                        <a href="{{route('course.show',['id' => $course->id])}}" class="btn btn-ect">مشاهده</a>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_caption">
                                    <div class="dashboard_single_course_head">
                                        <div class="dashboard_single_course_head_flex">
                                            <span
                                                class="dashboard_instructor">{{(auth()->user()->fname == null) ? auth()->user()->email : auth()->user()->fname.' '.auth()->user()->lname}}</span>
                                            <h4 class="dashboard_course_title">{{$course->title}}</h4>
                                            <div class="dashboard_rats">
                                                <div class="dashboard_rating">
                                                    <i class="ti-star filled"></i>
                                                    <i class="ti-star filled"></i>
                                                    <i class="ti-star filled"></i>
                                                    <i class="ti-star filled"></i>
                                                    <i class="ti-star"></i>
                                                </div>
                                                <span>(40 امتیاز)</span>
                                            </div>
                                        </div>
                                        <div class="dc_head_right">
                                            <h4 class="dc_price_rate theme-cl">{{$course->price}}</h4>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_des">
                                        <p>{{$course->b_desc}}</p>
                                        <div class="badge badge-{{($course->status_upload == 'منتشر شده') ? 'success' : 'danger' }}">{{($course->status_upload == 'منتشر شده') ? 'تایید شده' : 'در انتظار تایید' }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$courses->links('pagination.paginate')}}
                </div>

            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
