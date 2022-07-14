@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <p class="card-title">
                                افزودن کلاس زوم جدید
                            </p>
                        </div>
                        <div class="card-body">
                            <form novalidate="" action="{{route('onlineClass.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">عنوان کلاس</label>
                                                        <input type="text" class="form-control" name="topic"
                                                               id="account-username" placeholder="عنوان کلاس"
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
                                                        <label for="account-username">تاریخ شروع کلاس</label>
                                                        <input type="datetime-local" class="form-control" name="start_time"
                                                               id="account-username" placeholder="تاریخ شروع کلاس"
                                                               value=""
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
                                                               placeholder="مدت زمان کلاس" value=""
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
                                                               value=""
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
                                                               placeholder="گذرواژه ورود به کلاس" value=""
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
                                                        <label for="account-username">پوستر</label>
                                                        <input type="text" class="form-control" name="poster"
                                                               id="account-username" placeholder="پوستر"
                                                               value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت</label>
                                                        <input type="text" class="form-control" name="price"
                                                               id="account-username"
                                                               placeholder="قیمت" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">قیمت (دلار)</label>
                                                        <input type="text" class="form-control" name="d_price"
                                                               id="account-username"
                                                               placeholder="قیمت (دلار)" value=""
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
