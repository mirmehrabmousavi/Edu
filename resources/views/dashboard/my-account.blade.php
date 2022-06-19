@extends('dashboard.layout.app')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
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
                    <div class="dashboard_container_body p-4">
                        <!-- Basic info -->
                        <div class="submit-section">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>نام کامل</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>ایمیل</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>مقطع آموزش</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>شماره تماس</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>آدرس</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>استان</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>شهرستان</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>کدپستی</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>درباره من</label>
                                    <textarea class="form-control">زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</textarea>
                                </div>

                            </div>
                        </div>
                        <!-- Basic info -->

                        <!-- Social Account info -->
                        <div class="form-submit">
                            <h4 class="pl-2 mt-2">اکانت های اجتماعی</h4>
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Twitter</label>
                                        <input type="email" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Google Plus</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit">ذخیره تغییرات</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- / Social Account info -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
