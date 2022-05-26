@extends('admin.layout.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                           href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            اطلاعات اولیه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                           href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            اطلاعات پرداخت
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                           href="#account-vertical-info" aria-expanded="false">
                            <i class="feather icon-info mr-50 font-medium-3"></i>
                            اطلاعات سئو
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                           href="#account-vertical-social" aria-expanded="false">
                            <i class="feather icon-camera mr-50 font-medium-3"></i>
                            فایل ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill"
                           href="#account-vertical-connections" aria-expanded="false">
                            <i class="feather icon-feather mr-50 font-medium-3"></i>
                            اتصالات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
                           href="#account-vertical-notifications" aria-expanded="false">
                            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                            اطلاعات تکمیلی
                        </a>
                    </li>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                {{--General--}}
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                     aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate="" action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">نام</label>
                                                                <input type="text" class="form-control" name="fname"
                                                                       id="account-username" placeholder="نام" value=""
                                                                       required="" data-validation-required-message="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">نام</label>
                                                                <input type="text" class="form-control" name="fname"
                                                                       id="account-username" placeholder="نام" value=""
                                                                       required="" data-validation-required-message="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">نام</label>
                                                        <input type="text" class="form-control" name="fname"
                                                               id="account-username" placeholder="نام" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">نام</label>
                                                        <input type="text" class="form-control" name="fname"
                                                               id="account-username" placeholder="نام" value=""
                                                               required="" data-validation-required-message="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Password--}}
                                <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                     aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form novalidate="" action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">گذرواژه کنونی</label>
                                                        <input type="password" name="oldpassword" class="form-control"
                                                               id="account-old-password" required=""
                                                               placeholder="گذرواژه کنونی"
                                                               data-validation-required-message="This old password field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">گذرواژه جدید</label>
                                                        <input type="password" name="password" id="account-new-password"
                                                               class="form-control" placeholder="گذرواژه جدید"
                                                               required=""
                                                               data-validation-required-message="The password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">تایید گذرواژه
                                                            جدید</label>
                                                        <input type="password" name="password_confirmation"
                                                               class="form-control" required=""
                                                               id="account-retype-new-password"
                                                               data-validation-match-match="password"
                                                               placeholder="تایید گذرواژه جدید"
                                                               data-validation-required-message="The Confirm password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Info--}}
                                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                     aria-labelledby="account-pill-info" aria-expanded="false">
                                    <form novalidate="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="accountTextarea">Bio</label>
                                                    <textarea class="form-control" id="accountTextarea" rows="3"
                                                              placeholder="Your Bio data here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-birth-date">Birth date</label>
                                                        <input type="text"
                                                               class="form-control birthdate-picker picker__input"
                                                               required="" placeholder="Birth date"
                                                               id="account-birth-date"
                                                               data-validation-required-message="This birthdate field is required"
                                                               readonly="" aria-haspopup="true" aria-readonly="false"
                                                               aria-owns="account-birth-date_root">
                                                        <div class="picker" id="account-birth-date_root"
                                                             aria-hidden="true">
                                                            <div class="picker__holder" tabindex="-1">
                                                                <div class="picker__frame">
                                                                    <div class="picker__wrap">
                                                                        <div class="picker__box">
                                                                            <div class="picker__header">
                                                                                <div class="picker__month">May</div>
                                                                                <div class="picker__year">2022</div>
                                                                                <div class="picker__nav--prev"
                                                                                     data-nav="-1" tabindex="0"
                                                                                     role="button"
                                                                                     aria-controls="account-birth-date_table"
                                                                                     title="Previous month"></div>
                                                                                <div class="picker__nav--next"
                                                                                     data-nav="1" tabindex="0"
                                                                                     role="button"
                                                                                     aria-controls="account-birth-date_table"
                                                                                     title="Next month"></div>
                                                                            </div>
                                                                            <table class="picker__table"
                                                                                   id="account-birth-date_table"
                                                                                   role="grid"
                                                                                   aria-controls="account-birth-date"
                                                                                   aria-readonly="true">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Sunday">Sun
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Monday">Mon
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Tuesday">Tue
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Wednesday">
                                                                                        Wed
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Thursday">Thu
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Friday">Fri
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Saturday">Sat
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651347000000"
                                                                                            id="account-birth-date_1651347000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 1, 2022">1
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651433400000"
                                                                                            id="account-birth-date_1651433400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 2, 2022">2
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651519800000"
                                                                                            id="account-birth-date_1651519800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 3, 2022">3
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651606200000"
                                                                                            id="account-birth-date_1651606200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 4, 2022">4
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651692600000"
                                                                                            id="account-birth-date_1651692600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 5, 2022">5
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651779000000"
                                                                                            id="account-birth-date_1651779000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 6, 2022">6
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651865400000"
                                                                                            id="account-birth-date_1651865400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 7, 2022">7
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651951800000"
                                                                                            id="account-birth-date_1651951800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 8, 2022">8
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                            data-pick="1652038200000"
                                                                                            id="account-birth-date_1652038200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 9, 2022"
                                                                                            aria-activedescendant="1652038200000">
                                                                                            9
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652124600000"
                                                                                            id="account-birth-date_1652124600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 10, 2022">
                                                                                            10
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652211000000"
                                                                                            id="account-birth-date_1652211000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 11, 2022">
                                                                                            11
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652297400000"
                                                                                            id="account-birth-date_1652297400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 12, 2022">
                                                                                            12
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652383800000"
                                                                                            id="account-birth-date_1652383800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 13, 2022">
                                                                                            13
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652470200000"
                                                                                            id="account-birth-date_1652470200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 14, 2022">
                                                                                            14
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652556600000"
                                                                                            id="account-birth-date_1652556600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 15, 2022">
                                                                                            15
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652643000000"
                                                                                            id="account-birth-date_1652643000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 16, 2022">
                                                                                            16
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652729400000"
                                                                                            id="account-birth-date_1652729400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 17, 2022">
                                                                                            17
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652815800000"
                                                                                            id="account-birth-date_1652815800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 18, 2022">
                                                                                            18
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652902200000"
                                                                                            id="account-birth-date_1652902200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 19, 2022">
                                                                                            19
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1652988600000"
                                                                                            id="account-birth-date_1652988600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 20, 2022">
                                                                                            20
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653075000000"
                                                                                            id="account-birth-date_1653075000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 21, 2022">
                                                                                            21
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653161400000"
                                                                                            id="account-birth-date_1653161400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 22, 2022">
                                                                                            22
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653247800000"
                                                                                            id="account-birth-date_1653247800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 23, 2022">
                                                                                            23
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653334200000"
                                                                                            id="account-birth-date_1653334200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 24, 2022">
                                                                                            24
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653420600000"
                                                                                            id="account-birth-date_1653420600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 25, 2022">
                                                                                            25
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653507000000"
                                                                                            id="account-birth-date_1653507000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 26, 2022">
                                                                                            26
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653593400000"
                                                                                            id="account-birth-date_1653593400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 27, 2022">
                                                                                            27
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653679800000"
                                                                                            id="account-birth-date_1653679800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 28, 2022">
                                                                                            28
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653766200000"
                                                                                            id="account-birth-date_1653766200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 29, 2022">
                                                                                            29
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653852600000"
                                                                                            id="account-birth-date_1653852600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 30, 2022">
                                                                                            30
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1653939000000"
                                                                                            id="account-birth-date_1653939000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 31, 2022">
                                                                                            31
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654025400000"
                                                                                            id="account-birth-date_1654025400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 1, 2022">1
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654111800000"
                                                                                            id="account-birth-date_1654111800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 2, 2022">2
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654198200000"
                                                                                            id="account-birth-date_1654198200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 3, 2022">3
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654284600000"
                                                                                            id="account-birth-date_1654284600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 4, 2022">4
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654371000000"
                                                                                            id="account-birth-date_1654371000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 5, 2022">5
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654457400000"
                                                                                            id="account-birth-date_1654457400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 6, 2022">6
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654543800000"
                                                                                            id="account-birth-date_1654543800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 7, 2022">7
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654630200000"
                                                                                            id="account-birth-date_1654630200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 8, 2022">8
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654716600000"
                                                                                            id="account-birth-date_1654716600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 9, 2022">9
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654803000000"
                                                                                            id="account-birth-date_1654803000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 10, 2022">
                                                                                            10
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1654889400000"
                                                                                            id="account-birth-date_1654889400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="June, 11, 2022">
                                                                                            11
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="picker__footer">
                                                                                <button class="picker__button--today"
                                                                                        type="button"
                                                                                        data-pick="1652038200000"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Today
                                                                                </button>
                                                                                <button class="picker__button--clear"
                                                                                        type="button" data-clear="1"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Clear
                                                                                </button>
                                                                                <button class="picker__button--close"
                                                                                        type="button" data-close="true"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Close
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="accountSelect">Country</label>
                                                    <select class="form-control" id="accountSelect">
                                                        <option>USA</option>
                                                        <option>India</option>
                                                        <option>Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="languageselect2">Languages</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="languageselect2" multiple=""
                                                            data-select2-id="languageselect2" tabindex="-1"
                                                            aria-hidden="true">
                                                        <option value="English" selected="" data-select2-id="2">
                                                            English
                                                        </option>
                                                        <option value="Spanish">Spanish</option>
                                                        <option value="French">French</option>
                                                        <option value="Russian">Russian</option>
                                                        <option value="German">German</option>
                                                        <option value="Arabic" selected="" data-select2-id="3">Arabic
                                                        </option>
                                                        <option value="Sanskrit">Sanskrit</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice"
                                                                        title="English" data-select2-id="4"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>English</li><li
                                                                        class="select2-selection__choice" title="Arabic"
                                                                        data-select2-id="5"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Arabic</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-phone">Phone</label>
                                                        <input type="text" class="form-control" id="account-phone"
                                                               required="" placeholder="Phone number"
                                                               value="(+656) 254 2568"
                                                               data-validation-required-message="This phone number field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-website">Website</label>
                                                    <input type="text" class="form-control" id="account-website"
                                                           placeholder="Website address">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="musicselect2">Favourite Music</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="musicselect2" multiple="" data-select2-id="musicselect2"
                                                            tabindex="-1" aria-hidden="true">
                                                        <option value="Rock">Rock</option>
                                                        <option value="Jazz" selected="" data-select2-id="7">Jazz
                                                        </option>
                                                        <option value="Disco">Disco</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="Techno">Techno</option>
                                                        <option value="Folk" selected="" data-select2-id="8">Folk
                                                        </option>
                                                        <option value="Hip hop">Hip hop</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="6" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice" title="Jazz"
                                                                        data-select2-id="9"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Jazz</li><li
                                                                        class="select2-selection__choice" title="Folk"
                                                                        data-select2-id="10"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Folk</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="moviesselect2">Favourite movies</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="moviesselect2" multiple=""
                                                            data-select2-id="moviesselect2" tabindex="-1"
                                                            aria-hidden="true">
                                                        <option value="The Dark Knight" selected=""
                                                                data-select2-id="12">The Dark Knight
                                                        </option>
                                                        <option value="Harry Potter" selected="" data-select2-id="13">
                                                            Harry Potter
                                                        </option>
                                                        <option value="Airplane!">Airplane!</option>
                                                        <option value="Perl Harbour">Perl Harbour</option>
                                                        <option value="Spider Man">Spider Man</option>
                                                        <option value="Iron Man" selected="" data-select2-id="14">Iron
                                                            Man
                                                        </option>
                                                        <option value="Avatar">Avatar</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="11" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice" title="The Dark Knight
                                                                    " data-select2-id="15"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>The Dark Knight
                                                                    </li><li class="select2-selection__choice"
                                                                             title="Harry Potter"
                                                                             data-select2-id="16"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Harry Potter</li><li
                                                                        class="select2-selection__choice"
                                                                        title="Iron Man" data-select2-id="17"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Iron Man</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    Save
                                                    changes
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Social--}}
                                <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                     aria-labelledby="account-pill-social" aria-expanded="false">
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-twitter">Twitter</label>
                                                    <input type="text" id="account-twitter" class="form-control"
                                                           placeholder="Add link" value="https://www.twitter.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">Facebook</label>
                                                    <input type="text" id="account-facebook" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-google">Google+</label>
                                                    <input type="text" id="account-google" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-linkedin">LinkedIn</label>
                                                    <input type="text" id="account-linkedin" class="form-control"
                                                           placeholder="Add link" value="https://www.linkedin.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-instagram">Instagram</label>
                                                    <input type="text" id="account-instagram" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-quora">Quora</label>
                                                    <input type="text" id="account-quora" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    Save
                                                    changes
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{--Connections--}}
                                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                     aria-labelledby="account-pill-connections" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <a href="javascript: void(0);"
                                               class="btn btn-info waves-effect waves-light">Connect to
                                                <strong>Twitter</strong></a>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <button
                                                class=" btn btn-sm btn-secondary float-right waves-effect waves-light">
                                                edit
                                            </button>
                                            <h6>You are connected to facebook.</h6>
                                            <span>Johndoe@gmail.com</span>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <a href="javascript: void(0);"
                                               class="btn btn-danger waves-effect waves-light">Connect to
                                                <strong>Google</strong>
                                            </a>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <button
                                                class=" btn btn-sm btn-secondary float-right waves-effect waves-light">
                                                edit
                                            </button>
                                            <h6>You are connected to Instagram.</h6>
                                            <span>Johndoe@gmail.com</span>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                Save
                                                changes
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-outline-warning waves-effect waves-light">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{--Notification--}}
                                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                     aria-labelledby="account-pill-notifications" aria-expanded="false">
                                    <div class="row">
                                        <h6 class="m-1">Activity</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch1">
                                                <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                                <span class="switch-label w-100">Email me when someone comments
                                                                onmy
                                                                article</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch2">
                                                <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                                <span class="switch-label w-100">Email me when someone answers on
                                                                my
                                                                form</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                                <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                                <span class="switch-label w-100">Email me hen someone follows
                                                                me</span>
                                            </div>
                                        </div>
                                        <h6 class="m-1">Application</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch4">
                                                <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                                <span class="switch-label w-100">News and announcements</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                                <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                                <span class="switch-label w-100">Weekly product updates</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch6">
                                                <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                                <span class="switch-label w-100">Weekly blog digest</span>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                Save
                                                changes
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-outline-warning waves-effect waves-light">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
