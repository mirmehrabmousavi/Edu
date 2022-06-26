@extends('layout.app')

@section('content')
    <!-- ============================ Course Detail ================================== -->
    <section class="pt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb simple">
                            <li class="breadcrumb-item"><a href="{{route('index')}}" class="theme-cl">خانه</a></li>
                            <li class="breadcrumb-item"><a href="{{route('courses')}}" class="theme-cl">لیست دوره</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{$course->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8 col-md-8">

                    <div class="inline_edu_wraps mb-4">
                        <h2>{{$course->title}}</h2>
                        <div class="ed_rate_info">
                            <span
                                class="ml-2 text-danger bg-light-danger px-2 py-1 rounded">{{$course->category_id}}</span>
                            <div class="review_counter mr-2">
                                <strong class="good">4.5</strong>
                            </div>
                            <div class="star_info">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="inline_edu_wrap">
                        <div class="inline_edu_first">
                            <div class="instructor_dark_info">
                                <ul>
                                    <li>
                                        <span>آخرین آپدیت</span>
                                        {{$course->updated_at->diffForHumans()}}
                                    </li>
                                    <li>
                                        <span>شرکت کننده</span>
                                        742,614
                                    </li>
                                    <li>
                                        <span>زبان</span>
                                        {{$course->language}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{--<div class="inline_edu_last">
                            <a href="#" class="btn btn-light"><i class="fa fa-heart ml-2"></i>افزودن به موردعلاقه</a>
                        </div>--}}
                    </div>

                    <div class="property_video xl mb-4">
                        <div class="thumb">
                            <img class="pro_img img-fluid w100"
                                 src="{{($course->c_poster != null) ? '/upload/course/'.$course->c_poster : url('/upload/no-image.png')}}"
                                 alt="7.jpg">
                            <div class="overlay_icon">
                                <div class="bb-video-box">
                                    <div class="bb-video-box-inner">
                                        <div class="bb-video-box-innerup">
                                            <a href="{{($course->c_demo != null) ? '/upload/course/'.$course->c_demo : ($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}"
                                               data-toggle="modal" data-target="#popup-video" class="theme-cl"><i
                                                    class="ti-control-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Overview -->
                    <div class="edu_wraper border">
                        <h4 class="edu_title">توضیحات</h4>
                        {!! $course->desc !!}

                    </div>

                    <div class="edu_wraper border">
                        <h4 class="edu_title">سرفصل های دوره</h4>
                        <div id="accordionExample" class="accordion shadow circullum">
                        @php $lesson = \App\Models\Lesson::where('user_id',$course->user_id)->where('l_course',$course->title)->get(); @endphp
                        @php $season = \App\Models\Season::where('user_id',$course->user_id)->where('course',$course->title)->get(); @endphp
                        @foreach($lesson as $val)
                            @foreach($season as $sea)
                            <!-- Part 1 -->
                                <div class="card">
                                    <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                                                            data-target="#collapseOne"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne"
                                                                            class="d-block position-relative text-dark collapsible-link py-2">{{$sea->title}}</a></h6>
                                    </div>
                                    <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                         class="collapse show">
                                        <div class="card-body pl-3 pr-3">
                                            <ul class="lectures_lists">
                                                <li {{($val->l_free == 'on') ? '' : 'class="unview'}}>
                                                    <div class="lectures_lists_title"><i class="ti-control-play"></i>دوره:
                                                        {{$loop->index+1}}
                                                    </div>
                                                    {{$val->title}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                @php $user = \App\Models\User::where('email',$course->user_id)->get(); @endphp
                @foreach($user as $us)
                    <!-- instructor -->
                        <div class="single_instructor border">
                            <div class="single_instructor_thumb">
                                <a href="#"><img
                                        src="{{($us->profile == null) ? '/upload/no-profile.jpg' : $us->profile}}"
                                        class="img-fluid" alt=""></a>
                            </div>
                            <div class="single_instructor_caption">
                                <h4><a href="#">{{($us->fname == null) ? $us->email : $us->fname.' '.$us->lname}}</a>
                                </h4>
                                <ul class="instructor_info">
                                    @php $lessons = \App\Models\Lesson::where('user_id',$us->email)->get(); @endphp
                                    <li><i class="ti-video-camera"></i>{{count($lessons)}} ویدئو</li>
                                    @php $courses = \App\Models\Course::where('user_id',$us->email)->get(); @endphp
                                    <li><i class="ti-control-forward"></i>{{count($courses)}} دوره</li>
                                    <li><i class="ti-user"></i>{{$us->updated_at->diffForHumans()}}</li>
                                </ul>
                                <p>{{$us->bio}}</p>
                                <ul class="social_info">
                                    <li><a href="{{$us->facebook}}"><i class="ti-facebook"></i></a></li>
                                    <li><a href="{{$us->twitter}}"><i class="ti-twitter"></i></a></li>
                                    <li><a href="{{$us->linkedin}}"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="{{$us->instagram}}"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    {{-- <!-- Reviews -->
                     <div class="list-single-main-item fl-wrap border">
                         <div class="list-single-main-item-title fl-wrap">
                             <h3>تاکنون <span> 3 </span> دیدگاه ثبت شده است!</h3>
                         </div>
                         <div class="reviews-comments-wrap">
                             <!-- reviews-comments-item -->
                             <div class="reviews-comments-item">
                                 <div class="review-comments-avatar">
                                     <img src="assets/img/user-1.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="reviews-comments-item-text">
                                     <h4><a href="#">محمد خاکپور</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>10 بهمن 1399</span></h4>

                                     <div class="listing-rating high" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><span class="review-count">4.9</span> </div>
                                     <div class="clearfix"></div>
                                     <p>"ظاهرا آموزش کاملی بنظر میاد و میخوام بخرم ولی کاش بجای ساخت فروشگاه، پلاگین نویسی برا ووکامرس رو هم توضیح میدادین، البته میتونین تکمیل کنین این دوره رو و آپدیت کنین"</p>
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
                                     <h4><a href="#">الهام پاکزاد</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>26 مرداد 1399</span></h4>

                                     <div class="listing-rating mid" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i><span class="review-count">3.7</span> </div>
                                     <div class="clearfix"></div>
                                     <p>"سلام.من PHP رو تو دوران هنرستان یاد گرفتم.اگه PHP رو به صورت مقدماتی کار کرده باشم ولی در حدی باشیم که درک نسبتا کاملی از کد خط ها و معنا و مفهوم آن داشته باشیم، کفایت میکنه یا باید پیشرفته تر آموزش ویدیویی ببینم؟ "</p>
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
                                     <h4><a href="#">مهدی فدایی</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>20 بهمن 1398</span></h4>

                                     <div class="listing-rating good" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i> <span class="review-count">4.2</span> </div>
                                     <div class="clearfix"></div>
                                     <p>" سلام. برای یادگرفتن پیش نیاز این دوره که پی اچ پی هست تا کدام قسمت از اموزش پی اچ پی لازمه که یاد گرفته بشه؟(مطابق سرفصل های همین دوره در سایت) "</p>
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

                     <!-- Submit Reviews -->
                     <div class="edu_wraper border">
                         <h4 class="edu_title">ارسال نظر شما</h4>
                         <div class="review-form-box form-submit">
                             <form>
                                 <div class="row">

                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                         <div class="form-group">
                                             <label>نام</label>
                                             <input class="form-control" type="text" placeholder="نام شما">
                                         </div>
                                     </div>

                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                         <div class="form-group">
                                             <label>ایمیل</label>
                                             <input class="form-control" type="email" placeholder="ایمیل شما">
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                         <div class="form-group">
                                             <label>متن دیدگاه</label>
                                             <textarea class="form-control ht-140" placeholder="دیدگاه خود را وارد نمایید"></textarea>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-theme">ثبت دیدگاه</button>
                                         </div>
                                     </div>

                                 </div>
                             </form>
                         </div>
                     </div>
 --}}
                </div>

                <div class="col-lg-4 col-md-4">

                    <!-- Course info -->
                    <div class="ed_view_box style_3 border py-3">

                        <div class="ed_view_price pr-4">
                            <h5>قیمت آموزش</h5>
                            <h2 class="theme-cl mb-0">{{$course->price}}</h2>
                            <div class="offer-box"><span class="offer-box">{{$course->price_off}}</span></div>
                        </div>

                        <div class="ed_view_price pr-4">
                            <h5>قیمت آموزش(دلار)</h5>
                            <h2 class="theme-cl mb-0">{{$course->d_price}}</h2>
                            <div class="offer-box"><span class="offer-box">{{$course->d_price_off}}</span></div>
                        </div>

                        <div class="ed_view_short pl-4 pr-4 pb-2 b-b">
                            <h6>خلاصه توضیحات :</h6>
                            <p>{{$course->b_desc}}</p>
                        </div>

                        <div class="p-4">
                            <h5 class="edu_title">ویژگی های دوره</h5>
                            <ul class="edu_list right">
                                <li><i class="ti-user"></i>شرکت کنندگان:<strong>1740 نفر</strong></li>
                                @php $lesson = \App\Models\Lesson::where('user_id',$course->user_id)->get(); @endphp
                                <li><i class="ti-game"></i>جلسات:<strong>{{count($lesson)}}</strong></li>
                                <li><i class="ti-time"></i>مدت دوره:<strong>{{$course->time}}</strong></li>
                                <li><i class="ti-tag"></i>وضعیت دوره:<strong>{{$course->status}}</strong></li>
                                <li><i class="ti-flag-alt"></i>زبان:<strong>{{$course->language}}</strong></li>
                                <li><i class="ti-shine"></i>نوع
                                    دوره:<strong>{{($course->price == '0') ? 'رایگان' : 'غیر رایگان'}}</strong></li>
                            </ul>
                        </div>
                        <div class="ed_view_link pb-3">
                            <a href="{{route('addToSavedCourse',['id' => $course->id])}}" class="btn btn-outline-theme enroll-btn" onclick="event.preventDefault();
                                                     document.getElementById('add').submit();">افزودن به مورد علاقه<i
                                    class="fa fa-heart"></i></a>
                            <form action="{{route('addToSavedCourse',['id' => $course->id])}}" id="add" method="POST">
                                @csrf
                                @method('patch')
                            </form>
                            <a href="#" class="btn btn-theme enroll-btn">خرید دوره<i class="ti-angle-left"></i></a>
                        </div>


                        @php $user = \App\Models\User::where('email',$course->user_id)->get(); @endphp
                        @foreach($user as $us)
                            <div class="px-4 pt-4 pb-0 b-t">
                                <h5 class="mb-3">درباره مدرس</h5>
                                <div class="ins_info">
                                    <div class="ins_info_thumb">
                                        <img src="{{($us->profile == null) ? '/upload/no-profile.jpg' : $us->profile}}"
                                             class="img-fluid" alt="">
                                    </div>
                                    <div class="ins_info_caption">
                                        <h4 class="text-dark">{{($us->fname == null) ? $us->email : $us->fname.' '.$us->lname}}</h4>
                                        <span class="text-dark">{{$us->job}}</span>
                                    </div>
                                </div>
                                <div class="inline_edu_wrap mt-4">
                                    <div class="inline_edu_first">
                                        <div class="ed_rate_info">
                                            <div class="review_counter mr-2">
                                                <strong class="good">4.5</strong>
                                            </div>
                                            <div class="star_info">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline_edu_last">
                                        @php $courses = \App\Models\Course::where('user_id',$us->email)->get(); @endphp
                                        <i class="fa fa-file ml-2"></i>{{count($courses)}} دوره
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->
@endsection
