@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning"><p><i class="fa fa-info-circle"></i>    برای افزودن درس حداقل یک دوره اضافه کنید</p></div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">دروس</h4>
                    <a href="{{route('admin.createLesson')}}" class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light"><i class="fa fa-plus"></i>افزودن</a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام درس</th>
                                <th scope="col">رایگان</th>
                                <th scope="col">فصل</th>
                                <th scope="col">دوره</th>
                                <th scope="col">مدرس</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $value)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->l_free}}</td>
                                    <td>{{$value->season}}</td>
                                    <td>{{$value->l_course}}</td>
                                    <td>{{$value->user_id}}</td>
                                    <td>
                                        <a href="{{Route('admin.editLesson', $value->id)}}" class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light">ویرایش</a>
                                        <a class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light" href="{{ route('admin.deleteLesson',['id' => $value->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">حذف</a>
                                        <form id="del" action="{{ route('admin.deleteLesson',['id' => $value->id]) }}" method="POST" class="d-none">
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
