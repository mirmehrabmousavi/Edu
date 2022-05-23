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
                        @if(Route::has('login'))
                            @auth
                                <li class="login_click light">
                                    <a href="{{route('home')}}">داشبورد</a>
                                </li>
                            @else
                                <li class="login_click light">
                                    <a href="#{{--{{route('login')}}--}}" data-toggle="modal" data-target="#login">ورود</a>
                                </li>
                                @if(Route::has('register'))
                                    <li class="login_click bg-green">
                                        <a href="#{{--{{route('register')}}--}}" data-toggle="modal" data-target="#signup">ثبت نام</a>
                                    </li>
                                @endif
                            @endauth

                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>



    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ورود به حساب</h4>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" class="form-control" name="email" placeholder="نام کاربری" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input type="password" class="form-control" name="password" placeholder="*******" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ورود به حساب</button>
                            </div>

                        </form>
                    </div>

                    <div class="social-login mb-3">
                        <ul>
                            <li>
                                <input id="reg" class="checkbox-custom" name="reg" type="checkbox">
                                <label for="reg" class="checkbox-custom-label">ذخیره رمزعبور</label>
                            </li>
                            <li class="left"><a href="#" class="theme-cl">رمز عبور خود را فراموش کرده اید؟</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ثبت نام</h4>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام کامل" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="پست الکترونیکی" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="شماره تماس" name="number" value="{{ old('number') }}" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="گذرواژه" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="تایید گذرواژه" name="password_confirmation" required autocomplete="new-password">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ثبت نام</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner hero-inner-2" style="background:#152974;" data-overlay="0">
        <div class="container">
            <!-- Type -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="banner-search-2 transparent">
                        <h1 class="big-header-capt cl_2 mb-2 f_2">تجربه یادگیری آسان، اجتماعی و تعاملی آنلاین</h1>
                        <p>هر موضوعی را در هر زمان مطالعه کنید. هزاران دوره آموزشی را با کمترین قیمت جستجو کنید!</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-modern dark">ثبت نام کنید<span><i class="ti-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="flixio pt-5">
                        <img class="img-fluid" src="/assets/img/eloip.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Trips Facts Start ================================== -->
    <div class="brands_up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_partner_brands large op-1 shadow_upper">
                        <div class="single_brand" id="brand-slide" dir="rtl">

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-1.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-2.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-3.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-4.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-5.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-6.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-7.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-8.png" class="img-fluid" alt="" />
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                <img src="/assets/img/lg-9.png" class="img-fluid" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Trips Facts Start ================================== -->

    <!-- ========================== Featured Category Section =============================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>دسته بندی های منتخب</p>
                        <h2>موضوعات و محورهای آموزشی <span class="theme-cl">پرمنتخب</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-1">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/content.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">مهندسی نرم افزار</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>23 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-2">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/briefcase.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">کسب و کار</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>58 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-3">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/career.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">حسابداری</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>74 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-4">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/python.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">برنامه نویسی وب</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>65 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-10">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/designer.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">طراحی و گرافیک</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>43 دوره آوزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-6">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/speaker.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">بورس و بازار سهام</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>82 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-7">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/photo.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">هنر و عکاسی</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>25 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-8">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/yoga.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">ورزش و سلامتی</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>43 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-9">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="/assets/img/health.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">سبک زندگی</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>38 دوره آموزشی</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ========================== Featured Category Section =============================== -->

    <!-- ============================ Featured Courses Start ================================== -->
    <section class="light-2">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>دوره آموزشی پرمخاطب</p>
                        <h2>موضوعات و محورهای آموزشی <span class="theme-cl">پرمخاطب</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-2.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش ASP.Net - ساخت سایت شخصی</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>حسین راد</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>11 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.9</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-7">برنامه نویسی</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">890ت<div class="less_offer">999ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-3.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش ساخت ربات تلگرام با PHP</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>آدام ویکنوی</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>13 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.6</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-9">حسابداری</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">510ت<div class="less_offer">799ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-4.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش برنامه نویسی‌اندروید</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>مسعود زارعی</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>15 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.7</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-4">استارت آپ</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">549ت<div class="less_offer">849ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-5.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش تبدیل PSD به HTML (یک)</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>نیلوفر کشاورز</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>16 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.9</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-3">گرافیک</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">449ت<div class="less_offer">749ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-6.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش کار با وکتور در فتوشاپ</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>الهام کریمی</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>10 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.8</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-2">انیمیشن</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">599ت<div class="less_offer">699ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="course-detail.html"><img src="/assets/img/co-7.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="course-detail.html">آموزش طراحی قالب ریسپانسیو</a></h4>
                                <div class="_course_admin_ol12">مدرس: <strong>رابرت ویلسون</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        <li><i class="ti-desktop ml-1"></i>12 دوره</li>
                                        <li><span class="class online"></span>آنلاین</li>
                                    </ul>
                                </div>

                                <div class="course_rate_system_wrap">
                                    <div class="course_rate_system">
                                        <div class="course_ratting">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="course_reviews_info">
                                            <strong class="mid">4.7</strong>
                                        </div>
                                    </div>
                                    <div class="_course_category_01"><span class="cat-1">طراحی سایت</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">700ت<div class="less_offer">1099ت</div></div>
                                <div class="cources_info_style3">
                                    <a href="course-detail.html" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- ============================ Featured Courses End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section>
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-short">
                        <div class="sec-heading mb-3">
                            <h2>مسیرهای <span class="theme-cl">یادگیری </span>و مجموعه های آموزشی</h2>
                        </div>
                        <p>حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                        <p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                        <div class="cource_facts">
                            <ul>
                                <li><span class="theme-cl">7+</span>ساعت آموزش</li>
                                <li><span class="theme-cl">77</span>نفر دانشجو</li>
                                <li><span class="theme-cl">84+</span>حوزه تخصصی</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-modern">درباره ما<span><i class="ti-arrow-left"></i></span></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap_img">

                        <img src="/assets/img/edu_2.png" class="img-fluid" alt="">

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================ Featured Instructor Start ================================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>استاتید برتر</p>
                        <h2>معلم های <span class="theme-cl">تدریس خصوصی</span> درس های مختلف</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="four_slide-dots articles arrow_middle" dir="rtl">

                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="instructor-detail.html"><img src="/assets/img/user-1.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="instructor-detail.html">دانیل دیوانسکر</a></h4>
                                    <span>طراح وب</span>
                                    <ul>
                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="instructor-detail.html"><img src="/assets/img/user-2.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="instructor-detail.html">شیلپا سینگ</a></h4>
                                    <span>مدیر تیم</span>
                                    <ul>
                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="instructor-detail.html"><img src="/assets/img/user-3.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="instructor-detail.html">آدام ویستون</a></h4>
                                    <span>مدیر فروش</span>
                                    <ul>
                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="instructor-detail.html"><img src="/assets/img/user-4.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="instructor-detail.html">راگینی سینگ</a></h4>
                                    <span>مدیر عامل</span>
                                    <ul>
                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="instructor-detail.html"><img src="/assets/img/user-5.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="instructor-detail.html">دانیال ویلسون</a></h4>
                                    <span>برنامه نویس</span>
                                    <ul>
                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Featured Instructor End ================================== -->

    <!-- ========================== Articles Section =============================== -->
    <section class="bg-light min-sec">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading-flex">
                        <h2 class="pl-2">آخرین اخبار</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/assets/img/b-1.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>چطور زبان انگلیسی را سریع یاد بگیریم؟</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/assets/img/user-1.jpg" class="img-fluid" alt="" /></div>
                                <h4>آدام ویلسون</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/assets/img/b-2.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>لزوم یادگیری زبان در دنیای امروزی!</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/assets/img/user-2.jpg" class="img-fluid" alt="" /></div>
                                <h4>جان اسمیت</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/assets/img/b-3.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>چطور امتحان حضوری موفقی داشته باشیم؟</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/assets/img/user-3.jpg" class="img-fluid" alt="" /></div>
                                <h4>دنیل ویکیونز</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================== Articles Section =============================== -->

    <!-- ========================== Brand Section =============================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>مردم چه می گویند؟</p>
                        <h2><span class="theme-cl">امتیازات</span> دانشجویان موفق و برتر</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="reviews_third" id="reviews-slide" dir="rtl">

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-2.jpg" class="img-fluid" alt=""></div>
                                <h5>مژده قاسمی</h5>
                                <span>مدیر عامل شرکت</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-1.jpg" class="img-fluid" alt=""></div>
                                <h5>دانیال ویلسون</h5>
                                <span>مدرس ریاضی</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-3.jpg" class="img-fluid" alt=""></div>
                                <h5>آدام واردیلیا</h5>
                                <span>مدیر عامل شرکت</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-4.jpg" class="img-fluid" alt=""></div>
                                <h5>الهام کرمی</h5>
                                <span>مدرس فیزیک</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-5.jpg" class="img-fluid" alt=""></div>
                                <h5>مسعود راد</h5>
                                <span>مدیر فروش</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-6.jpg" class="img-fluid" alt=""></div>
                                <h5>الهام کرمی</h5>
                                <span>دیجیتال مارکتنیگ</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-right"></i></span><img src="/assets/img/user-7.jpg" class="img-fluid" alt=""></div>
                                <h5>آدام واردیلیا</h5>
                                <span>مدیر عامل شرکت</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردها و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Brand Section =============================== -->

@endsection
