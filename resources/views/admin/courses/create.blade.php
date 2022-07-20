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
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">توضیحات دوره</label>
                                                <textarea class="form-control ckeditor" id="editor" rows="3" name="desc"
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
                                                       required>
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
                                                               required>
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
                                                               required>
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
                                                        <label for="account-username">قیمت دوره(دلار)</label>
                                                        <input type="text" class="form-control" name="d_price"
                                                               id="account-username" placeholder="قیمت دوره"
                                                               value=""
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت تخفیف خورده(دلار)</label>
                                                        <input type="text" class="form-control" name="d_price_off"
                                                               id="account-username"
                                                               placeholder="قیمت تخفیف خورده" value=""
                                                               required>
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
                                                               required>
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
                                                               required>
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
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دمو دوره</label>
                                                        <input type="text" class="form-control" name="c_demo"
                                                               id="account-username"
                                                               placeholder="دمو دوره" value=""
                                                               required>
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
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">وضعیت دوره</label>
                                                        <select name="status" id="category" class="form-control">
                                                            <option value="در حال برگذاری">در حال برگذاری</option>
                                                            <option value="تکمیل شده">تکمیل شده</option>
                                                        </select>
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
                                                        <select name="status_upload" id="category" class="form-control">
                                                            <option value="منتشر شده">منتشر شده</option>
                                                            <option value="پیش نویس">پیش نویس</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دسته بندی دوره</label>
                                                        <select name="category_id" id="category" class="form-control">
                                                            @if($cat)
                                                            <option value="">بدون دسته بندی</option>
                                                                @foreach($cat as $category)
                                                                    <?php $dash=''; ?>
                                                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                                    @if(count($category->subcategory))
                                                                        @include('admin.categories.subCategoryList',['subcategories' => $category->subcategory])
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
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
                                                        <label for="account-username">دسته زبان دوره</label>
                                                        <select name="language" id="category" class="form-control">
                                                            <option value="english">انگلیسی</option>
                                                            <option value="spanish">اسپانیایی</option>
                                                            <option value="french">فرانسوی</option>
                                                            <option value="russian">روسی</option>
                                                            <option value="turkish">ترکی</option>
                                                            <option value="chinese">چینی</option>
                                                            <option value="italy">ایتالیایی</option>
                                                            <option value="germany">آلمانی</option>
                                                            <option value="arabic">عربی</option>
                                                        </select>
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

@section('script')

    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
