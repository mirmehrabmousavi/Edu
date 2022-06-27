@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning"><p><i class="fa fa-info-circle"></i>    برای افزودن دوره حداقل یک دسته بندی اضافه کنید</p></div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">دوره</h4>
                    <a href="{{route('admin.createCourse')}}" class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light"><i class="fa fa-plus"></i>افزودن</a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام دوره</th>
                                <th scope="col">خلاصه توضیحات</th>
                                <th scope="col">قیمت</th>
                                <th scope="col">قیمت به دلار</th>
                                <th scope="col">زمان دوره</th>
                                <th scope="col">وضعیت دوره</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->b_desc}}</td>
                                    <td>{{$course->price}}</td>
                                    <td>{{$course->d_price}}</td>
                                    <td>{{$course->time}}</td>
                                    <td>{{$course->status}}</td>
                                    <td>
                                        <a href="{{Route('admin.editCourse', ['id' => $course->id])}}" class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light">ویرایش</a>
                                        <a class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light" href="{{ route('admin.deleteCourse',['id' => $course->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">حذف</a>
                                        <form id="del" action="{{ route('admin.deleteCourse',['id' => $course->id]) }}" method="POST" class="d-none">
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
