<!-- ============================== Start Newsletter ================================== -->
<section class="newsletter theme-bg inverse-theme">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8 col-sm-12">
                <div class="text-center">
                    <h2>به جامعه هزاران دانشجو بپیوندید!</h2>
                    <p>به جامعه میلیونی دانشجویان ما بپیوندید و به هزاران ساعت آموزش در حوزه‌های گوناگون دسترسی
                        داشته باشید.</p>
                    <form class="sup-form">
                        <input type="email" class="form-control sigmup-me" placeholder="ایمیل خود را وارد کنید..."
                               required="required">
                        <input type="submit" class="btn btn-theme" value="عضویت">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================================= End Newsletter =============================== -->

<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
    <div>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <img src="/assets/img/logo.png" class="img-footer" alt=""/>
                        <div class="footer-add">
                            @php $admin = \App\Models\User::where('is_admin',1)->get(); @endphp
                            @foreach($admin as $user)
                            <p>{{$user->address}}</p>
                            <p>{{$user->email}}</p>
                            <p>{{$user->number}}</p>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">لینک مفید</h4>
                        <ul class="footer-menu">
                            <li><a href="{{route('aboutus')}}">درباره ما</a></li>
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">تسویه حساب</a></li>
                            <li><a href="{{route('contactus')}}">تماس با ما</a></li>
                            <li><a href="{{route('allBlog')}}">وبلاگ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">دسته بندی</h4>
                        <ul class="footer-menu">
                            @php $cat = \App\Models\Category::where('parent_id',null)->get(); @endphp
                            @foreach($cat as $catt)
                            <li><a href="{{route('coursesCat',['id' => $catt->id])}}">{{$catt->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">راهنما و پشتیبانی</h4>
                        <ul class="footer-menu">
                            <li><a href="#">اسناد</a></li>
                            <li><a href="{{route('myTickets')}}">تیکت ها</a></li>
                            <li><a href="{{route('ticket.create')}}">ارسال تیکت</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="footer-widget">
                        <h4 class="widget-title">درگاه های پرداخت</h4>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <img src="/upload/paypal.png" alt="" width="50" height="50">
                            </div>
                        </a>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                              <img src="/upload/zarinpal.png" alt="" width="50" height="50">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">ارائه شده توسط <a href="/"> رایا </a></p>
                </div>

                <div class="col-lg-6 col-md-6 text-left">
                    <ul class="footer-bottom-social">
                        @php $admin = \App\Models\User::where('is_admin',1)->get(); @endphp
                        @foreach($admin as $user)
                        <li><a href="{{$user->facebook}}"><i class="ti-facebook"></i></a></li>
                        <li><a href="{{$user->twitter}}"><i class="ti-twitter"></i></a></li>
                        <li><a href="{{$user->instagram}}"><i class="ti-instagram"></i></a></li>
                        <li><a href="{{$user->linkedin}}"><i class="ti-linkedin"></i></a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->
