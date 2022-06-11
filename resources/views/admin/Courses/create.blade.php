@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                افزودن دوره جدید
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.storeFirstCourse')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان دوره</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-username" placeholder="عنوان دوره"
                                                               value=""
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
                                                <textarea class="form-control" id="editor" rows="3" name="desc"
                                                          placeholder="توضیحات دوره"
                                                          required=""
                                                          data-validation-required-message=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">خلاصه توضیحات دوره</label>
                                                <input type="text" class="form-control" name="b_desc"
                                                       id="account-username" placeholder="خلاصه توضیحات دوره"
                                                       value=""
                                                       required="" data-validation-required-message="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت دوره</label>
                                                        <input type="text" class="form-control" name="price"
                                                               id="account-username" placeholder="قیمت دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت تخفیف خورده</label>
                                                        <input type="text" class="form-control" name="price_off"
                                                               id="account-username"
                                                               placeholder="قیمت تخفیف خورده" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان سئو</label>
                                                        <input type="text" class="form-control" name="seo_title"
                                                               id="account-username" placeholder="عنوان سئو"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">توضیحات سئو</label>
                                                        <input type="text" class="form-control" name="seo_desc"
                                                               id="account-username" placeholder="توضیحات سئو"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">پوستر دوره</label>
                                                        <input type="text" class="form-control" name="c_poster"
                                                               id="account-username" placeholder="پوستر دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">فایل دوره
                                                            (اختیاری)</label>
                                                        <input type="text" class="form-control" name="c_file"
                                                               id="account-username"
                                                               placeholder="فایل دوره (اختیاری)" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دمو دوره</label>
                                                        <input type="text" class="form-control" name="c_demo"
                                                               id="account-username" placeholder="دمو دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">اسلایدر دوره</label>
                                                        <input type="text" class="form-control"
                                                               name="c_slider_img"
                                                               id="account-username" placeholder="اسلایدر دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">تصویر شاخص دوره</label>
                                                        <input type="text" class="form-control" name="c_alt_img"
                                                               id="account-username"
                                                               placeholder="تصویر شاخص دوره" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">زمان دوره</label>
                                                        <input type="text" class="form-control" name="time"
                                                               id="account-username" placeholder="زمان دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">وضعیت دوره</label>
                                                        <input type="text" class="form-control" name="status"
                                                               id="account-username" placeholder="وضعیت دوره"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">وضعیت انتشار دوره</label>
                                                        <input type="text" class="form-control"
                                                               name="status_upload"
                                                               id="account-username"
                                                               placeholder="وضعیت انتشار دوره" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دسته بندی دوره</label>
                                                        <input type="text" class="form-control" name="status"
                                                               id="account-username"
                                                               placeholder="دسته بندی دوره" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
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
    </section>
@endsection
