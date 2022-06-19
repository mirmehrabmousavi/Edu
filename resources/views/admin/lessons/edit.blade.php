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
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">شماره درس</label>
                                                        <input type="text" class="form-control" name="number"
                                                               id="account-username" placeholder="شماره درس"
                                                               value="{{$lesson->number}}"
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
                                                          data-validation-required-message="">{{$lesson->desc}}</textarea>
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
                                                               value="{{$lesson->seo_title}}"
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
                                                               value="{{$lesson->seo_desc}}"
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
                                                        <label for="account-username">زمان درس</label>
                                                        <input type="text" class="form-control" name="time"
                                                               id="account-username" placeholder="زمان درس"
                                                               value="{{$lesson->time}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">وضعیت درس</label>
                                                        <input type="text" class="form-control" name="status"
                                                               id="account-username" placeholder="وضعیت درس"
                                                               value="{{$lesson->status}}"
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
                                                        <input type="number" class="form-control" name="season"
                                                               id="account-username"
                                                               placeholder="فصل" value="{{$lesson->season}}"
                                                               required="" data-validation-required-message="">
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
                                                                <option
                                                                    value="{{$courses->title}}">{{$courses->title}}</option>
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
