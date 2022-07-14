@extends('layout.app')

@section('content')
    <div class="container p-3">
        <div class="row">

            <div class="col-lg-8 col-md-7">
                <div class="prc_wrap">

                    <div class="prc_wrap_header">
                        <h4 class="property_block_title">تکمیل فرم درخواست</h4>
                    </div>

                    <form class="prc_wrap-body" action="{{route('storeCollaborate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>نام</label>
                                    <input type="text" class="form-control simple" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>نام خانوادگی</label>
                                    <input type="text" class="form-control simple" name="family">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>ایمیل</label>
                                    <input type="email" class="form-control simple" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>شماره تماس</label>
                                    <input type="number" class="form-control simple" name="number">
                                </div>
                            </div>
                        </div>

                       <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                               <label>آدرس</label>
                               <input type="text" class="form-control simple" name="address">
                           </div>
                       </div>


                        <div class="form-group">
                            <label>عنوان</label>
                            <input type="text" class="form-control simple" name="title">
                        </div>

                        <div class="form-group">
                            <label>پیام</label>
                            <textarea class="form-control simple" name="desc"></textarea>
                        </div>

                        <div class="form-group">
                            <label>رزومه</label>
                            <textarea class="form-control simple" name="resume"></textarea>
                        </div>


                        <div class="form-group">
                            <label>ارسال ویدیو ویس و یا فایل</label>
                            <input type="file" name="file" class="form-control simple">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-theme" type="submit">ارسال درخواست</button>
                        </div>
                    </form>

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

                                </div>
                            </div>

                            <div class="cn-info-detail">
                                <div class="cn-info-icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="cn-info-content">
                                    <h4 class="cn-info-title">پست الکترونیکی</h4>
                                    admin@gmail.com
                                </div>
                            </div>

                            <div class="cn-info-detail">
                                <div class="cn-info-icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="cn-info-content">
                                    <h4 class="cn-info-title">شماره تماس</h4>
                                    09369949693
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
