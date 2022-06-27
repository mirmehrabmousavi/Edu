@extends('layout.app')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">افزودن به سبد خرید</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">افزودن به سبد خرید</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ Add To cart ================================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="table-responsive">
                        <table class="table add_to_cart">
                            <thead>
                            </thead>
                            <tbody>
                            <tr>
                                <td><div class="tb_course_thumb"><img src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}" class="img-fluid" alt="" /></div></td>
                                <th>{{$course->title}}</th>
                                <td><span class="wish_price theme-cl">{{$course->price}} تومان</span></td>
                                <td><span class="wish_price theme-cl">{{$course->d_price}} دلار</span></td>
                                <td><p>{{$course->b_desc}}</p></td>
                                <td><p>{{$course->time}}</p></td>
                                <td><p>{{$course->status}}</p></td>
                                <td><p>{{$course->language}}</p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- Total Cart -->
                    <div class="cart_totals checkout">
                        <h4>صورت حساب زرین پال</h4>
                        <div class="cart-wrap">
                            <ul class="cart_list">
                                <li>قیمت<strong>{{$course->price}} تومان</strong></li>
                                <li>با تخفیف<strong>{{$course->price_off}} تومان</strong></li>
                            </ul>
                            <div class="flex_cart">
                                <div class="flex_cart_1">
                                    جمع کل
                                </div>
                                <div class="flex_cart_2">
                                    {{$course->price_off}} تومان
                                </div>
                            </div>
                            <a href="{{route('purchase',['id' => $course->id])}}" class="btn checkout_btn">پرداخت</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- Total Cart -->
                    <div class="cart_totals checkout">
                        <h4> PayPal صورت حساب</h4>
                        <div class="cart-wrap">
                            <ul class="cart_list">
                                <li>قیمت<strong>{{$course->d_price}} دلار</strong></li>
                                <li>با تخفیف<strong>{{$course->d_price_off}} دلار</strong></li>
                            </ul>
                            <div class="flex_cart">
                                <div class="flex_cart_1">
                                    جمع کل
                                </div>
                                <div class="flex_cart_2">
                                    {{$course->d_price_off}} دلار
                                </div>
                            </div>
                            <a href="{{route('purchase',['id' => $course->id ,'d_price' => $course->d_price_off])}}" class="btn checkout_btn">پرداخت</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Add To cart End ================================== -->

@endsection
