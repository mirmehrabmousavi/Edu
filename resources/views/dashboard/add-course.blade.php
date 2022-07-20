 required@extends('dashboard.layout.app')
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

        <form action="{{route('storeCourse')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard_container">
                        <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                                <h4>افزودن دوره جدید</h4>
                            </div>
                        </div>
                        <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>عنوان</label>
                                        <input type="text" class="form-control" name="title" placeholder="عنوان" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>توضیحات</label>
                                        <textarea class="form-control" name="desc" placeholder="توضیحات" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>توضیحات</label>
                                        <input class="form-control" name="b_desc" placeholder="خلاصه توضیحات" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت</label>
                                        <input type="text" name="price" class="form-control" placeholder="قیمت" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت تخفیف خورده</label>
                                        <input type="text" name="price_off" class="form-control" placeholder="قیمت تخفیف خورده" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت (دلار)</label>
                                        <input type="text" name="d_price" class="form-control" placeholder="قیمت (دلار)" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>قیمت تخفیف خورده (دلار)</label>
                                        <input type="text" name="d_price_off" class="form-control" placeholder="قیمت تخفیف خورده (دلار)" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>پوستر دوره</label>
                                        <input type="file" name="c_poster" class="form-control" placeholder="پوستر دوره" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>دمو دوره</label>
                                        <input type="file" name="c_demo" class="form-control" placeholder="دمو دوره" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>مدت زمان دوره</label>
                                        <input type="text" name="time" class="form-control" placeholder="مدت زمان دوره" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>وضعیت دوره</label>
                                        <input type="text" name="status" class="form-control" placeholder="وضعیت دوره" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>زبان دوره</label>
                                        <select class="form-control" name="language">
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

                                    <div class="form-group col-md-6">
                                        <label>دسته بندی دوره</label>
                                        <select name="category_id" id="category" class="form-control">
                                            @if(!empty($cat))
                                                <option value="">بدون دسته بندی</option>
                                                @foreach($cat as $category)
                                                    <?php $dash=''; ?>
                                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                    @if(count($category->subcategory))
                                                        @include('admin.categories.subCategoryList',['subcategories' => $category->subcategory])
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
                    <button class="btn btn-theme" type="submit">ذخیره</button>
                </div>
            </div>
            <!-- /Row -->

        </form>

    </div>
@endsection
