@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">کاربران</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">نام خانوادگی</th>
                                <th scope="col">شماره تماس</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">آدرس</th>
                                <th scope="col">کدپستی</th>
                                <th scope="col">پروفایل</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Teacher</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>{{$user->number}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->postcode}}</td>
                                    <td>{{$user->profile}}</td>
                                    <td>{{($user->is_admin) ? 'ادمین' : '-'}}</td>
                                    <td>{{($user->is_seller) ? 'مدرس' : '-'}}</td>
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
