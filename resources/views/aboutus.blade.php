@extends('layout.app')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">درباره ما چه میگویند؟</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap">
                        <div class="sec-heading mb-3 f-24">
                            <h2>مسیرهای <span class="theme-cl">یادگیری </span>و مجموعه های آموزشی</h2>
                        </div>
                        <div class="list_facts">
                            <div class="list_facts_icons"><i class="ti-desktop"></i></div>
                            <div class="list_facts_caption">
                                <h4>نظارت دقیق و ارزیابی عملکرد معلمان</h4>
                                <p>هر کجای ایران یا دنیا که هستید، معلم های ما به صورت زنده به شما تدریس می کنند.</p>
                            </div>
                        </div>
                        <div class="list_facts">
                            <div class="list_facts_icons"><i class="ti-heart"></i></div>
                            <div class="list_facts_caption">
                                <h4>شفافیت قیمت و تضمین پایین‌ترین قیمت‌ها</h4>
                                <p>در زمان ثبت درخواست امکان نحوه برگزاری کلاس بصورت حضوری یا آنلاین وجود دارد.</p>
                            </div>
                        </div>
                        <div class="list_facts">
                            <div class="list_facts_icons"><i class="ti-harddrives"></i></div>
                            <div class="list_facts_caption">
                                <h4>امکان برگزاری کلاس بصورت حضوری یا آنلاین</h4>
                                <p>از بین بیش از 2000 معلم فعال با استفاده از فیلتر‌ها بهترین استاد متناسب با شرایط خود را بیابید.</p>
                            </div>
                        </div>

                    </div>
                    <a href="#" class="btn btn-modern">درباره ما<span><i class="ti-arrow-left"></i></span></a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap_img">

                        <img src="/assets/img/edu_2.png" class="img-fluid" alt="" />

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ========================== About Facts List Section =============================== -->

    <!-- ============================ Featured Instructor Start ================================== -->
    <section class="bg-light">
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

    <!-- ============================ Testimonial Start ================================== -->
    <section style="background:url(assets/img/testimonial.png)">
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
                <div class="col-md-12">
                    <div id="testimonials_style" class="slick-carousel-3 arrow_middle" dir="rtl">
                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="pic">
                                    <img src="/assets/img/user-1.jpg" alt="">
                                </div>
                                <div class="client-detail">
                                    <h3 class="testimonial-title">آدام آلوریام</h3>
                                    <span class="post">برنامه نویس وب</span>
                                </div>
                            </div>
                            <p class="description">
                                " ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. "
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="pic">
                                    <img src="/assets/img/user-2.jpg" alt="">
                                </div>
                                <div class="client-detail">
                                    <h3 class="testimonial-title">ایلا میلیا</h3>
                                    <span class="post">مدیر پروژه</span>
                                </div>
                            </div>
                            <p class="description">
                                " در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد."
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="pic">
                                    <img src="/assets/img/user-3.jpg" alt="">
                                </div>
                                <div class="client-detail">
                                    <h3 class="testimonial-title">سینا زارعی</h3>
                                    <span class="post">طراح وب</span>
                                </div>
                            </div>
                            <p class="description">
                                " کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد."
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="pic">
                                    <img src="/assets/img/user-4.jpg" alt="">
                                </div>
                                <div class="client-detail">
                                    <h3 class="testimonial-title">ویلیامسون</h3>
                                    <span class="post">طراح وب</span>
                                </div>
                            </div>
                            <p class="description">
                                " چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. "
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Testimonial End ================================== -->
@endsection
