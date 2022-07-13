@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">داشبورد</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="dashboard_stats_wrap">
                    @php $course = \App\Models\Course::where('user_id',auth()->user()->email)->get(); @endphp
                    <div class="dashboard_stats_wrap_content"><h4 class="text-success">{{count($course)}}</h4> <span>دوره ها</span>
                    </div>
                    <div class="dashboard_stats_wrap-icon"><i class="ti-book"></i></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="dashboard_stats_wrap">
                    @php $lesson = \App\Models\Lesson::where('user_id',auth()->user()->email)->get(); @endphp
                    <div class="dashboard_stats_wrap_content"><h4 class="text-warning">{{count($lesson)}}</h4> <span>درس ها</span>
                    </div>
                    <div class="dashboard_stats_wrap-icon"><i class="ti-bolt"></i></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="dashboard_stats_wrap">
                    <div class="dashboard_stats_wrap_content"><h4 class="text-danger">3</h4> <span>کلاس ها</span>
                    </div>
                    <div class="dashboard_stats_wrap-icon"><i class="ti-clipboard"></i></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="dashboard_stats_wrap">
                    @php $ticket = \App\Models\Ticket::where('user_id',auth()->user()->id)->get(); @endphp
                    <div class="dashboard_stats_wrap_content"><h4 class="text-info">{{count($ticket)}}</h4> <span>تیکت ها</span>
                    </div>
                    <div class="dashboard_stats_wrap-icon"><i class="ti-comment"></i></div>
                </div>
            </div>

        </div>
        <!-- /Row -->

        <!-- row-->
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="content-box-01">
                    <div class="content-box-01-head mb-3"><h5 class="mb-0">دوره های من</h5></div>
                    <div class="content-box-01-full mb-4">
                        @php $courses = \App\Models\Course::where('user_id',auth()->user()->email)->paginate(3); @endphp
                        @foreach($courses as $course)
                            <div class="learnup-list">
                                <div class="learnup-list-thumb">
                                    <a href="{{route('course.show',['id' => $course->id])}}"><img
                                            src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}"
                                            class="img-fluid"
                                            alt=""/></a>
                                </div>
                                <div class="learnup-list-caption">
                                    <h6><a href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a>
                                    </h6>
                                    <div class="learnup-info mt-2"><span class="ml-3">{{$course->time}}</span><span>456 شرکت کننده</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="content-box-01">
                    <div class="content-box-01-head mb-3"><h5 class="mb-0">آخرین دوره ها</h5></div>
                    <div class="content-box-01-full mb-4">
                        @php $coures = \App\Models\Course::latest()->paginate(3) @endphp
                        @foreach($courses as $course)
                            <div class="learnup-list">
                                <div class="learnup-list-thumb">
                                    <a href="{{route('course.show',['id' => $course->id])}}"><img
                                            src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}"
                                            class="img-fluid"
                                            alt=""/></a>
                                </div>
                                <div class="learnup-list-caption">
                                    <h6><a href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a>
                                    </h6>
                                    <div class="learnup-info mt-2"><span class="ml-3">{{$course->time}}</span><span>456 شرکت کننده</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="content-box-01">
                    <div class="content-box-01-head mb-3"><h5 class="mb-0">کلاس های من</h5></div>
                    <div class="content-box-01-full mb-4">
                        @php $class = \App\Models\OnlineClass::where('user_id',auth()->user()->id)->paginate(3); @endphp
                        @foreach($class as $val)
                        <div class="learnup-list">
                            <div class="learnup-list-caption">
                                <h6>{{$val->topic}}</h6>
                                <p>مدت زمان : {{$val->duration}} دقیقه</p>
                                <div class="learnup-info mt-2">
                                    زمان شروع : {{$val->start_time}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- Row End -->

        <!-- row-->
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="content-box-01">
                    <div class="content-box-01-head mb-3"><h5 class="mb-0">تیکت ها</h5></div>
                    <div class="content-box-01-full mb-4">
                        @php $courses = \App\Models\Course::where('user_id',auth()->user()->email)->paginate(3); @endphp
                        @foreach($courses as $course)
                            <div class="learnup-list">
                                <div class="learnup-list-thumb">
                                    <a href="{{route('course.show',['id' => $course->id])}}"><img
                                            src="{{($course->c_poster != null) ? $course->c_poster : url('/upload/no-image.png')}}"
                                            class="img-fluid"
                                            alt=""/></a>
                                </div>
                                <div class="learnup-list-caption">
                                    <h6><a href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a>
                                    </h6>
                                    <div class="learnup-info mt-2"><span class="ml-3">{{$course->time}}</span><span>456 شرکت کننده</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="content-box-01">
                    <div class="content-box-01-head mb-3"><h5 class="mb-0">تراکنش های اخیر</h5></div>
                    <div class="content-box-01-full mb-4">
                        @php $transaction = App\Models\Transaction::where('user_id',\auth()->user()->id)->paginate(3); @endphp
                        @foreach($transaction as $val)
                            <div class="learnup-list">
                                <div class="learnup-list-caption">
                                    <h6>{{$val->paid}}</h6>
                                    <div class="learnup-info mt-2">
                                        {{$val->status}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- Row End -->


    </div>
@endsection
