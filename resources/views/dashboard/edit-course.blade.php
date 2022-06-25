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

        <form action="{{route('updateCourse',['id' => $course->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
            @method('patch')
        <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard_container">
                        <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                                <h4>ویرایش دوره</h4>
                            </div>
                        </div>
                        <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>عنوان</label>
                                        <input type="text" value="{{$course->title}}" class="form-control" name="title" placeholder="عنوان" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>توضیحات</label>
                                        <textarea class="form-control" name="desc" placeholder="توضیحات" required>{{$course->desc}}</textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>خلاصه توضیحات</label>
                                        <input type="text" value="{{$course->b_desc}}" class="form-control" name="b_desc" placeholder="خلاصه توضیحات" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت</label>
                                        <input type="text" value="{{$course->price}}" name="price" class="form-control" placeholder="قیمت">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت تخفیف خورده</label>
                                        <input type="text" value="{{$course->price_off}}" name="price_off" class="form-control" placeholder="قیمت تخفیف خورده">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت (دلار)</label>
                                        <input type="text" value="{{$course->d_price}}" name="d_price" class="form-control" placeholder="قیمت (دلار)">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت تخفیف خورده (دلار)</label>
                                        <input type="text" value="{{$course->d_price_off}}" name="d_price_off" class="form-control" placeholder="قیمت تخفیف خورده (دلار)">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>پوستر دوره</label>
                                        <input type="file" name="c_poster" class="form-control" placeholder="پوستر دوره">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>دمو دوره</label>
                                        <input type="file" name="c_demo" class="form-control" placeholder="دمو دوره">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>مدت زمان دوره</label>
                                        <input type="text" value="{{$course->time}}" name="time" class="form-control" placeholder="مدت زمان دوره">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>وضعیت دوره</label>
                                        <select name="status" id="category" class="form-control">
                                            <option value="در حال برگذاری"  {{ $course->status == 'در حال برگذاری' ? 'selected' : '' }}>در حال برگذاری</option>
                                            <option value="تکمیل شده"  {{ $course->status == 'تکمیل شده' ? 'selected' : '' }}>تکمیل شده</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>زبان دوره</label>
                                        <select class="form-control" name="language">
                                            <option value="english" {{ $course->language == 'english' ? 'selected' : '' }}>انگلیسی</option>
                                            <option value="spanish" {{ $course->language == 'spanish' ? 'selected' : '' }}>اسپانیایی</option>
                                            <option value="french" {{ $course->language == 'french' ? 'selected' : '' }}>فرانسوی</option>
                                            <option value="russian" {{ $course->language == 'russian' ? 'selected' : '' }}>روسی</option>
                                            <option value="turkish" {{ $course->language == 'turkish' ? 'selected' : '' }}>ترکی</option>
                                            <option value="chinese" {{ $course->language == 'chinese' ? 'selected' : '' }}>چینی</option>
                                            <option value="italy" {{ $course->language == 'italy' ? 'selected' : '' }}>ایتالیایی</option>
                                            <option value="germany" {{ $course->language == 'germany' ? 'selected' : '' }}>آلمانی</option>
                                            <option value="arabic" {{ $course->language == 'arabic' ? 'selected' : '' }}>عربی</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>دسته بندی دوره</label>
                                        <select name="category_id" id="category" class="form-control">
                                            @if(!empty($cat))
                                                <option value="">بدون دسته بندی</option>
                                                @foreach($cat as $val)
                                                    <?php $dash=''; ?>
                                                    <option value="{{$val->category_name}}" {{ $val->category_name == $val->category_name ? 'selected' : '' }}>{{$val->category_name}}</option>
                                                    @if(count($val->subcategory))
                                                        @include('admin.categories.subCategoryList',['subcategories' => $val->subcategory])
                                                    @endif
                                                @endforeach
                                            @else
                                                <option value="">بدون دسته بندی</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic info -->

                        </div>

                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12">
                    <button class="btn btn-theme" type="submit">بروزرسانی</button>
                </div>
            </div>
            <!-- /Row -->

        </form>

    </div>
@endsection
