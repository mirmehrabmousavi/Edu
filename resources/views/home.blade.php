@extends('layout.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="{{route('index')}}"><img src="/assets/img/logo.png" class="logo" alt=""/></a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li class="active"><a href="#">خانه<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="#">نسخه های جدید<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="new-home-1.html">نسخه پیش فرض</a></li>
                                        <li><a href="new-home-2.html">نسخه استاندارد</a></li>
                                        <li><a href="new-home-3.html">نسخه کلاسیک</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.html">خانه 1</a></li>
                                <li><a href="home-2.html">خانه 2</a></li>
                                <li><a href="home-3.html">خانه 3</a></li>
                                <li><a href="home-4.html">خانه 4</a></li>
                                <li><a href="home-5.html">خانه 5</a></li>
                                <li><a href="home-6.html">خانه 6</a></li>
                                <li><a href="home-7.html">خانه 7</a></li>
                                <li><a href="home-8.html">خانه 8</a></li>
                                <li><a href="home-9.html">خانه 9</a></li>
                                <li><a href="home-10.html">خانه 10</a></li>
                            </ul>
                        </li>

                        <li><a href="#">دوره های آموزشی<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="#">نمای با نوارکناری<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="grid-with-sidebar.html">نسخه 1</a></li>
                                        <li><a href="grid-with-sidebar-2.html">نسخه 2</a></li>
                                        <li><a href="grid-with-sidebar-3.html">نسخه 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="list-with-sidebar.html">طرح بندی لیستی</a></li>
                                <li><a href="#">نمای تمام صفحه<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="full-width-course.html">نسخه 1</a></li>
                                        <li><a href="full-width-course-2.html">نسخه 2</a></li>
                                        <li><a href="full-width-course-3.html">نسخه 3</a></li>
                                        <li><a href="full-width-course-4.html">نسخه 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">جزئیات دوره<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="detail.html">نسخه 1</a></li>
                                        <li><a href="detail-2.html">نسخه 2</a></li>
                                        <li><a href="detail-3.html">نسخه 3</a></li>
                                        <li><a href="detail-4.html">نسخه 4</a></li>
                                        <li><a href="detail-5.html">نسخه 5</a></li>
                                        <li><a href="detail-6.html">نسخه 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="find-instructor.html">لیست مدرس</a></li>
                                <li><a href="instructor-detail.html">جزئیات مدرس</a></li>
                            </ul>
                        </li>

                        <li><a href="#">صفحات<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu">
                                <li class=""><a href="#">پنل کاربری<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="dashboard.html">داشبورد</a></li>
                                        <li><a href="my-profile.html">حساب کاربری من</a></li>
                                        <li><a href="all-courses.html">دوره های من</a></li>
                                        <li><a href="my-order.html">سفارشات من</a></li>
                                        <li><a href="saved-courses.html">دوره های موردعلاقه</a></li>
                                        <li><a href="reviews.html">امتیازات من</a></li>
                                        <li><a href="settings.html">تنظیمات</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">فروشگاه<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="shop-full-width.html">تمام صفحه</a></li>
                                        <li><a href="shop-left-sidebar.html">سایدبار چپ</a></li>
                                        <li><a href="shop-right-sidebar.html">سایدبار راست</a></li>
                                        <li><a href="product-detail.html">جزئیات</a></li>
                                        <li><a href="add-to-cart.html">افزودن به سبد خرید</a></li>
                                        <li><a href="product-wishlist.html">موردعلاقه ها</a></li>
                                        <li><a href="checkout.html">تسویه حساب</a></li>
                                        <li><a href="shop-order.html">ثبت سفارش</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">درباره ما</a></li>
                                <li><a href="blog.html">لیست بلاگ</a></li>
                                <li><a href="blog-detail.html">جزئیات بلاگ</a></li>
                                <li><a href="pricing.html">پکیج قیمت</a></li>
                                <li><a href="404.html">صفحه 404</a></li>
                                <li><a href="register.html">ثبت نام</a></li>
                                <li><a href="component.html">المان ها</a></li>
                                <li><a href="privacy.html">قوانین و شرایط</a></li>
                                <li><a href="faq.html">سوالات متداول</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">تماس با ما</a></li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-left">
                        <li class="login_click light">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray pt-5">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">

                        <div class="d-user-avater">
                            <img src="/assets/img/user-3.jpg" class="img-fluid avater" alt="">
                            <h4>حسام موسوی</h4>
                            <span>تهران، کرج</span>
                        </div>

                        <div class="d-navigation">
                            <ul id="side-menu">
                                <li class="active"><a href="dashboard.html"><i class="ti-user"></i>داشبورد</a></li>
                                <li><a href="my-profile.html"><i class="ti-heart"></i>اکانت من</a></li>
                                <li><a href="add-listing.html"><i class="ti-plus"></i>افزودن دوره جدید</a></li>
                                <li><a href="saved-courses.html"><i class="ti-heart"></i>دوره های ذخیره شده</a></li>
                                <li><a href="my-order.html"><i class="ti-shopping-cart"></i>سفارشات من</a></li>
                                <li><a href="settings.html"><i class="ti-settings"></i>تنظیمات</a></li>
                                <li><a href="reviews.html"><i class="ti-comment-alt"></i>لیست نظرات</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>خروج</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>

                    </div>


                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">داشبورد</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="dashboard_stats_wrap_content"><h4 class="text-success">10</h4> <span>در حال بررسی</span>
                                </div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="dashboard_stats_wrap_content"><h4 class="text-warning">42</h4> <span>تکمیل شده</span>
                                </div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-pie-chart"></i></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="dashboard_stats_wrap_content"><h4 class="text-danger">70h</h4> <span>مدت کل دوره</span>
                                </div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-user"></i></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="dashboard_stats_wrap_content"><h4 class="text-info">22</h4> <span>تدریس آنلاین</span>
                                </div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-user"></i></div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                    <!-- row-->
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="content-box-01">
                                <div class="content-box-01-head mb-3"><h5 class="mb-0">به زودی</h5></div>
                                <div class="content-box-01-full mb-4">

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-2.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش ASP.Net - ساخت سایت شخصی</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-3.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">دوره آموزش پلاگین نویسی وردپرس</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-4.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش ساخت ربات تلگرام با PHP</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="content-box-01">
                                <div class="content-box-01-head mb-3"><h5 class="mb-0">تکمیل شده</h5></div>
                                <div class="content-box-01-full mb-4">

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/course-2.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش تبدیل PSD به HTML (یک)</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/course-3.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش ساخت اپلیکیشن Note با Swift</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/course-4.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش ساخت چت روم با PHP</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="content-box-01">
                                <div class="content-box-01-head mb-3"><h5 class="mb-0">پرمخاطب</h5></div>
                                <div class="content-box-01-full mb-4">

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-5.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش Kendo در ASP.Net MVC</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-6.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش ASP.Net - ساخت سایت شخصی</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="learnup-list">
                                        <div class="learnup-list-thumb">
                                            <a href="detail-6.html"><img src="assets/img/co-7.jpg" class="img-fluid"
                                                                         alt=""/></a>
                                        </div>
                                        <div class="learnup-list-caption">
                                            <h6><a href="detail-6.html">آموزش نحوه خرید هاست و دامنه</a></h6>
                                            <div class="learnup-info mt-2"><span class="ml-3">2ساعت 22دقیقه</span><span>4,52,236 شرکت کننده</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Row End -->

                    <!-- Row -->
                    <div class="row">

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="assets/img/course-1.jpg"
                                                                          class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left">
                                                <h4><a href="#">طراحی سایت</a></h4>
                                                <span>17 ویدئو</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="assets/img/course-2.jpg"
                                                                          class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left">
                                                <h4><a href="#">دیجیتال مارکتینگ</a></h4>
                                                <span>20 ویدئو</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="assets/img/course-3.jpg"
                                                                          class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left">
                                                <h4><a href="#">مالی و حسابداری</a></h4>
                                                <span>22 ویدئو</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="assets/img/course-5.jpg"
                                                                          class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left">
                                                <h4><a href="#">مهندسی نرم افزار</a></h4>
                                                <span>10 دوره</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>نوتیفیکیشن</h6>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <a href="#">
                                            <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">مریم امیری</a></h6>
                                            <small class="text-fade">داشبورد مدیریت جدید را بررسی کنید..</small>
                                            <span class="small">هم اکنون</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <a href="#">
                                            <div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">علی سعادت</a></h6>
                                            <small class="text-fade">می توانید سفارشی کنید..</small>
                                            <span class="small">2دقیقه پیش</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <a href="#">
                                            <div class="btn-circle-40 btn-info"><i class="ti-calendar"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">نیلوفر اکبری</a></h6>
                                            <small class="text-fade">به یک تیم تجاری پاسخگو نیاز داریم...</small>
                                            <span class="small">10دقیقه پیش</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <a href="#">
                                            <div class="btn-circle-40 btn-warning"><i class="ti-calendar"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">سینا داوودی</a></h6>
                                            <small class="text-fade">جلسه بعدی سه شنبه..</small>
                                            <span class="small">15دقیقه پیش</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Dashboard: Dashboard End ================================== -->
@endsection
