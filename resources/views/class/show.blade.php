@extends('layout.app')

@section('content')
    <div class="ed_detail_head">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">

                    <div class="property_video">
                        <div class="thumb">
                            <img class="pro_img img-fluid w100" src="{{(empty($class->poster) ? '/upload/no-image.png' : $class->poster)}}" alt="{{$class->topic}}">
                        </div>
                    </div>

                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="ed_detail_wrap">
                        <ul class="cources_facts_list">
                            <li class="facts-1">کلاس</li>
                        </ul>
                        <div class="ed_header_caption">
                            <h2 class="ed_title">{{$class->topic}}</h2>
                            <ul>
                                <li><i class="ti-calendar"></i>تاریخ شروع : {{$class->start_time}}</li>
                                <li><i class="ti-control-forward"></i>مدت زمان : {{$class->duration}}</li>
                            </ul>
                        </div>
                        <div class="ed_header_short">
                            <p>قیمت : @if(empty($class->price)) رایگان @else {{$class->price}} تومان @endif</p>
                            <p>قیمت (دلار) : @if(empty($class->d_price)) رایگان @else {{$class->d_price}} تومان @endif</p>
                            <p><a class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light" href="{{$class->join_url}}">ورود به کلاس</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
