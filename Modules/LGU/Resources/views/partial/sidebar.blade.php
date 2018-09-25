<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('lgu.home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    {{--<ul class="list-unstyled navbar__sub-list js-sub-list">--}}
                    {{--<li>--}}
                    {{--<a href="index.html">Dashboard 1</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="index2.html">Dashboard 2</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="index3.html">Dashboard 3</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="index4.html">Dashboard 4</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                </li>
                <li>
                    <a href="{{route('lgu.spots')}}">
                        <i class="fas fa-chart-bar"></i>Tourist Spots</a>
                </li>
                <li>
                    <a href="{{route('lgu.restos')}}">
                        <i class="fas fa-home"></i>Restaurants</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Events</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->