@extends('dashboard.layout.app')
@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12">

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش درس</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Row -->

        <form action="{{route('updateLesson',['id' => $lesson->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard_container">
                        <div class="dashboard_container_header">
                            <div class="dashboard_fl_1">
                                <h4>ویرایش درس</h4>
                            </div>
                        </div>
                        <div class="dashboard_container_body p-4">
                            <!-- Basic info -->
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>عنوان</label>
                                        <input type="text" class="form-control" value="{{$lesson->title}}" name="title" placeholder="عنوان" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>فایل درس</label>
                                        <input type="file" name="l_file" class="form-control" placeholder="فایل درس">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>ویدیو درس</label>
                                        <input type="file" name="l_video" class="form-control" placeholder="ویدیو درس">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>انتخاب دوره</label>
                                        <select name="l_course" id="l_course" class="form-control">
                                            @php $course = \App\Models\Course::all(); @endphp
                                            @foreach($course as $courses)
                                                <option value="{{$courses->title}}">{{$courses->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>فصل</label>
                                        <select name="season" id="l_course" class="form-control">
                                            @php $season = \App\Models\Season::all(); @endphp
                                            @foreach($season as $seasons)
                                                <option value="{{$seasons->title}}">{{$seasons->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input id="a-1" class="checkbox-custom" name="l_free" type="checkbox" {{($lesson->l_free == 'on') ? 'checked' : null}}>
                                        <label for="a-1" class="checkbox-custom-label">رایگان</label>
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
