@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
ویرایش درس
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('admin.updateLesson',['id' => $lesson->id])}}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان درس</label>
                                                        <input type="text" class="form-control" name="title"
                                                               id="account-username" placeholder="عنوان درس"
                                                               value="{{$lesson->title}}"
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
                                                        <label for="account-username">فایل درس</label>
                                                        <input type="text" class="form-control" name="l_file"
                                                               id="account-username" placeholder="فایل درس"
                                                               value="{{$lesson->l_file}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">ویدیو درس</label>
                                                        <input type="text" class="form-control" name="l_video"
                                                               id="account-username"
                                                               placeholder="ویدیو درس" value="{{$lesson->l_video}}"
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
                                                        <label for="account-username">فصل</label>
                                                        <select name="season" class="form-control">
                                                            @php $season = \App\Models\Season::all(); @endphp
                                                            @foreach($season as $seasons)
                                                                <option value="{{$seasons->title}}">{{$seasons->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">انتخاب دوره</label>
                                                        <select name="l_course" id="l_course" class="form-control">
                                                            @php $course = \App\Models\Course::all(); @endphp
                                                            @foreach($course as $courses)
                                                                <option value="{{$courses->title}}">{{$courses->title}}</option>
                                                            @endforeach
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
                                                        <label for="account-username">رایگان</label>
                                                        <div
                                                            class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   name="l_free" id="customSwitch4" {{($lesson->l_free == 'on') ? 'checked' : null}}>
                                                            <label class="custom-control-label"
                                                                   for="customSwitch4"></label>
                                                        </div>
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
