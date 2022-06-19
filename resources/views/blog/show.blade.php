@extends('layout.app')

@section('content')

    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">لزوم یادگیری زبان در دنیای امروزی!</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">بلاگ</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency List Start ================================== -->
    <section class="gray">

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">

                            <div class="article_featured_image">
                                <img class="img-fluid"
                                     src="{{($blog->image != null) ? '/upload/admin/blog/'.$blog->image : url('/upload/no-image.png')}}"
                                     alt="">
                            </div>

                            {!! $blog->desc !!}
                        </div>
                    </div>

                    <!-- Author Detail -->
                    <div class="article_detail_wrapss single_article_wrap format-standard">

                        <div class="article_posts_thumb">
                            @php $user = \App\Models\User::where('email',$blog->user_id)->get(); @endphp
                            @foreach($user as $val)
                            <span class="img"><img class="img-fluid" src="{{($val->profile != null) ? '/upload/admin-images/'.$val->profile : '/upload/no-profile.jpg'}}" alt=""></span>
                            <h3 class="pa-name">{{$val->email}}</h3>
                            <h5 class="pa-name">{{$val->fname.' '.$val->lname}}</h5>
                            <ul class="social-links">
                                <li><a href="{{$val->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$val->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$val->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{$val->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            @endforeach
                        </div>

                    </div>

                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <!-- Trending Posts -->
                    <div class="single_widgets widget_thumb_post">
                        <h4 class="title">پرمخاطب</h4>
                        <ul>
                            @foreach($blogs as $val)
                            <li>
								<span class="left">
                                    <img src="{{($blog->image != null) ? '/upload/admin/blog/'.$blog->image : url('/upload/no-image.png')}}" alt="" class="">
                                </span>
                                <span class="right">
                                    <a class="feed-title" href="{{route('showBlog',['id' => $val->id])}}">{{$val->title}}</a>
                                    <span class="post-date"><i class="ti-calendar"></i>{{$val->updated_at->diffForHumans()}}</span>
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Tags Cloud -->
                    <div class="single_widgets widget_tags">
                        <h4 class="title">تگ</h4>
                        <ul>
                            @foreach(explode(",",$blog->tags) as $tag)
                                <li><a href="">{{$tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->

@endsection
