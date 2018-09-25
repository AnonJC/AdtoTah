@extends('dashboard::layouts.master');
@section('content')
@include('lgu::partial.mobile-header')
@include('lgu::partial.sidebar')
<div class="page-container">
    @include('lgu::partial.desktop-header')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div class="col-8">
                    <h2 class="title-1"></h2>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="images/restos/ams.jpg" alt="ams">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Am's Chicken House
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
                                <img class="card-img-top" src="images/restos/gina.jpg" alt="tinago">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Gina's Barbeque House
                                        <p><small class="text-muted"></small></p>
                                    </h4>
                                    <p class="card-text">Tinago Falls “hidden” is a waterfall on the Agus River, located in between the town of Linamon and Iligan City, Lanao del Norte in the southern Philippine island of Mindanao.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img-top" src="images/restos/papajims.png" alt="maria-christina">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Papa Jim's
                                        <p><small class="text-muted"></small></p>
                                    </h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img-top" src="images/restos/lailai.jpg" alt="maria-christina">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Lai Lai
                                        <p><small class="text-muted"></small></p>
                                    </h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">top restaurants</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                <tr>
                                    <td>1. Am's Chicken House</td>
                                    <td class="text-muted"><small>70,269 diners</small></td>
                                </tr>
                                <tr>
                                    <td>2. Papa Jim's</td>
                                    <td class="text-muted"><small>50,661 diners</small></td>
                                </tr>
                                <tr>
                                    <td>3. Lai Lai</td>
                                    <td class="text-muted"><small>30,135 diners</small></td>
                                </tr>
                                <tr>
                                    <td>4. Gina's Barbeque House</td>
                                    <td class="text-muted"><small>10,261 diners</small></td>
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