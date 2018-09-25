@extends('dashboard::layouts.master');
@section('content')
@include('lgu::partial.mobile-header')
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
                <li>
                    <a class="js-arrow" href="{{route('lgu.home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="active">
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
<div class="page-container">
    @include('lgu::partial.desktop-header')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div class="col-8 scrolled">
                    <div class="row">
                        <h2 class="title-1">Waterfalls</h2>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src="images/falls/maria-christina.jpg" alt="maria-christina">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Maria Christina
                                            <p><small class="text-muted"> Maria Cristina Boundary Rd, Iligan City</small></p>
                                        </h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src="images/falls/tinago.jpg" alt="tinago">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Tinago Falls
                                            <p><small class="text-muted"></small></p>
                                        </h4>
                                        <p class="card-text">Tinago Falls “hidden” is a waterfall on the Agus River, located in between the town of Linamon and Iligan City, Lanao del Norte in the southern Philippine island of Mindanao.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title-1">Hangout Place</h2>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src="images/hangouts/paseo.jpg" alt="paseo-de-iligan">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Paseo de Santiago
                                            <p><small class="text-muted">Balite Drive, Brgy. Santaigo, Iligan City</small></p>
                                        </h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src="images/hangouts/pools.jpg" alt="timoga">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Timoga Spring Pools
                                            <p><small class="text-muted"></small></p>
                                        </h4>
                                        <p class="card-text">Tinago Falls “hidden” is a waterfall on the Agus River, located in between the town of Linamon and Iligan City, Lanao del Norte in the southern Philippine island of Mindanao.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">top tourist spots</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                <tr>
                                    <td>1. Maria Christina Falls</td>
                                    <td class="text-muted"><small>70,261 visitors</small></td>
                                </tr>
                                <tr>
                                    <td>2. Paseo de Santiago</td>
                                    <td class="text-muted"><small>46,399 visitors</small></td>
                                </tr>
                                <tr>
                                    <td>3. Timoga Spring Pools</td>
                                    <td class="text-muted"><small>35,364 visitors</small></td>
                                </tr>
                                <tr>
                                    <td>4. Tinago Falls</td>
                                    <td class="text-muted"><small>20,366 visitors</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop