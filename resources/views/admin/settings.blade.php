@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                           href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            عمومی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-private" data-toggle="pill"
                           href="#account-vertical-private" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            شخصی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                           href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            تغییر گذرواژه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                           href="#account-vertical-social" aria-expanded="false">
                            <i class="feather icon-camera mr-50 font-medium-3"></i>
                            شبکه های اجتماعی
                        </a>
                    </li>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                {{--General--}}
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                     aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate="" action="{{route('admin.index.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        @foreach($option as $options)
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">عنوان سایت</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-name" placeholder="عنوان سایت"
                                                               value="{{$options->title}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-e-mail">ایکون سایت</label>
                                                        <input type="text" class="form-control" name="ico"
                                                               id="account-e-mail" placeholder="ایکون سایت"
                                                               value="{{$options->ico}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">متن بنر 1</label>
                                                    <textarea  class="form-control ckeditor" id="editor" name="banner_txt_1" cols="30" placeholder="متن بنر 1" rows="10" required>
                                                        {{$options->banner_txt_1}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">تصویر بنر 1</label>
                                                    <input type="text" class="form-control" name="banner_img_1" id="number"
                                                           placeholder="تصویر بنر 1" value="{{$options->banner_img_1}}"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">پوستر ویدیو</label>
                                                    <input type="text" class="form-control" name="video_poster" id="number"
                                                           placeholder="پوستر ویدیو" value="{{$options->video_poster}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">فایل ویدیو</label>
                                                    <input type="text" class="form-control" name="video_file" id="number"
                                                           placeholder="فایل ویدیو" value="{{$options->video_file}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">متن بنر 2</label>
                                                    <textarea class="form-control ckeditor" id="editor" name="banner_txt_2" cols="30" placeholder="متن بنر 2" rows="10" required>
                                                        {{$options->banner_txt_2}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">تصویر بنر 2</label>
                                                    <input type="text" class="form-control" name="banner_img_2" id="number"
                                                           placeholder="تصویر بنر 2" value="{{$options->banner_img_2}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                    </form>
                                </div>
                                {{--Private--}}
                                <div role="tabpanel" class="tab-pane fade" id="account-vertical-private"
                                     aria-labelledby="account-pill-private" aria-expanded="true">
                                    <form novalidate="" action="{{route('admin.settings.update')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                <img id="showImage"
                                                     src="{{(!empty($admin->profile)) ? url('upload/admin_images/'.$admin->profile) : url('upload/no-profile.jpg')}}"
                                                     class="rounded mr-75" alt="profile image" height="64" width="64">
                                            </a>
                                            <div class="media-body mt-75">
                                                <div
                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label
                                                        class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light"
                                                        for="image">اپلود تصویر</label>
                                                    <input name="profile" type="file" id="image" hidden="">
                                                    <button
                                                        class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">
                                                        ریست
                                                    </button>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                        size of
                                                        800kB</small></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">نام</label>
                                                        <input type="text" class="form-control" name="fname"
                                                               id="account-username" placeholder="نام"
                                                               value="{{$admin->fname}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">نام خانوادگی</label>
                                                        <input type="text" class="form-control" name="lname"
                                                               id="account-name" placeholder="نام خانوادگی"
                                                               value="{{$admin->lname}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-e-mail">ایمیل</label>
                                                        <input type="email" class="form-control" name="email"
                                                               id="account-e-mail" placeholder="ایمیل"
                                                               value="{{$admin->email}}" required=""
                                                               data-validation-required-message="وارد کردن ایمیل یا شماره تماس اجباری است">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">شماره تماس</label>
                                                    <input type="number" class="form-control" name="number" id="number"
                                                           placeholder="شماره تماس" value="{{$admin->number}}"
                                                           required=""
                                                           data-validation-required-message="وارد کردن ایمیل یا شماره تماس اجباری است">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">کد پستی</label>
                                                    <input type="text" class="form-control" name="postcode" id="number"
                                                           placeholder="کد پستی" value="{{$admin->postcode}}"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">آدرس</label>
                                                    <input type="text" class="form-control" name="address" id="number"
                                                           placeholder="آدرس" value="{{$admin->address}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">شغل</label>
                                                    <input type="text" class="form-control" name="job" id="number"
                                                           placeholder="شغل" value="{{$admin->job}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="number">بیوگرافی</label>
                                                    <textarea class="form-control" name="bio" id="number" cols="30"
                                                              rows="3"
                                                              placeholder="بیوگرافی خود را تکمیل کنید">{{$admin->bio}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Password--}}
                                <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                     aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form novalidate="" action="{{route('admin.password.update')}}" method="POST">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">گذرواژه کنونی</label>
                                                        <input type="password" name="oldpassword" class="form-control"
                                                               id="account-old-password" required=""
                                                               placeholder="گذرواژه کنونی"
                                                               data-validation-required-message="This old password field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">گذرواژه جدید</label>
                                                        <input type="password" name="password" id="account-new-password"
                                                               class="form-control" placeholder="گذرواژه جدید"
                                                               required=""
                                                               data-validation-required-message="The password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">تایید گذرواژه
                                                            جدید</label>
                                                        <input type="password" name="password_confirmation"
                                                               class="form-control" required=""
                                                               id="account-retype-new-password"
                                                               data-validation-match-match="password"
                                                               placeholder="تایید گذرواژه جدید"
                                                               data-validation-required-message="The Confirm password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Social--}}
                                <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                     aria-labelledby="account-pill-social" aria-expanded="false">
                                    <form action="{{route('admin.create.social')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">فیسبوک</label>
                                                    <input type="text" id="account-facebook" name="facebook"
                                                           class="form-control" value="{{$admin->facebook}}"
                                                           placeholder="شبکه اجتماعی خود را وارد کنید" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">تویتر</label>
                                                    <input type="text" id="account-facebook" name="twitter"
                                                           class="form-control" value="{{$admin->twitter}}"
                                                           placeholder="شبکه اجتماعی خود را وارد کنید" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">لیکداین</label>
                                                    <input type="text" id="account-facebook" name="linkedin"
                                                           class="form-control" value="{{$admin->linkedin}}"
                                                           placeholder="شبکه اجتماعی خود را وارد کنید" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">اینستاگرام</label>
                                                    <input type="text" id="account-facebook" name="instagram"
                                                           class="form-control" value="{{$admin->instagram}}"
                                                           placeholder="شبکه اجتماعی خود را وارد کنید" required>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
