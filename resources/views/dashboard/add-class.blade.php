@extends('dashboard.layout.app')
@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن دوره جدید</li>
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
                            <h4>دوره خود را ثبت نمایید</h4>
                        </div>
                    </div>
                    <div class="dashboard_container_body p-4">
                        <!-- Basic info -->
                        <div class="submit-section">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>عنوان</label>
                                    <input type="text" class="form-control" placeholder="آموزش برنامه نویسی‌اندروید">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>قیمت</label>
                                    <input type="email" class="form-control" placeholder="23600 تومان">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>تاریخ شروع ثبت نام</label>
                                    <input type="text" name="edu-start" class="form-control" value="1399/11/11">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>تاریخ اتمام ثبت نام</label>
                                    <input type="text" name="edu-expire" class="form-control" value="1400/01/15" placeholder="1400/01/15">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>برچسب</label>
                                    <input type="text" class="form-control" value="طراحی سایت، برنامه نویسی، PHP">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>نام مدرس</label>
                                    <input type="text" class="form-control" placeholder="حسام موسوی">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>عکس دوره</label>
                                    <form action="" class="dropzone dz-clickable primary-dropzone">
                                        <div class="dz-default dz-message">
                                            <i class="ti-gallery"></i>
                                            <span>تصویر موردنظر را آپلود نمایید</span>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- Basic info -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_fl_1">
                            <h4>افزودن توضیحات</h4>
                        </div>
                    </div>
                    <div class="dashboard_container_body p-4">
                        <!-- Basic info -->
                        <div class="submit-section">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>درباره دوره</label>
                                    <textarea class="form-control" placeholder="متن دلخواه"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>دسته بندی</label>
                                    <input type="text" class="form-control" placeholder="نرم افزار، گرافیک،...">
                                </div>

                            </div>
                        </div>
                        <!-- Basic info -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_fl_1">
                            <h4>افزودن ویدئو</h4>
                        </div>
                    </div>
                    <div class="dashboard_container_body p-4">
                        <!-- Basic info -->
                        <div class="submit-section">

                            <h6 class="mr-2">عناوین</h6>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label>عنوان</label>
                                    <input type="text" class="form-control" placeholder="عنوان ویدئو">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>دسته بندی</label>
                                    <input type="email" class="form-control" placeholder="دسته بندی ویدئو">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>آدرس</label>
                                    <input type="text" class="form-control" placeholder="آدرس ویدئو">
                                </div>

                                <div class="form-group col-md-12">
                                    <a href="javascript:void(0);" class="btn add-items">افزودن بیشتر<i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>


                        </div>
                        <!-- Basic info -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

        <div class="row">
            <div class="form-group col-lg-12 col-md-12">
                <button class="btn btn-theme" type="submit">ذخیره</button>
            </div>
        </div>

    </div>
    @endsection
