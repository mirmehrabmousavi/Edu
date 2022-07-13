@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">کلاس های من</li>
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
                        <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                                <h4>کلاس ها</h4>
                            </div>
                            <div class="dashboard_fl_2">
                                <div class="form-group col-lg-12 col-md-12">
                                    <a href="{{route('addClass')}}" class="btn btn-theme">افزودن کلاس</a>
                                </div>
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
                                    <th scope="col">تاریخ شروع کلاس</th>
                                    <th scope="col">مدت زمان کلاس</th>
                                    <th scope="col">لینک ورود به کلاس</th>
                                    <th scope="col">گذرواژه</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($onlineClasses as $val)
                                <tr>
                                    <th scope="row">#{{$loop->index+1}}</th>
                                    <td>{{$val->topic}}</td>
                                    <td>{{$val->start_time}}</td>
                                    <td>{{$val->duration}}</td>
                                    <td><a href="{{$val->join_url}}"> ورود به کلاس</a></td>
                                    <td>{{$val->password}}</td>
                                    <td>
                                        <div class="dash_action_link">
                                            <a href="{{route('editClass',['id' => $val->id])}}" class="view">ویرایش</a>
                                            <a href="{{route('deleteClass',['id' => $val->id])}}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();" class="cancel">حذف</a>
                                            <form id="del" action="{{ route('deleteClass',['id' => $val->id]) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('delete')
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
