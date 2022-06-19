@extends('layout.app')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">تماس با ما</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency List Start ================================== -->
    <section class="bg-light">

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <div class="col-lg-8 col-md-7">
                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">تکمیل فرم درخواست</h4>
                        </div>

                        <div class="prc_wrap-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>نام کامل</label>
                                        <input type="text" class="form-control simple">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>ایمیل</label>
                                        <input type="email" class="form-control simple">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" class="form-control simple">
                            </div>

                            <div class="form-group">
                                <label>پیام</label>
                                <textarea class="form-control simple"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-theme" type="submit">ارسال درخواست</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-5">

                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">راه های ارتباطی</h4>
                        </div>

                        <div class="prc_wrap-body">
                            <div class="contact-info">

                                <h2>در تماس باشید</h2>
                                <p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-home"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">آدرس ما</h4>
                                        {{$admin->address}}
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">پست الکترونیکی</h4>
                                        {{$admin->email}}
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">شماره تماس</h4>
                                        {{$admin->number}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->
@endsection
