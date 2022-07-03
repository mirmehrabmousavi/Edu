@extends('layout.app')

@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner hero-inner-2" style="background:#152974;" data-overlay="0">
        <div class="container">
            @foreach($option as $val)
            <!-- Type -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="banner-search-2 transparent">
                        {!! $val->banner_txt_1 !!}
                        <div class="mt-4">
                            <a href="#" class="btn btn-modern dark" data-toggle="modal"
                               data-target="#signup">ثبت نام کنید<span><i class="ti-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="flixio pt-5">
                        <img class="img-fluid" src="{{$val->banner_img_1}}" alt="">
                    </div>
                </div>
                @endforeach
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
                                {{--
                                <img src="/assets/img/lg-1.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.english')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <defs>
                                            <style>.united-kingdom_svg__cls-2 {
                                                    fill: #0052b4
                                                }

                                                .united-kingdom_svg__cls-3 {
                                                    fill: #d80027
                                                }</style>
                                        </defs>
                                        <g id="united-kingdom_svg__united-kingdom" transform="translate(.598 .598)">
                                            <circle id="united-kingdom_svg__Ellipse_816" cx="25" cy="25" r="25"
                                                    fill="#f0f0f0" transform="translate(-.598 -.598)"></circle>
                                            <g id="united-kingdom_svg__Group_19364" transform="translate(.75 .75)">
                                                <path id="united-kingdom_svg__Path_20745"
                                                      d="M13.039 100.142a24.407 24.407 0 00-4.22 8.524h12.744z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-8.819 -91.403)"></path>
                                                <path id="united-kingdom_svg__Path_20746"
                                                      d="M382.748 108.667a24.408 24.408 0 00-4.22-8.524l-8.523 8.524z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-335.444 -91.404)"></path>
                                                <path id="united-kingdom_svg__Path_20747"
                                                      d="M8.819 322.784a24.409 24.409 0 004.22 8.523l8.523-8.523z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-8.819 -292.741)"></path>
                                                <path id="united-kingdom_svg__Path_20748"
                                                      d="M331.306 13.039a24.408 24.408 0 00-8.523-4.22v12.743z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-292.739 -8.819)"></path>
                                                <path id="united-kingdom_svg__Path_20749"
                                                      d="M100.142 378.528a24.409 24.409 0 008.524 4.22v-12.743z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-91.403 -335.444)"></path>
                                                <path id="united-kingdom_svg__Path_20750"
                                                      d="M108.665 8.819a24.409 24.409 0 00-8.523 4.22l8.523 8.523z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-91.403 -8.819)"></path>
                                                <path id="united-kingdom_svg__Path_20751"
                                                      d="M322.783 382.748a24.409 24.409 0 008.523-4.22l-8.523-8.523z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-292.74 -335.444)"></path>
                                                <path id="united-kingdom_svg__Path_20752"
                                                      d="M370.005 322.784l8.523 8.524a24.408 24.408 0 004.22-8.524z"
                                                      class="united-kingdom_svg__cls-2"
                                                      transform="translate(-335.444 -292.741)"></path>
                                            </g>
                                            <g id="united-kingdom_svg__Group_19365" transform="translate(-.094 -.094)">
                                                <path id="united-kingdom_svg__Path_20753"
                                                      d="M48.785 21.3H27.691V.207a24.721 24.721 0 00-6.39 0V21.3H.207a24.721 24.721 0 000 6.39H21.3v21.095a24.721 24.721 0 006.39 0V27.691h21.095a24.721 24.721 0 000-6.39z"
                                                      class="united-kingdom_svg__cls-3"></path>
                                                <path id="united-kingdom_svg__Path_20754"
                                                      d="M322.783 322.783l10.931 10.931q.754-.754 1.44-1.573l-9.358-9.358h-3.012z"
                                                      class="united-kingdom_svg__cls-3"
                                                      transform="translate(-291.896 -291.896)"></path>
                                                <path id="united-kingdom_svg__Path_20755"
                                                      d="M85.911 322.784L74.98 333.715q.754.754 1.573 1.44l9.358-9.359z"
                                                      class="united-kingdom_svg__cls-3"
                                                      transform="translate(-67.805 -291.897)"></path>
                                                <path id="united-kingdom_svg__Path_20756"
                                                      d="M72.3 85.911L61.373 74.98q-.754.754-1.44 1.573l9.359 9.359H72.3z"
                                                      class="united-kingdom_svg__cls-3"
                                                      transform="translate(-54.198 -67.805)"></path>
                                                <path id="united-kingdom_svg__Path_20757"
                                                      d="M322.783 72.305l10.931-10.931q-.754-.754-1.573-1.44l-9.358 9.359z"
                                                      class="united-kingdom_svg__cls-3"
                                                      transform="translate(-291.896 -54.199)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">انگلیسی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{--<img src="/assets/img/lg-2.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.french')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <circle cx="25" cy="25" r="25" fill="#f0f0f0"></circle>
                                        <path fill="#d80027"
                                              d="M50 25A25.009 25.009 0 0033.7 1.555v46.89A25.009 25.009 0 0050 25z"></path>
                                        <path fill="#0052b4"
                                              d="M0 25a25.009 25.009 0 0016.3 23.445V1.555A25.009 25.009 0 000 25z"></path>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">فرانسه</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{-- <img src="/assets/img/lg-3.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.germany')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <path fill="#ffda44"
                                              d="M1.555 33.696a25.009 25.009 0 0046.89 0L25 31.522z"></path>
                                        <path
                                            d="M25 0A25.009 25.009 0 001.555 16.3L25 18.474 48.445 16.3A25.009 25.009 0 0025 0z"></path>
                                        <path fill="#d80027"
                                              d="M1.555 16.304a25.091 25.091 0 000 17.391h46.89a25.092 25.092 0 000-17.391z"></path>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">آلمانی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{--<img src="/assets/img/lg-4.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.turkish')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <defs>
                                            <style>.turkey_svg__cls-2 {
                                                    fill: #f0f0f0
                                                }</style>
                                        </defs>
                                        <g id="turkey_svg__turkey" transform="translate(-.425 -.425)">
                                            <circle id="turkey_svg__Ellipse_815" cx="25" cy="25" r="25" fill="#d80027"
                                                    transform="translate(.425 .425)"></circle>
                                            <g id="turkey_svg__Group_19363" transform="translate(7.084 16.582)">
                                                <path id="turkey_svg__Path_20743"
                                                      d="M214.859 209.186l2.086 2.875 3.379-1.1-2.089 2.872 2.086 2.875-3.377-1.1-2.089 2.872v-3.552l-3.377-1.1 3.379-1.1z"
                                                      class="turkey_svg__cls-2"
                                                      transform="translate(-197.558 -204.992)"></path>
                                                <path id="turkey_svg__Path_20744"
                                                      d="M82.932 182.985a7.185 7.185 0 113.418-13.507 8.844 8.844 0 100 12.643 7.151 7.151 0 01-3.418.864z"
                                                      class="turkey_svg__cls-2"
                                                      transform="translate(-71.325 -166.956)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">ترکی استانبولی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{--<img src="/assets/img/lg-5.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.italy')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <circle cx="25" cy="25" r="25" fill="#f0f0f0"></circle>
                                        <path fill="#d80027"
                                              d="M50 25A25.009 25.009 0 0033.7 1.555v46.89A25.009 25.009 0 0050 25z"></path>
                                        <path fill="#6da544"
                                              d="M0 25a25.009 25.009 0 0016.3 23.445V1.555A25.009 25.009 0 000 25z"></path>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">ایتالیایی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{--  <img src="/assets/img/lg-6.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.chinese')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <defs>
                                            <style>.china_svg__cls-2 {
                                                    fill: #ffda44
                                                }</style>
                                        </defs>
                                        <g id="china_svg__china" transform="translate(49 -141)">
                                            <circle id="china_svg__Ellipse_810" cx="25" cy="25" r="25" fill="#d80027"
                                                    transform="translate(-49 141)"></circle>
                                            <g id="china_svg__Group_19360" transform="translate(-44.459 152.221)">
                                                <path id="china_svg__Path_20722"
                                                      d="M6.641 296.8l2.159 6.641h6.982l-5.645 4.111 2.158 6.641-5.654-4.1-5.654 4.1 2.168-6.641-5.655-4.111h6.982z"
                                                      class="china_svg__cls-2"
                                                      transform="translate(2.5 -292.806)"></path>
                                                <path id="china_svg__Path_20723"
                                                      d="M214.526 474.246l-1.65-2.031-2.441.947 1.416-2.2-1.65-2.041 2.529.674 1.426-2.2.137 2.617 2.539.674-2.451.938z"
                                                      class="china_svg__cls-2"
                                                      transform="translate(-189.429 -446.746)"></path>
                                                <path id="china_svg__Path_20724"
                                                      d="M275.557 415.953l.781-2.5-2.139-1.514 2.617-.039.771-2.5.85 2.48 2.617-.029-2.1 1.563.84 2.48-2.139-1.514z"
                                                      class="china_svg__cls-2"
                                                      transform="translate(-247.179 -394.41)"></path>
                                                <path id="china_svg__Path_20725"
                                                      d="M277.364 323.305l-1.152 2.354 1.875 1.826-2.588-.371-1.152 2.344-.449-2.578-2.6-.371 2.324-1.221-.449-2.588 1.875 1.826z"
                                                      class="china_svg__cls-2"
                                                      transform="translate(-244.562 -316.177)"></path>
                                                <path id="china_svg__Path_20726"
                                                      d="M214.324 255.9l-.2 2.607 2.432.986-2.549.625-.186 2.617-1.377-2.227-2.549.625 1.689-2-1.387-2.217 2.432.986z"
                                                      class="china_svg__cls-2"
                                                      transform="translate(-189.158 -255.9)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">چینی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{-- <img src="/assets/img/lg-7.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.arabic')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <defs>
                                            <style>.saudi-arabia_svg__cls-2 {
                                                    fill: #f0f0f0
                                                }</style>
                                        </defs>
                                        <g id="saudi-arabia_svg__saudi-arabia">
                                            <circle id="saudi-arabia_svg__Ellipse_814" cx="25" cy="25" r="25"
                                                    fill="#6da544"></circle>
                                            <g id="saudi-arabia_svg__Group_19361" transform="translate(10.598 14.13)">
                                                <path id="saudi-arabia_svg__Path_20736"
                                                      d="M144.7 306.087a3.261 3.261 0 003.261 3.261h9.783a2.717 2.717 0 002.717 2.717h3.261a2.717 2.717 0 002.717-2.717v-3.261z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(-141.163 -290.326)"></path>
                                                <path id="saudi-arabia_svg__Path_20737"
                                                      d="M350 144.7v7.6a2.176 2.176 0 01-2.174 2.174v3.261a5.441 5.441 0 005.435-5.435v-7.6H350z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(-324.456 -144.696)"></path>
                                                <path id="saudi-arabia_svg__Path_20738"
                                                      d="M110.7 152.3a2.176 2.176 0 01-2.174 2.174v3.261a5.441 5.441 0 005.435-5.435v-7.6H110.7v7.6z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(-108.522 -144.696)"></path>
                                                <path id="saudi-arabia_svg__Rectangle_6909" d="M0 0h3.261v7.609H0z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(20.652)"></path>
                                                <path id="saudi-arabia_svg__Path_20739"
                                                      d="M189.566 149.043a.543.543 0 11-1.087 0v-4.348h-3.261v4.348a.543.543 0 11-1.087 0v-4.348h-3.261v4.348a3.8 3.8 0 005.978 3.119 3.772 3.772 0 002.654.654 2.176 2.176 0 01-2.11 1.662v3.261a5.441 5.441 0 005.435-5.435v-7.609h-3.261v4.348z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(-173.805 -144.695)"></path>
                                                <path id="saudi-arabia_svg__Rectangle_6910" d="M0 0h4.891v3.261H0z"
                                                      class="saudi-arabia_svg__cls-2"
                                                      transform="translate(7.065 9.783)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">عربی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{--  <img src="/assets/img/lg-8.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.russian')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <circle cx="25" cy="25" r="25" fill="#f0f0f0"></circle>
                                        <path fill="#0052b4"
                                              d="M48.445 33.695a25.091 25.091 0 000-17.391H1.555a25.091 25.091 0 000 17.391L25 35.869z"></path>
                                        <path fill="#d80027"
                                              d="M25 50a25.009 25.009 0 0023.445-16.3H1.555A25.009 25.009 0 0025 50z"></path>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">روسی</p><span
                                        class="MuiTouchRipple-root"></span></a>
                            </div>

                            <!-- single -->
                            <div class="single_brands">
                                {{-- <img src="/assets/img/lg-9.png" class="img-fluid" alt="" />--}}
                                <a class="MuiButtonBase-root jss202" tabindex="0" aria-disabled="false"
                                   href="{{route('course.spanish')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="spain_svg__spain" width="50" height="50"
                                         viewBox="0 0 50 50">
                                        <defs>
                                            <style>.spain_svg__cls-2 {
                                                    fill: #d80027
                                                }</style>
                                        </defs>
                                        <path id="spain_svg__Path_20740" fill="#ffda44"
                                              d="M0 155.566a24.946 24.946 0 001.555 8.7L25 166.435l23.445-2.174a25.091 25.091 0 000-17.391L25 144.7l-23.445 2.17A24.946 24.946 0 000 155.566z"
                                              transform="translate(0 -130.566)"></path>
                                        <g id="spain_svg__Group_19362" transform="translate(1.555)">
                                            <path id="spain_svg__Path_20741"
                                                  d="M62.813 16.3a25.009 25.009 0 00-46.89 0z" class="spain_svg__cls-2"
                                                  transform="translate(-15.923)"></path>
                                            <path id="spain_svg__Path_20742"
                                                  d="M15.923 345.043a25.009 25.009 0 0046.89 0z"
                                                  class="spain_svg__cls-2"
                                                  transform="translate(-15.923 -311.347)"></path>
                                        </g>
                                    </svg>
                                    <br>
                                    <p class="MuiTypography-root MuiTypography-body1">اسپانیایی</p><span
                                        class="MuiTouchRipple-root"></span></a>
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
                @foreach($cat as $category)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="edu_cat_2 cat-{{$loop->index+1}}">
                            <div class="edu_cat_icons">
                                <a class="pic-main" href="{{route('coursesCat',['id' => $category->id])}}"><img
                                        src="/assets/img/{{$loop->index+1}}.png" class="img-fluid"
                                        alt=""/></a>
                            </div>
                            <div class="edu_cat_data">
                                <h4 class="title"><a
                                        href="{{route('coursesCat',['id' => $category->id])}}">{{$category->category_name}}</a>
                                </h4>
                                <ul class="meta">
                                    @php
                                        $categories = \App\Models\Category::where('parent_id',null)->get();
                                    @endphp
                                    @foreach($categories as $catt)
                                    @php
                                        $course = \App\Models\Course::where('category_id',$catt->category_name)->get();
                                    @endphp
                                    @endforeach
                                    <li class="video"><i class="ti-video-clapper"></i>{{count($course)}} دوره آموزشی</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========================== Featured Category Section =============================== -->

    <!-- ============================ Featured courses Start ================================== -->
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

                @foreach($courses as $course)
                <!-- Cource Grid 1 -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="education_block_list_layout style-2">

                        <div class="education_block_thumb n-shadow">
                            <a href="{{route('course.show',['id' => $course->id])}}"><img src="{{$course->c_poster}}" class="img-fluid" alt="{{$course->c_alt_img}}"></a>
                        </div>

                        <div class="list_layout_ecucation_caption">

                            <div class="education_block_body">
                                <h4 class="bl-title"><a href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a>
                                </h4>
                                <div class="_course_admin_ol12">مدرس: <strong>{{$course->user_id}}</strong></div>

                                <div class="_course_less_infor">
                                    <ul>
                                        @php $lesson = \App\Models\Lesson::where('user_id',$course->user_id)->get(); @endphp
                                        <li><i class="ti-desktop ml-1"></i>{{count($lesson)}} درس</li>
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
                                    <div class="_course_category_01"><span class="cat-7">{{$course->category_id}}</span></div>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="cources_price">{{$course->price_off}}
                                    <div class="less_offer">{{$course->price}}</div>
                                </div>
                                <div class="cources_info_style3">
                                    <a href="{{route('course.show',['id' => $course->id])}}" class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- ============================ Featured courses End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="vid" style="align-items: center; text-align: center">
                      @foreach($option as $val)
                      <video controls autoplay
                             src="{{$val->video_file}}"
                             poster="{{$val->video_poster}}">

                          Sorry, your browser doesn't support embedded videos,
                          but don't worry, you can <a href="{{$val->video_file}}">download it</a>
                          and watch it with your favorite video player!


                      </video>
                      @endforeach
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================== About Facts List Section =============================== -->
    <section>
        <div class="container">

            <div class="row align-items-center">
@foreach($option as $val)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-short">
                        {!! $val->banner_txt_2 !!}}
                        <a href="#" class="btn btn-modern">درباره ما<span><i class="ti-arrow-left"></i></span></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap_img">

                        <img src="{{$val->banner_img_2}}" class="img-fluid" alt="">

                    </div>
                </div>
                    @endforeach
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

                        @foreach($user as $users)
                        <!-- Single Slide -->
                        <div class="singles_items">
                            <div class="instructor_wrap">
                                <div class="instructor_thumb">
                                    <a href="{{--{{route('teacher.show',['id' => $users->id])}}--}}"><img src="{{(!empty(auth()->user()->profile)) ? url('upload/admin_images/'.auth()->user()->profile) : url('upload/no-profile.jpg')}}" class="img-fluid"
                                                                          alt=""></a>
                                </div>
                                <div class="instructor_caption">
                                    <h4><a href="#">{{($users->fname) ? $users->fname . ' ' . $users->lname : $users->email}}</a></h4>
                                    <span>{{$users->job}}</span>
                                    <ul>
                                        <li><a href="{{$users->facebook}}" class="cl-fb"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{$users->twitter}}" class="cl-twitter"><i class="ti-twitter"></i></a></li>
                                        <li><a href="{{$users->linkedin}}" class="cl-linked"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="{{$users->instagram}}" class="cl-linked"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

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
                        <h2 class="pl-2">آخرین بلاگ ها</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="{{route('showBlog',['id' => $blog->id])}}"><img src="{{($blog->image != null) ? '/upload/admin/blog/'.$blog->image : url('/upload/no-image.png')}}" class="img-fluid" alt=""/></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>{{$blog->title}}</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/upload/no-profile.jpg"
                                                                           class="img-fluid" alt=""/></div>
                                <h4>{{$blog->user_id}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                                <div class="testimonial-icon-thumb"><span class="quotes"><i
                                            class="fas fa-quote-right"></i></span><img src="/assets/img/user-2.jpg"
                                                                                       class="img-fluid" alt=""></div>
                                <h5>فائزه نعمتی</h5>
                                <span>زبان آموز زبان آلمانی کلاس گروهی و خصوصی</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>سلام وقتتون بخیر
                                    من به صورت تصادفی توی اینستاگرام با پیجتون آشنا شدم
                                    و بخاطر قیمت خیلی مناسبی که داشتین دوره اول ثبت نام کردم
                                    کیفیت کلاس هاتون بسیار بالا و خوبه استاد صبوری دارن که این برای من خیلی مهم بود سطح بالای سواد استاد و توضیح تمامی مطالب کتاب
                                    به روش ساده و مفید و پاسخگویی تمام وقت استاد و ادمین اموزشگاه
                                    واقعا همه چی عالیه 😍♥️همین کیفیت عالی باعث شد من کلاسا رو خصوصی با موسسه شما بردارم
                                    ممنونم ازتون</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i
                                            class="fas fa-quote-right"></i></span><img src="/assets/img/user-1.jpg"
                                                                                       class="img-fluid" alt=""></div>
                                <h5>محمد سالار منش </h5>
                                <span>زبان آموز کلاس خصوصی آلمانی</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>سلام و درود ممنون از اموزش خوبتون ما به شخصه یعنی من و خانمم بسیار از کلاس و استاد و صمیمیت و دلسوزی استاد واقعا راضی هستیم با توجه به اینکه ما قبلا هم یک دوره در کلاس دوره ای در اموزشگاه دیگه شرکت کرده بودیم ولی تو کلاس شما واقعا کلاس مفهومی و روان توضیح داده میشه و واقعا میگم عالی ممنون از کانال رایا واستاد عزیز بهرنگ که واقعا کم نذاشت برامون🌹🌹🙏🙏</p>
                            </div>
                        </div>

                        <!-- single -->
                        <div class="testimonial-wraps">
                            <div class="testimonial-icon">
                                <div class="testimonial-icon-thumb"><span class="quotes"><i
                                            class="fas fa-quote-right"></i></span><img src="/assets/img/user-2.jpg"
                                                                                       class="img-fluid" alt=""></div>
                                <h5>فروزان رحیمی</h5>
                                <span>زبان آموز کلاس گروهی آلمانی</span>
                                <div class="testi-rate">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </div>
                            <div class="facts-detail">
                                <p>خوشحالم از اینکه با موسسه رایا ،یادگیری زبان آلمانی رو میگذرونم وبرای من شانس بزرگی بود به چند علت :
                                    نظارت مستقیم آموزشگاه بر کیفیت کلاسها و بازخورد مناسب

                                    استاد بسیار بسیار عالی که یادگیری زبان سخت المانی رو با وجود مشغله کاری،برای من بسیار شیرین و دوست داشتنی کردن
                                    بازه زمانی مناسب برای تمام کردن سطوح زبان آلمانی

                                    نهایتا هزینه مناسب کلاسها
                                    ممنونم از دوستان مجموعه آموزشی رایا و خسته نباشید.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Brand Section =============================== -->

@endsection
