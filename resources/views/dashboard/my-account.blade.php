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
                    <form action="">
                        <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>نام</label>
                                        <input type="text" class="form-control" name="fname" placeholder="نام">
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
