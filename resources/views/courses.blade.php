@extends('layout.app')

@section('content')

    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">دوره ها</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">دوره ها</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ Find courses with Sidebar ================================== -->
    <section class="pt-0">
        <div class="container">

            <!-- Onclick Sidebar -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div id="filter-sidebar" class="filter-sidebar">
                        <div class="filt-head">
                            <h4 class="filt-first">جستجوی پیشرفته</h4>
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">بستن <i class="ti-close"></i></a>
                        </div>
                        <div class="show-hide-sidebar">

                            <!-- Find New Property -->
                            <div class="sidebar-widgets">

                                <!-- Search Form -->
                                <form class="form-inline addons mb-3">
                                    <input class="form-control" type="search" placeholder="جستجو دوره" aria-label="Search">
                                    <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
                                </form>

                                <h4 class="side_title">دسته بندی دوره</h4>
                                <ul class="no-ul-list mb-3">
                                    @foreach($cat as $catt)
                                        <li>
                                            <input id="aa-4" class="checkbox-custom" name="aa-4" type="checkbox">
                                            <label for="aa-4" class="checkbox-custom-label">{{$catt->category_name}}</label>
                                        </li>
                                    @endforeach
                                </ul>

                                <h4 class="side_title">مدرسین</h4>
                                <ul class="no-ul-list mb-3">
                                    @foreach($teachers as $teacher)
                                        <li>
                                            <input id="aa-41" class="checkbox-custom" name="aa-41" type="checkbox">
                                            <label for="aa-41" class="checkbox-custom-label">{{($teacher->fname) ? $teacher->fname.' '.$teacher.lname : $teacher->email}}</label>
                                        </li>
                                    @endforeach
                                </ul>

                                <h4 class="side_title">نوع دوره</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                        <label for="a-10" class="checkbox-custom-label">همه</label>
                                    </li>
                                    <li>
                                        <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                        <label for="a-11" class="checkbox-custom-label">رایگان</label>
                                    </li>
                                    <li>
                                        <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                        <label for="a-12" class="checkbox-custom-label">نقدی</label>
                                    </li>
                                </ul>

                                <button class="btn btn-theme full-width mb-2">فیلتر کن</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 order-2 order-lg-1 order-md-2">
                    <div class="page_sidebar hide-23">

                        <!-- Search Form -->
                        <form class="form-inline addons mb-3">
                            <input class="form-control" type="search" placeholder="جستجو دوره" aria-label="Search">
                            <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
                        </form>

                        <h4 class="side_title">دسته بندی دوره</h4>
                        <ul class="no-ul-list mb-3">
                            @foreach($cat as $catt)
                            <li>
                                <input id="aa-4" class="checkbox-custom" name="aa-4" type="checkbox">
                                <label for="aa-4" class="checkbox-custom-label">{{$catt->category_name}}</label>
                            </li>
                            @endforeach
                        </ul>

                        <h4 class="side_title">مدرسین</h4>
                        <ul class="no-ul-list mb-3">
                            @foreach($teachers as $teacher)
                            <li>
                                <input id="aa-41" class="checkbox-custom" name="aa-41" type="checkbox">
                                <label for="aa-41" class="checkbox-custom-label">{{($teacher->fname) ? $teacher->fname.' '.$teacher->lname : $teacher->email}}</label>
                            </li>
                           @endforeach
                        </ul>

                        <h4 class="side_title">نوع دوره</h4>
                        <ul class="no-ul-list mb-3">
                            <li>
                                <input id="aa-10" class="checkbox-custom" name="aa-10" type="checkbox">
                                <label for="aa-10" class="checkbox-custom-label">همه (75)</label>
                            </li>
                            <li>
                                <input id="b-8" class="checkbox-custom" name="b-8" type="checkbox">
                                <label for="b-8" class="checkbox-custom-label">رایگان (15)</label>
                            </li>
                            <li>
                                <input id="b-9" class="checkbox-custom" name="b-9" type="checkbox">
                                <label for="b-9" class="checkbox-custom-label">نقدی (60)</label>
                            </li>
                        </ul>

                    </div>

                    <div class="page_sidebar hidden-md-down">
                        <h4 class="side_title">دوره های مرتبط</h4>
                        <div class="related_items mb-4">
                        @foreach($courses as $course)
                            <!-- Single Related Items -->
                                <div class="product_item">
                                    <div class="thumbnail">
                                        <a href="{{route('course.show',['id' => $course->id])}}"><img src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="info">
                                        <h6 class="product-title"><a href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a></h6>
                                        <div class="woo_rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="price"><p class="price_ver">{{$course->price}} تومان<del>{{$course->price_off}}ت</del>
										</p></span></div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 order-1 order-lg-2 order-md-1">

                    <!-- Row -->
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <strong>{{count($courses)}}</strong> دوره آموزشی یافت شد.
                        </div>
                    </div>
                    <!-- /Row -->

                    @foreach($courses as $val)
                    <div class="row">

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="education_block_grid style_2">
                                <div class="education_block_thumb n-shadow">
                                    <a href="{{route('course.show',['id' => $val->id])}}"><img src="{{$val->c_poster}}" class="img-fluid" alt=""></a>
                                    <div class="cources_price">{{$val->price}}</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="{{route('course.show',['id' => $val->id])}}">{{$val->title}}</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>8682 بازدید</li>
                                        <li><i class="ti-time ml-2"></i>{{$val->time}}</li>
                                        <li><i class="ti-star text-warning ml-2"></i>4.7 امتیاز</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="{{--{{route('teacher.show',['id' =>auth()->user()->id])}}--}}"><img src="{{(!empty(auth()->user()->profile)) ? url('upload/admin_images/'.auth()->user()->profile) : url('upload/no-profile.jpg')}}" class="img-fluid" alt=""></a></div>
                                        <h5><a href="{{--{{route('teacher.show',['id' => auth()->user()->id])}}--}}">{{$val->user_id}}</a></h5>
                                    </div>
                                    @php $mcourse = \App\Models\Course::where('user_id',$val->user_id)->get(); @endphp
                                    <div class="foot_lecture"><i class="ti-control-skip-forward ml-2"></i>{{count($mcourse)}} دوره آموزشی</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            {{$val->links('pagination.paginate')}}
                        </div>
                    </div>
                    <!-- /Row -->
                    @endforeach

                </div>

            </div>
            <!-- Row -->

        </div>
    </section>
    <!-- ============================ Find courses with Sidebar End ================================== -->

@endsection
