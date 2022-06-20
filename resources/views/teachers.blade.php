@extends('layout.app')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">لیست مدرس</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لیست مدرس</li>
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
                                    @foreach($cat as $cat)
                                    <li>
                                        <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                        <label for="a-4" class="checkbox-custom-label">{{$cat->category_name}}</label>
                                    </li>
                                   @endforeach
                                </ul>

                                <h4 class="side_title">مدرسین</h4>
                                <ul class="no-ul-list mb-3">
                                    @foreach($users as $user)
                                    <li>
                                        <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                        <label for="a-1" class="checkbox-custom-label">{{$user->fname.' '.$user->lname}}</label>
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
                            @foreach($cat as $cat)
                                <li>
                                    <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                    <label for="a-4" class="checkbox-custom-label">{{$cat->category_name}}</label>
                                </li>
                            @endforeach
                        </ul>

                        <h4 class="side_title">مدرسین</h4>
                        <ul class="no-ul-list mb-3">
                            @foreach($users as $user)
                                <li>
                                    <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                    <label for="a-1" class="checkbox-custom-label">{{($user->fanme == null) ? $user->email : $user->fname.' '.$user->lname}}</label>
                                </li>
                            @endforeach
                        </ul>

                        <h4 class="side_title">نوع دوره</h4>
                        <ul class="no-ul-list mb-3">
                            <li>
                                <input id="aa-10" class="checkbox-custom" name="aa-10" type="checkbox">
                                <label for="aa-10" class="checkbox-custom-label">همه</label>
                            </li>
                            <li>
                                <input id="b-8" class="checkbox-custom" name="b-8" type="checkbox">
                                <label for="b-8" class="checkbox-custom-label">رایگان</label>
                            </li>
                            <li>
                                <input id="b-9" class="checkbox-custom" name="b-9" type="checkbox">
                                <label for="b-9" class="checkbox-custom-label">نقدی</label>
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
                                    <span class="price"><p class="price_ver">{{$price}} تومان<del>{{$price_off}}ت</del>
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
                            <strong>{{count($users)}}</strong> مدرس یافت شد.
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="edu_wraper p-0">
                                @foreach($users as $user)
                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <img src="{{(!empty($user->profile)) ? url('upload/admin_images/'.$user->profile) : url('upload/no-profile.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4>{{($user->fname == null) ? $user->email : $taecher->fname.' '.$user->lname}}</h4>
                                        <h5>{{($user->fname != null) ? $user->email : ''}}</h5>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>{{$user->job}}</li>
                                            @php $course = \App\Models\Course::where('user_id',$user->email)->get(); @endphp
                                            <li><i class="ti-video-camera"></i>{{count($course)}} دوره</li>
                                            <li><i class="ti-user"></i>عضویت: {{$user->created_at->diffForHumans()}}</li>
                                        </ul>
                                        <p>{{$user->bio}}</p>
                                        <ul class="social_info">
                                            <li><a href="{{$user->facebook}}"><i class="ti-facebook"></i></a></li>
                                            <li><a href="{{$user->twitter}}"><i class="ti-twitter"></i></a></li>
                                            <li><a href="{{$user->linkedin}}"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="{{$user->instagram}}"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="pagination p-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span class="ti-arrow-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span class="ti-arrow-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Row -->

                </div>

            </div>
            <!-- Row -->

        </div>
    </section>
    <!-- ============================ Find courses with Sidebar End ================================== -->
@endsection
