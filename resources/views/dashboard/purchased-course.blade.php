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
                            <h4>دوره های خریداری شده</h4>
                        </div>
                        <div class="dashboard_fl_2">
                            <ul class="mb0">
                                <li class="list-inline-item">

                                </li>
                                <li class="list-inline-item">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control" type="search" placeholder="نام دوره"
                                               aria-label="Search">
                                        <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dashboard_container_body">

                    @foreach($course as $val)
                        <!-- Single Course -->
                            <div class="dashboard_single_course">
                                <div class="dashboard_single_course_thumb">
                                    <img
                                        src="{{($val->c_poster != null) ? $val->c_poster : url('/upload/no-image.png')}}"
                                        class="img-fluid" alt="">
                                    <div class="dashboard_action">
                                        <a href="{{route('course.show',['id' => $val->id])}}" class="btn btn-ect">مشاهده</a>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_caption">
                                    <div class="dashboard_single_course_head">
                                        <div class="dashboard_single_course_head_flex">
                                            <span
                                                class="dashboard_instructor">{{(auth()->user()->fname == null) ? auth()->user()->email : auth()->user()->fname.' '.auth()->user()->lname}}</span>
                                            <h4 class="dashboard_course_title">{{$val->title}}</h4>
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
                                            <h4 class="dc_price_rate theme-cl">{{$val->price}}</h4>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_des">
                                        <p>{{$val->b_desc}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$course->links('pagination.paginate')}}
                </div>

            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
