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
                            اطلاعات اولیه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                           href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            اطلاعات پرداخت
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                           href="#account-vertical-info" aria-expanded="false">
                            <i class="feather icon-info mr-50 font-medium-3"></i>
                            اطلاعات سئو
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                           href="#account-vertical-social" aria-expanded="false">
                            <i class="feather icon-camera mr-50 font-medium-3"></i>
                            فایل ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
                           href="#account-vertical-notifications" aria-expanded="false">
                            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                            اطلاعات تکمیلی
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
                                    <form novalidate="" action="{{route('admin.storeFirstCourse')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">عنوان دوره</label>
                                                                <input type="text" class="form-control" name="title"
                                                                       id="account-username" placeholder="عنوان دوره" value="{{$course->title}}"
                                                                       required="" data-validation-required-message="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">slug دوره</label>
                                                                <input type="text" class="form-control" name="slug"
                                                                       id="account-username" placeholder="slug دوره" value="{{$course->slug}}"
                                                                       required="" data-validation-required-message="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">توضیحات دوره</label>
                                                        <textarea class="form-control" id="account-username" rows="3" name="desc"
                                                                  placeholder="توضیحات دوره"
                                                                  required="" data-validation-required-message="">{{$course->desc}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">خلاصه توضیحات دوره</label>
                                                        <input type="text" class="form-control" name="b_desc"
                                                               id="account-username" placeholder="خلاصه توضیحات دوره" value="{{$course->b_desc}}"
                                                               required="" data-validation-required-message="">
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
                                {{--Password--}}
                                <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                     aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form novalidate="" action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">قیمت دوره</label>
                                                        <input type="text" name="price" class="form-control"
                                                               id="account-old-password" required=""
                                                               placeholder="قیمت دوره"
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">قیمت تخفیف خورده</label>
                                                        <input type="text" name="price_off" id="account-new-password"
                                                               class="form-control" placeholder="قیمت تخفیف خورده"
                                                               required=""
                                                               data-validation-required-message="">
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
                                {{--Info--}}
                                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                     aria-labelledby="account-pill-info" aria-expanded="false">
                                    <form novalidate="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">عنوان سئو</label>
                                                        <input type="text" name="seo_title" class="form-control"
                                                               id="account-old-password" required=""
                                                               placeholder="عنوان سئو"
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">خلاصه مطلب سئو</label>
                                                        <input type="text" name="seo_desc" id="account-new-password"
                                                               class="form-control" placeholder="خلاصه مطلب سئو"
                                                               required=""
                                                               data-validation-required-message="">
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
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">پوستر ویدیو</label>
                                                        <input type="file" name="seo_desc" id="account-new-password"
                                                               class="form-control" placeholder="خلاصه مطلب سئو"
                                                               required=""
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">فایل دوره (کامل)</label>
                                                        <input type="file" name="seo_desc" id="account-new-password"
                                                               class="form-control" placeholder="خلاصه مطلب سئو"
                                                               required=""
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">تصویر شاخص</label>
                                                        <input type="file" name="seo_desc" id="account-new-password"
                                                               class="form-control" placeholder="خلاصه مطلب سئو"
                                                               required=""
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">تصویر اسلایدر</label>
                                                        <input type="file" name="seo_desc" id="account-new-password"
                                                               class="form-control" placeholder="خلاصه مطلب سئو"
                                                               required=""
                                                               data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">ذخیره</button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Notification--}}
                                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                     aria-labelledby="account-pill-notifications" aria-expanded="false">
                                    <div class="row">

                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">ذخیره</button>
                                            <button type="reset"
                                                    class="btn btn-outline-warning waves-effect waves-light">انصراف
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
