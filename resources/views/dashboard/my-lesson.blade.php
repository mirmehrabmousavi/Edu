@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">درس ها</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_fl_1">
                            <h4>درس ها</h4>
                        </div>
                        <div class="dashboard_fl_2">
                            <div class="form-group col-lg-12 col-md-12">
                                <a href="{{route('addLesson')}}" class="btn btn-theme">افزودن درس</a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_container_body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">رایگان</th>
                                    <th scope="col">فصل</th>
                                    <th scope="col">دوره</th>
                                    <th scope="col">کاربر</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lessons as $val)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$val->title}}</td>
                                    <td><span class="payment_status complete">{{$val->l_free}}</span></td>
                                    <td>{{$val->season}}</td>
                                    <td>{{$val->l_course}}</td>
                                    <td>{{$val->user_id}}</td>
                                    <td>
                                        <div class="dash_action_link">
                                            @php $course = \App\Models\Course::where('title',$val->l_course)->get(); @endphp
                                            <a href="{{route('course.show',['id' => $course->id])}}" class="view">مشاهده</a>
                                            <a href="{{route('editLesson',['id' => $val->id])}}" class="hold">ویرایش</a>
                                            <a href="{{route('deleteLesson',['id' => $val->id])}}" class="cancel" onclick="event.preventDefault();
                                                         document.getElementById('del').submit();">حذف</a>
                                            <form id="del" action="{{route('deleteLesson',['id' => $val->id])}}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
