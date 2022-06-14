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


    <!-- ============================ Find Courses with Sidebar ================================== -->
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
                                    <li>
                                        <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                        <label for="a-4" class="checkbox-custom-label">برنامه نویسی (3)</label>
                                    </li>
                                    <li>
                                        <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                        <label for="a-5" class="checkbox-custom-label">طراحی سایت (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                        <label for="a-6" class="checkbox-custom-label">عمومی (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                        <label for="a-7" class="checkbox-custom-label">فناوری اطلاعات (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                        <label for="a-8" class="checkbox-custom-label">گرافیک (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                        <label for="a-9" class="checkbox-custom-label">شبکه و امنیت (2)</label>
                                    </li>
                                </ul>

                                <h4 class="side_title">مدرسین</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                        <label for="a-1" class="checkbox-custom-label">حسام موسوی (4)</label>
                                    </li>
                                    <li>
                                        <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                        <label for="a-2" class="checkbox-custom-label">مهرداد عظیمی (11)</label>
                                    </li>
                                    <li>
                                        <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                        <label for="a-6" class="checkbox-custom-label">الهام کریمی (4)</label>
                                    </li>
                                    <li>
                                        <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                        <label for="a-7" class="checkbox-custom-label">مسعود راد (7)</label>
                                    </li>
                                    <li>
                                        <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                        <label for="a-8" class="checkbox-custom-label">مهدی کشاورز</label>
                                    </li>
                                    <li>
                                        <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                        <label for="a-9" class="checkbox-custom-label">شادی عبدی</label>
                                    </li>
                                </ul>

                                <h4 class="side_title">نوع دوره</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                        <label for="a-10" class="checkbox-custom-label">همه (75)</label>
                                    </li>
                                    <li>
                                        <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                        <label for="a-11" class="checkbox-custom-label">رایگان (15)</label>
                                    </li>
                                    <li>
                                        <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                        <label for="a-12" class="checkbox-custom-label">نقدی (60)</label>
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
                                <input id="aa-4" class="checkbox-custom" name="aa-4" type="checkbox">
                                <label for="aa-4" class="checkbox-custom-label">{{$cat->category_name}}</label>
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
                            <!-- Single Related Items -->
                            <div class="product_item">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/img/book-1.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="info">
                                    <h6 class="product-title"><a href="#">آموزش ساخت فروشگاه اینترنتی با PHP</a></h6>
                                    <div class="woo_rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="price"><p class="price_ver">9900 تومان<del>14900ت</del>
										</p></span></div>
                            </div>
                            <!-- Single Related Items -->
                            <div class="product_item">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/img/book-2.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="info">
                                    <h6 class="product-title"><a href="#">آموزش ساخت اپلیکیشن شیپور با اندروید</a></h6>
                                    <div class="woo_rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <span class="price"><p class="price_ver">8900 تومان<del>17900 ت</del>
										</p></span></div>
                            </div>
                            <!-- Single Related Items -->
                            <div class="product_item">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/img/book-3.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="info">
                                    <h6 class="product-title"><a href="#">آموزش ساخت یک اپلیکیشن اندرویدی در ۱۲ ساعت</a></h6>
                                    <div class="woo_rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="price"><p class="price_ver">19900 تومان<del>27900 ت</del>
										</p></span></div>
                            </div>
                            <!-- Single Related Items -->
                            <div class="product_item">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/img/book-4.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="info">
                                    <h6 class="product-title"><a href="#">آموزش ساخت اپلیکیشن چت با اندروید</a></h6>
                                    <div class="woo_rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="price"><p class="price_ver">59900 تومان<del>99900 ت</del>
										</p></span></div>
                            </div>
                        </div>

                        <h4 class="side_title">تگ های پرمخاطب</h4>
                        <div class="popular_tags">
                            <!-- Tags -->
                            <div class="tag_cloud">
                                <a href="#" class="tag-cloud-lin">کسب و کار</a>
                                <a href="#" class="tag-cloud-lin">طراحی سایت</a>
                                <a href="#" class="tag-cloud-lin">سئو</a>
                                <a href="#" class="tag-cloud-lin">php</a>
                                <a href="#" class="tag-cloud-lin">وردپرس</a>
                                <a href="#" class="tag-cloud-lin">سی شارپ</a>
                                <a href="#" class="tag-cloud-lin">مهارت</a>
                                <a href="#" class="tag-cloud-lin">نرم افزار</a>
                                <a href="#" class="tag-cloud-lin">حسابداری</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 order-1 order-lg-2 order-md-1">

                    <!-- Row -->
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <strong>{{count($courses)}}</strong> دوره آموزشی یافت شد.
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ordering">
                          {{--  <div class="filter_wraps">
                                <div class="dn db-991 mt30 mb0 show-23">
                                    <div id="main2">
                                        <a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2"><span><i class="fas fa-arrow-alt-circle-right"></i></span>باکس فیلتر</a>
                                    </div>
                                </div>
                                <div class="dropdown show">
                                    <a class="btn btn-custom dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        دوره های آموزشی
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">پرمخاطب</a>
                                        <a class="dropdown-item" href="#">جدید</a>
                                        <a class="dropdown-item" href="#">ویژه</a>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">

                        @foreach($courses as $val)
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
                                        <div class="path-img"><a href="{{route('teacher.show',['id' =>auth()->user()->id])}}"><img src="{{(!empty(auth()->user()->profile)) ? url('upload/admin_images/'.auth()->user()->profile) : url('upload/no_image.jpg')}}" class="img-fluid" alt=""></a></div>
                                        <h5><a href="{{route('teacher.show',['id' => auth()->user()->id])}}">{{$val->user_id}}</a></h5>
                                    </div>
                                    @php $mcourse = \App\Models\Course::where('user_id',$val->user_id)->get(); @endphp
                                    <div class="foot_lecture"><i class="ti-control-skip-forward ml-2"></i>{{count($mcourse)}} دوره آموزشی</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                                <span class="ti-arrow-right"></span>
                                                <span class="sr-only">قبل</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span class="ti-arrow-left"></span>
                                                <span class="sr-only">بعد</span>
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
    <!-- ============================ Find Courses with Sidebar End ================================== -->

@endsection
