@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
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
                            <ul class="mb0">
                                <li class="list-inline-item">

                                </li>
                                <li class="list-inline-item">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control" type="search" placeholder="نام دوره" aria-label="Search">
                                        <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dashboard_container_body">

                        <!-- Single Course -->
                        <div class="dashboard_single_course">
                            <div class="dashboard_single_course_thumb">
                                <img src="assets/img/co-1.jpg" class="img-fluid" alt="">
                                <div class="dashboard_action">
                                    <a href="#" class="btn btn-ect">ویرایش</a>
                                    <a href="#" class="btn btn-ect">مشاهده</a>
                                </div>
                            </div>
                            <div class="dashboard_single_course_caption">
                                <div class="dashboard_single_course_head">
                                    <div class="dashboard_single_course_head_flex">
                                        <span class="dashboard_instructor">آدام ویلسون</span>
                                        <h4 class="dashboard_course_title">آموزش برنامه نویسی موازی در سی شارپ</h4>
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
                                        <h4 class="dc_price_rate theme-cl">129000 تومان</h4>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_des">
                                    <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>
                                <div class="dashboard_single_course_progress">
                                    <div class="dashboard_single_course_progress_1">
                                        <label>82% تکمیل شده</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_progress_2">
                                        <ul class="m-0">
                                            <li class="list-inline-item"><i class="ti-user ml-1"></i>4512 شرکت کننده</li>
                                            <li class="list-inline-item"><i class="ti-comment-alt ml-1"></i>112 دیدگاه</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Course -->
                        <div class="dashboard_single_course">
                            <div class="dashboard_single_course_thumb">
                                <img src="assets/img/co-2.jpg" class="img-fluid" alt="">
                                <div class="dashboard_action">
                                    <a href="#" class="btn btn-ect">ویرایش</a>
                                    <a href="#" class="btn btn-ect">مشاهده</a>
                                </div>
                            </div>
                            <div class="dashboard_single_course_caption">
                                <div class="dashboard_single_course_head">
                                    <div class="dashboard_single_course_head_flex">
                                        <span class="dashboard_instructor">الهام کریمی</span>
                                        <h4 class="dashboard_course_title">آموزش برنامه نویسی‌اندروید با زامارین</h4>
                                        <div class="dashboard_rats">
                                            <div class="dashboard_rating">
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                            <span>(44 امتیاز)</span>
                                        </div>
                                    </div>
                                    <div class="dc_head_right">
                                        <h4 class="dc_price_rate theme-cl">249000 تومان</h4>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_des">
                                    <p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                </div>
                                <div class="dashboard_single_course_progress">
                                    <div class="dashboard_single_course_progress_1">
                                        <label>90% تکمیل شده</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_progress_2">
                                        <ul class="m-0">
                                            <li class="list-inline-item"><i class="ti-user ml-1"></i>5412 شرکت کننده</li>
                                            <li class="list-inline-item"><i class="ti-comment-alt ml-1"></i>72 دیدگاه</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Course -->
                        <div class="dashboard_single_course">
                            <div class="dashboard_single_course_thumb">
                                <img src="assets/img/co-3.jpg" class="img-fluid" alt="">
                                <div class="dashboard_action">
                                    <a href="#" class="btn btn-ect">ویرایش</a>
                                    <a href="#" class="btn btn-ect">مشاهده</a>
                                </div>
                            </div>
                            <div class="dashboard_single_course_caption">
                                <div class="dashboard_single_course_head">
                                    <div class="dashboard_single_course_head_flex">
                                        <span class="dashboard_instructor">فاطمه حسینی</span>
                                        <h4 class="dashboard_course_title">آموزش تبدیل گفتار به نوشتار در اندروید</h4>
                                        <div class="dashboard_rats">
                                            <div class="dashboard_rating">
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                            <span>(57 امتیاز)</span>
                                        </div>
                                    </div>
                                    <div class="dc_head_right">
                                        <h4 class="dc_price_rate theme-cl">179000 تومان</h4>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_des">
                                    <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>
                                <div class="dashboard_single_course_progress">
                                    <div class="dashboard_single_course_progress_1">
                                        <label>95% تکمیل شده</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_progress_2">
                                        <ul class="m-0">
                                            <li class="list-inline-item"><i class="ti-user ml-1"></i>6587 شرکت کننده</li>
                                            <li class="list-inline-item"><i class="ti-comment-alt ml-1"></i>365 دیدگاه</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Course -->
                        <div class="dashboard_single_course">
                            <div class="dashboard_single_course_thumb">
                                <img src="assets/img/co-4.jpg" class="img-fluid" alt="">
                                <div class="dashboard_action">
                                    <a href="#" class="btn btn-ect">ویرایش</a>
                                    <a href="#" class="btn btn-ect">مشاهده</a>
                                </div>
                            </div>
                            <div class="dashboard_single_course_caption">
                                <div class="dashboard_single_course_head">
                                    <div class="dashboard_single_course_head_flex">
                                        <span class="dashboard_instructor">مهرداد عظیمی</span>
                                        <h4 class="dashboard_course_title">آموزش ساخت سیستم تیکت در PHP</h4>
                                        <div class="dashboard_rats">
                                            <div class="dashboard_rating">
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star filled"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                            <span>(30 امتیاز)</span>
                                        </div>
                                    </div>
                                    <div class="dc_head_right">
                                        <h4 class="dc_price_rate theme-cl">229000 تومان</h4>
                                    </div>
                                </div>
                                <div class="dashboard_single_course_des">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.</p>
                                </div>
                                <div class="dashboard_single_course_progress">
                                    <div class="dashboard_single_course_progress_1">
                                        <label>70% تکمیل شده</label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="dashboard_single_course_progress_2">
                                        <ul class="m-0">
                                            <li class="list-inline-item"><i class="ti-user ml-1"></i>6582 شرکت کننده</li>
                                            <li class="list-inline-item"><i class="ti-comment-alt ml-1"></i>65 دیدگاه</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
