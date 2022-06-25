@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>
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
                            <h4>تنظیمات حساب کاربری</h4>
                        </div>
                    </div>
                    <form action="{{route('settingsUpdate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>نام</label>
                                        <input type="text" class="form-control" value="{{$user->fname}}" name="fname" placeholder="نام">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>نام خانوادگی</label>
                                        <input type="text" class="form-control" value="{{$user->lname}}" name="lname" placeholder="نام خانوادگی">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>ایمیل</label>
                                        <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="ایمیل">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>شماره تماس</label>
                                        <input type="number" class="form-control" value="{{$user->number}}" name="number" placeholder="شماره تماس">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>کد پستی</label>
                                        <input type="text" class="form-control" value="{{$user->postcode}}" name="postcode" placeholder="کد پستی">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>آدرس</label>
                                        <input type="text" class="form-control" value="{{$user->address}}" name="address" placeholder="آدرس">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>شغل</label>
                                        <input type="text" class="form-control" value="{{$user->job}}" name="job" placeholder="شغل">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>بیوگرافی</label>
                                        <input type="text" class="form-control" value="{{$user->bio}}" name="bio" placeholder="بیوگرافی">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>تصویر پروفایل</label>
                                        <input type="file" class="form-control" name="profile" placeholder="تصویر پروفایل">
                                        <img src="{{($user->profile) ? $user->profile : url('/upload/no-profile.jpg') }}" alt="" height="70" width="70">
                                    </div>

                                    <div class="form-group col-md-6">

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>گذرواژه فعلی</label>
                                        <input type="password" class="form-control" name="oldpassword" placeholder="گذرواژه فعلی">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>گذرواژه جدید</label>
                                        <input type="password" class="form-control" name="password" placeholder="گذرواژه جدید">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>فیسبوک</label>
                                        <input type="text" class="form-control" value="{{$user->facebook}}" name="facebook" placeholder="فیسبوک">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>توییتر</label>
                                        <input type="text" class="form-control" value="{{$user->twitter}}" name="twitter" placeholder="توییتر">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>لینکداین</label>
                                        <input type="text" class="form-control" value="{{$user->linkedin}}" name="linkedin" placeholder="لینکداین">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>اینستاگرام</label>
                                        <input type="text" class="form-control" value="{{$user->instagram}}" name="instagram" placeholder="اینستاگرام">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit">ذخیره تغییرات</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- /Row -->

    </div>
@endsection
