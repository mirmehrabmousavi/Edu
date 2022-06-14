@extends('layout.app')

@section('content')

    <!-- ============================ Instructor header Start================================== -->
    <div class="image-cover ed_detail_head invers" style="background:#f4f5f7;">
        <div class="container">
            <div class="row align-items-center">



                <div class="col-lg-12 col-md-12">
                    <div class="viewer_detail_wraps">
                        <div class="viewer_detail_thumb">
                            <img src="{{(!empty(auth()->user()->profile)) ? url('upload/admin_images/'.auth()->user()->profile) : url('upload/no_image.jpg')}}" class="img-fluid" alt="" />
                            <div class="viewer_status">حرفه ای</div>
                        </div>
                        <div class="caption">
                            <div class="viewer_package_status">6سال عضویت</div>
                            <div class="viewer_header">
                                <h4>{{($user->fname) ? $user->fname.' '.$user->lname : $user->email}}</h4>
                                <span class="viewer_location">گرافیست، کرج</span>
                                <ul class="mt-2">
                                    <li><strong>112</strong> نکات درسی</li>
                                    <li><strong>87</strong> ویدئو آموزشی</li>
                                    <li><strong>120</strong> دوره</li>
                                </ul>
                            </div>
                            <div class="viewer_header">
                                <ul class="badge_info">
                                    <li class="started"><i class="ti-rocket"></i></li>
                                    <li class="medium"><i class="ti-cup"></i></li>
                                    <li class="platinum"><i class="ti-thumb-up"></i></li>
                                    <li class="elite unlock"><i class="ti-medall"></i></li>
                                    <li class="power unlock"><i class="ti-crown"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Instructor header End ================================== -->

    <!-- ============================ Instructor Detail ================================== -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="custom-tab customize-tab tabs_creative">
                        <ul class="nav nav-tabs pb-2 b-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">دوره های مرتبط</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">درباره استاد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">نظرات</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <!-- Classess -->
                            <div class="tab-pane fade show active p-2" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-1.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">25:10</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش ساخت ربات تلگرام با PHP</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 7 از 12</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>برنامه نویسی
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-2.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">40:25</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش ASP.Net - ساخت سایت نیازمندی</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 8 از 10</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>برنامه نویسی
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-3.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">12:10</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش تست نفوذ سایت های وردپرسی</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 7 از 15</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>طراحی سایت
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-4.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">20:10</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش ساخت سیستم تیکت در PHP</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 5 از 10</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>طراحی سایت
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-5.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">40:20</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش تبدیل گفتار به نوشتار در اندروید</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 7 از 15</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>برنامه نویسی
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Video -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="edu-watching">
                                            <div class="property_video sm">
                                                <div class="thumb">
                                                    <img class="pro_img img-fluid w100" src="assets/img/course-6.jpg" alt="7.jpg">
                                                    <div class="overlay_icon">
                                                        <div class="bb-video-box">
                                                            <div class="bb-video-box-inner">
                                                                <div class="bb-video-box-innerup">
                                                                    <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edu_duration">20:30</div>
                                            </div>
                                            <div class="edu_video detail">
                                                <div class="edu_video_header">
                                                    <h4><a href="#">آموزش بازی سازی با Game Maker</a></h4>
                                                </div>
                                                <div class="edu_video_bottom">
                                                    <div class="edu_video_bottom_left">
                                                        <span>دوره 5 از 12</span>
                                                    </div>
                                                    <div class="edu_video_bottom_right">
                                                        <i class="ti-desktop"></i>برنامه نویسی
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Education -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="details_single p-2">
                                    <h2>درباره استاد</h2>
                                    <ul class="skills_info">
                                        <li>
                                            <div class="skills_captions">
                                                <h4 class="Skill_title">فارغ التحصیل کارشناسی ارشد مهندسی برق</h4>
                                                <span>1397 - 1399</span>
                                                <span>دانشگاه تربیت مدرس</span>
                                                <p class="skills_dec">سابقه تدریس به شاگردانی که قصد ورود به مدارس برتر، نمونه دولتی، روشنگران، سلام، خرد و مهدوی را داشتند.</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skills_captions">
                                                <h4 class="Skill_title">فارغ التحصیل کارشناسی مهندسی برق</h4>
                                                <span>1395 - 1396</span>
                                                <span>دانشگاه شهید بهشتی</span>
                                                <p class="skills_dec">تدریس آنلاین ریاضی به ایرانیان مقیم کشورهای مختلف از جمله: کانادا، امریکا، انگلیس، روسیه، دبی و مالزی</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skills_captions">
                                                <h4 class="Skill_title">3 سال سابقه تدریس ریاضیات و فیزیک</h4>
                                                <span>1397 - 1399</span>
                                                <span>موسسه قلم چی</span>
                                                <p class="skills_dec">تدریس ریاضی به زبان انگلیسی در مدارس اینترنشنال به دانش آموزان انگلیسی زبان و گذراندن دوره های تربیت معلم</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Reviews -->
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="reviews-comments-wrap">
                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="assets/img/user-1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">حسام موسوی</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>27 آبان 1399</span></h4>

                                            <div class="listing-rating high" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><span class="review-count">4.9</span> </div>
                                            <div class="clearfix"></div>
                                            <p>" فن بیان و روش مفهومی بسیار عالی و مسلط منظم و دقیق و حرفه ای هستند راه حل ها و تکنیک راهبرد حل مسئله اموزش دادند و سوالات مرتبط دادند و حل کردیم و رفع اشکال کردیم باتوجه به سرعت و سطحم درس میدادند. "</p>
                                            <div class="pull-left reviews-reaction">
                                                <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
                                                <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
                                                <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->

                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="assets/img/user-2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">الهام عظیمی</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>2 بهمن 1399</span></h4>

                                            <div class="listing-rating mid" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i><span class="review-count">3.7</span> </div>
                                            <div class="clearfix"></div>
                                            <p>" استاد خوبی هستند دختر من تو سفارت هند درس میخونه و برامون مهم بود که استاد انگلیسی صحبت کنن و این استاد این ویژگی رو دارند خیلی خوبه به دخترم تمرین میدن و تو واتساب هم پشتیبانی میکنند و پیگیر هستند. "</p>
                                            <div class="pull-left reviews-reaction">
                                                <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
                                                <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
                                                <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->

                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="assets/img/user-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">علی محسنی</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>10 فروردین 1400</span></h4>

                                            <div class="listing-rating good" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i> <span class="review-count">4.2</span> </div>
                                            <div class="clearfix"></div>
                                            <p>" ما برای امتحان ورودی مدرسه در استانبول ترکیه نیاز ب استادی توانمند داشتیم که به زبان انگلیسی ریاضی را اموزش دهد تا در امتحان قبول شود که استاد مجدی به خوبی از عهده ی این کار برامدند وبسیار دقیق و منظم و مسلط هستند و بسیار خوشحال و راضی ام "</p>
                                            <div class="pull-left reviews-reaction">
                                                <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
                                                <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
                                                <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Instructor Detail ================================== -->

@endsection
