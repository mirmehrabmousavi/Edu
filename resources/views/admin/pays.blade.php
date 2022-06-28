@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">پرداخت ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان پرداخت</th>
                                <th scope="col">جمع کل</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transaction as $val)
                                <tr>
                                    <th scope="row">#0000{{+$loop->index+1}}</th>
                                    @php $course = \App\Models\Course::where('id',$val->course_id)->first() @endphp
                                    <td>{{$course->title}}</td>
                                    <td>{{$val->paid}}</td>
                                    <td>{{$val->created_at->diffForHumans()}}</td>
                                    @php
                                        $status = 'موفق';
                                        $color = '';
                                        switch ($val->status) {
                                            case 0:
                                                $status = 'کنسل شده';
                                                $color = 'danger';
                                                break;
                                            case 1:
                                                $status = 'در انتظار پرداخت';
                                                $color = 'warning';
                                                break;
                                            case 2:
                                                $status = 'موفق';
                                                $color = 'success';
                                                break;
                                        }
                                    @endphp
                                    <td><span class="badge badge-{{$color}}">{{$status}}</span></td>
                                    {{--<td>
                                        <div class="dash_action_link">
                                            <a href="#" class="view">مشاهده</a>
                                            <a href="#" class="cancel">کنسل</a>
                                        </div>
                                    </td>--}}
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
