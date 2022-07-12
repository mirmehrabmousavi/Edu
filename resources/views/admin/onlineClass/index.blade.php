@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">کلاس ها</h4>
                    <a href="{{route('onlineClass.create')}}" class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light"><i class="fa fa-plus"></i>افزودن</a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کاربر</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">تاریخ شروع کلاس</th>
                                <th scope="col">مدت زمان دوره</th>
                                <th scope="col">لینک ورود به کلاس</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($onlineClasses as $value)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$value->user()->email}}</td>
                                    <td>{{$value->topic}}</td>
                                    <td>{{$value->start_at}}</td>
                                    <td>{{$value->duration}}</td>
                                    <td class="text-success"><a href="{{$val->join_url}}" target="_blank">ورود به کلاس</a></td>
                                    <td>
                                        <a class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light" href="{{ route('onlineClass.destroy',['id' => $value->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">حذف</a>
                                        <form id="del" action="{{ route('onlineClass.destroy',['id' => $value->id]) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
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
@endsection
