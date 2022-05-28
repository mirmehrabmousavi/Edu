<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    {{--<div class="brand-logo"></div>--}}
                    <h2 class="brand-text mb-0">مدیریت</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('admin.home')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">داشبورد</span>
                </a>
               {{-- <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{route('admin.indexCourse')}}"><i class="feather icon-circle"></i><span class="menu-item">دوره ها</span></a></li>
                    <li class="is-shown"><a href="{{route('admin.createCourse')}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن دوره</span></a></li>
                </ul>--}}
            </li>
            <li class=" nav-item"><a href="{{route('admin.indexCourse')}}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">دوره ها</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{route('admin.indexCourse')}}"><i class="feather icon-circle"></i><span class="menu-item">دوره ها</span></a></li>
                    <li class="is-shown"><a href="{{route('admin.createCourse')}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن دوره</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('admin.indexLesson')}}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">درس ها</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{route('admin.createLesson')}}"><i class="feather icon-circle"></i><span class="menu-item">درس ها</span></a></li>
                    <li class="is-shown"><a href="{{route('admin.createLesson')}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن درس</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('admin.indexCategory')}}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">دسته بندی</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{route('admin.indexCategory')}}"><i class="feather icon-circle"></i><span class="menu-item">دسته بندی ها</span></a></li>
                    <li class="is-shown"><a href="{{route('admin.createCategory')}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن دسته بندی</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{--{{route('admin.indexCategory')}}--}}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">کاربران</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{--{{route('admin.indexCategory')}}--}}"><i class="feather icon-circle"></i><span class="menu-item">کاربران</span></a></li>
                    <li class="is-shown"><a href="{{--{{route('admin.createCategory')}}--}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن کاربر</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{--{{route('admin.indexCategory')}}--}}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">تیکت ها</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="is-shown"><a href="{{--{{route('admin.indexCategory')}}--}}"><i class="feather icon-circle"></i><span class="menu-item">تیکت ها</span></a></li>
                    <li class="is-shown"><a href="{{--{{route('admin.createCategory')}}--}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن تیکت</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('admin.settings')}}">
                    <i class="feather icon-settings"></i>
                    <span class="menu-title">تنطیمات</span>
                    <span class="badge badge badge-warning badge-pill float-right mr-2">2</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
