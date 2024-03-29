@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">درخواست ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">خانوادگی</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">شماره تماس</th>
                                <th scope="col">آدرس</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">توضیحات</th>
                                <th scope="col">رزومه</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($collaborate as $value)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->name}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->family}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->email}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->number}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->address}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->title}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->desc}}</a></td>
                                    <td><a href="{{route('admin.singleCollaborate',['id' => $value->id])}}">{{$value->resume}}</a></td>
                                    <td>
                                        <a class="btn btn-outline-success round mr-1 mb-1 waves-effect waves-light" href="{{ route('admin.confirmCollaborate',['email' => $value->email,'id' => $value->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('save').submit();">تایید</a>
                                        <form id="save" action="{{ route('admin.confirmCollaborate',['email' => $value->email,'id' => $value->id]) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('patch')
                                        </form>
                                        <a class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light" href="{{ route('admin.deleteCollaborate',['id' => $value->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">حذف</a>
                                        <form id="del" action="{{ route('admin.deleteCollaborate',['id' => $value->id]) }}" method="POST" class="d-none">
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
