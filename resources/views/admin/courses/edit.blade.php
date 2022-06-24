@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">ویرایش دوره</p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.updateCourse',['id' => $course->id])}}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان دوره</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-username" placeholder="عنوان دوره"
                                                               value="{{$course->title}}"
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
                                                <textarea class="form-control ckeditor" id="editor" rows="3" name="desc"
                                                          placeholder="توضیحات دوره"
                                                          required=""
                                                          data-validation-required-message="">{!! $course->desc !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">خلاصه توضیحات دوره</label>
                                                <input type="text" class="form-control" name="b_desc"
                                                       id="account-username" placeholder="خلاصه توضیحات دوره"
                                                       value="{{$course->b_desc}}"
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
                                                               value="{{$course->price}}"
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
                                                               placeholder="قیمت تخفیف خورده" value="{{$course->price_off}}"
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
                                                        <label for="account-username">قیمت دوره(دلار)</label>
                                                        <input type="text" class="form-control" name="d_price"
                                                               id="account-username" placeholder="قیمت دوره(دلار)"
                                                               value="{{$course->d_price}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت تخفیف خورده(دلار)</label>
                                                        <input type="text" class="form-control" name="d_price_off"
                                                               id="account-username"
                                                               placeholder="قیمت تخفیف خورده(دلار)" value="{{$course->d_price_off}}"
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
                                                               value="{{$course->seo_title}}"
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
                                                               value="{{$course->seo_desc}}"
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
                                                               value="{{$course->c_poster}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دمو دوره</label>
                                                        <input type="text" class="form-control" name="c_demo"
                                                               id="account-username"
                                                               placeholder="دمو دوره" value="{{$course->c_demo}}"
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
                                                               value="{{$course->time}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">وضعیت دوره</label>
                                                        <select name="status" id="category" class="form-control">
                                                            @if(!empty($course->status))
                                                                <option value="{{$course->status}}">{{$course->status}}</option>
                                                            @else
                                                                <option value="در حال برگذاری">در حال برگذاری</option>
                                                                <option value="تکمیل شده">تکمیل شده</option>
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
                                                        <label for="account-username">وضعیت انتشار دوره</label>
                                                        <select name="status_upload" id="status_upload">
                                                            @if(!empty($course->status_upload))
                                                                <option value="{{$course->status_upload}}">{{$course->status_upload}}</option>
                                                            @else
                                                                <option value="منتشر شده">منتشر شده</option>
                                                                <option value="پیش نویس">پیش نویس</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">دسته بندی دوره</label>
                                                        <select name="category_id" id="category" class="form-control">
                                                            <option value="{{$course->category_id}}" selected>{{$course->category_id}}</option>
                                                            @if($cat)
                                                                @foreach($cat as $item)
                                                                    <?php $dash=''; ?>
                                                                    <option value="{{$item->category_name}}" @if($category->parent_id == $item->category_name ) selected @endif>{{$item->category_name}}</option>
                                                                    @if(count($item->subcategory))
                                                                        @include('admin.categories.subCategoryListUpdate',['subcategories' => $item->subcategory])
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
                                                            @if(!empty($course->language))
                                                                <option value="{{$course->language}}">{{$course->language}}</option>
                                                            @else
                                                                <option value="english">انگلیسی</option>
                                                                <option value="spanish">اسپانیایی</option>
                                                                <option value="french">فرانسوی</option>
                                                                <option value="russian">روسی</option>
                                                                <option value="turkish">ترکی</option>
                                                                <option value="chinese">چینی</option>
                                                                <option value="italy">ایتالیایی</option>
                                                                <option value="germany">آلمانی</option>
                                                                <option value="arabic">عربی</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                            بروزرسانی
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
