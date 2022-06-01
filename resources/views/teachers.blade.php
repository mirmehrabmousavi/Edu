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
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لیست مدرس</li>
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
                            <li>
                                <input id="aa-4" class="checkbox-custom" name="aa-4" type="checkbox">
                                <label for="aa-4" class="checkbox-custom-label">برنامه نویسی (3)</label>
                            </li>
                            <li>
                                <input id="aa-5" class="checkbox-custom" name="aa-5" type="checkbox">
                                <label for="aa-5" class="checkbox-custom-label">طراحی سایت (2)</label>
                            </li>
                            <li>
                                <input id="aa-6" class="checkbox-custom" name="aa-6" type="checkbox">
                                <label for="aa-6" class="checkbox-custom-label">عمومی (2)</label>
                            </li>
                            <li>
                                <input id="aa-7" class="checkbox-custom" name="aa-7" type="checkbox">
                                <label for="aa-7" class="checkbox-custom-label">فناوری و اطلاعات (2)</label>
                            </li>
                            <li>
                                <input id="aa-8" class="checkbox-custom" name="aa-8" type="checkbox">
                                <label for="aa-8" class="checkbox-custom-label">گرافیک (2)</label>
                            </li>
                            <li>
                                <input id="aa-9" class="checkbox-custom" name="aa-9" type="checkbox">
                                <label for="aa-9" class="checkbox-custom-label">شبکه و امنیت (2)</label>
                            </li>
                        </ul>

                        <h4 class="side_title">مدرسین</h4>
                        <ul class="no-ul-list mb-3">
                            <li>
                                <input id="aa-41" class="checkbox-custom" name="aa-41" type="checkbox">
                                <label for="aa-41" class="checkbox-custom-label">حسام موسوی (4)</label>
                            </li>
                            <li>
                                <input id="aa-2" class="checkbox-custom" name="aa-2" type="checkbox">
                                <label for="aa-2" class="checkbox-custom-label">مهرداد عظیمی (11)</label>
                            </li>
                            <li>
                                <input id="aa-3" class="checkbox-custom" name="aa-3" type="checkbox">
                                <label for="aa-3" class="checkbox-custom-label">الهام کریمی (4)</label>
                            </li>
                            <li>
                                <input id="aa-71" class="checkbox-custom" name="aa-71" type="checkbox">
                                <label for="aa-71" class="checkbox-custom-label">مسعود راد (7)</label>
                            </li>
                            <li>
                                <input id="aa-81" class="checkbox-custom" name="aa-81" type="checkbox">
                                <label for="aa-81" class="checkbox-custom-label">مهدی کشاورز</label>
                            </li>
                            <li>
                                <input id="aa-91" class="checkbox-custom" name="aa-91" type="checkbox">
                                <label for="aa-91" class="checkbox-custom-label">شادی عبدی</label>
                            </li>
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
                                    <a href="#"><img src="/assets/img/book-1.png" class="img-fluid" alt=""></a>
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
                                    <a href="#"><img src="/assets/img/book-2.png" class="img-fluid" alt=""></a>
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
                                    <a href="#"><img src="/assets/img/book-3.png" class="img-fluid" alt=""></a>
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
                                    <a href="#"><img src="/assets/img/book-4.png" class="img-fluid" alt=""></a>
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
                            <strong>142</strong> مدرس یافت شد.
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ordering">
                            <div class="filter_wraps">
                                <div class="dn db-991 mt30 mb0 show-23">
                                    <div id="main2">
                                        <a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2"><span><i class="fas fa-arrow-alt-circle-right"></i></span>باکس فیلتر</a>
                                    </div>
                                </div>
                                <div class="dropdown show">
                                    <a class="btn btn-custom dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        مدرس
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">پرمخاطب</a>
                                        <a class="dropdown-item" href="#">جدید</a>
                                        <a class="dropdown-item" href="#">ویژه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="edu_wraper p-0">

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">احسان محمدی</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>مدرس زبان انگلیسی</li>
                                            <li><i class="ti-video-camera"></i>25 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 3سال</li>
                                        </ul>
                                        <p>او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاد در گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-8.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">مریم مجدی</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>برنامه نویس</li>
                                            <li><i class="ti-video-camera"></i>102 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 4سال</li>
                                        </ul>
                                        <p>شاگردانش از او رضایت خیلی بالایی داشته‌اند. او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاددر گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">فرخ جوادی</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>گرافیست</li>
                                            <li><i class="ti-video-camera"></i>54 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 5سال</li>
                                        </ul>
                                        <p>او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاد در گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-4.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">یاسمین نصر</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>طراح سایت</li>
                                            <li><i class="ti-video-camera"></i>62 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 2سال</li>
                                        </ul>
                                        <p>شاگردانش از او رضایت خیلی بالایی داشته‌اند. او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاددر گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-5.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">امید دیانت زاده</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>حسابدار</li>
                                            <li><i class="ti-video-camera"></i>45 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 3سال</li>
                                        </ul>
                                        <p>او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاد در گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Instructor -->
                                <div class="single_instructor border">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="/assets/img/user-6.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">بنفشه قلی زاده</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-tag"></i>طراح سایت</li>
                                            <li><i class="ti-video-camera"></i>72 دوره</li>
                                            <li><i class="ti-user"></i>عضویت: 1سال</li>
                                        </ul>
                                        <p>شاگردانش از او رضایت خیلی بالایی داشته‌اند. او می‌تواند به صورت حضوری در شهر تهران و به صورت آنلاین بر بستر اینترنت تدریس کند. این استاددر گروه‌های درسی «ابتدایی» و «ریاضی متوسطه اول» تدریس خصوصی می‌کند.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

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
    <!-- ============================ Find Courses with Sidebar End ================================== -->
@endsection
