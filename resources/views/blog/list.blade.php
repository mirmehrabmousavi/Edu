@extends('layout.app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">لیست وبلاگ</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لیست وبلاگ</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">

            <div class="row">

                @foreach($blogs as $value)
                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="{{route('showBlog',['id' => $value->id])}}"><img src="{{($value->image != null) ? '/upload/admin/blog/'.$value->image : url('/upload/no-image.png')}}" class="img-fluid" alt=""></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>{{$value->title}}</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/upload/no-profile.jpg" class="img-fluid" alt=""></div>
                                <h4>{{$value->user_id}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
