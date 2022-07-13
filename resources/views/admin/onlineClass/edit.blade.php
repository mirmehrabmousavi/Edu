@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                ویرایش کلاس زوم
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('onlineClass.update',['id' => $onlineClass->id])}}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان کلاس</label>
                                                        <input type="text" class="form-control" name="topic"
                                                               id="account-username" placeholder="عنوان کلاس"
                                                               value="{{$onlineClass->topic}}"
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
                                                        <label for="account-username">تاریخ شروع کلاس</label>
                                                        <input type="datetime-local" class="form-control" name="start_time"
                                                               id="account-username" placeholder="تاریخ شروع کلاس"
                                                               value="{{$onlineClass->start_time}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">مدت زمان کلاس</label>
                                                        <input type="text" class="form-control" name="duration"
                                                               id="account-username"
                                                               placeholder="مدت زمان کلاس" value="{{$onlineClass->duration}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">لینک دعوت به کلاس</label>
                                                        <input type="text" class="form-control" name="join_url"
                                                               id="account-username" placeholder="لینک دعوت به کلاس"
                                                               value="{{$onlineClass->join_url}}"
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">گذرواژه ورود به کلاس</label>
                                                        <input type="text" class="form-control" name="password"
                                                               id="account-username"
                                                               placeholder="گذرواژه ورود به کلاس" value="{{$onlineClass->password}}"
                                                               required="" data-validation-required-message="">
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
