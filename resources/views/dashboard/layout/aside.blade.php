<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar">

        <div class="d-user-avater">
            <img src="{{(!empty(auth()->user()->profile)) ? url('upload/admin_images/'.auth()->user()->profile) : url('upload/no-profile.jpg')}}" class="img-fluid avater" alt="">
            <h4>{{(!empty(auth()->user()->fname)) ? auth()->user()->fname . ' ' . auth()->user()->lname : auth()->user()->email}}</h4>
            <span>{{auth()->user()->number}}</span>
        </div>

        <div class="d-navigation">
            <ul id="side-menu">
                @if(auth()->user()->is_seller == 1 || auth()->user()->is_admin === 1)
                    <li class="active"><a href="{{route('home')}}"><i class="ti-user"></i>داشبورد</a></li>
                    <li><a href="{{route('addCourse')}}"><i class="ti-plus"></i>افزودن دوره جدید</a></li>
                    <li><a href="{{route('myCourse')}}"><i class="ti-book"></i>دوره های من</a></li>
                    <li><a href="{{route('addClass')}}"><i class="ti-plus"></i>افزودن کلاس جدید</a></li>
                    <li><a href="{{route('myClass')}}"><i class="ti-book"></i>کلاس های من</a></li>
                    <li><a href="{{route('savedCourse')}}"><i class="ti-heart"></i>دوره های ذخیره شده</a></li>
                    <li><a href="{{route('myTickets')}}"><i class="ti-heart"></i>تیکت ها</a></li>
                    <li><a href="{{route('myPays')}}"><i class="ti-bag"></i>پرداخت ها</a></li>
                    <li><a href="{{route('myAccount')}}"><i class="ti-settings"></i>تنظیمات</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>خروج</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li class="active"><a href="{{route('home')}}"><i class="ti-user"></i>داشبورد</a></li>
                    <li><a href="{{route('savedCourse')}}"><i class="ti-heart"></i>دوره های ذخیره شده</a></li>
                    <li><a href="{{route('myClass')}}"><i class="ti-heart"></i>کلاس های من</a></li>
                    <li><a href="{{route('myTickets')}}"><i class="ti-heart"></i>تیکت ها</a></li>
                    <li><a href="{{route('myPays')}}"><i class="ti-shopping-cart"></i>پرداخت ها</a></li>
                    <li><a href="{{route('myAccount')}}"><i class="ti-settings"></i>تنظیمات</a></li>

                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>خروج</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>

    </div>


</div>
