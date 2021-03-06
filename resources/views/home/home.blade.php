@extends('layouts.template')

@section('content')
    <div class="animated fadeInUpShort">
        <div class="card">
            <div class="card-header white">
                <h6> CURRENT STATS </h6>
            </div>
            <div class="card-body p-0">
                <div class="lightSlider" data-item="6" data-item-xl="4" data-item-md="2" data-item-sm="1" data-pause="7000"
                    data-pager="false" data-auto="true" data-loop="true">
                    <div class="p-5 bg-primary text-white">
                        <h5 class="font-weight-normal s-14">Sodium</h5>
                        <span class="s-48 font-weight-lighter text-primary">675</span>
                        <div> Oxygen
                            <span class="text-primary">
                                <i class="icon icon-arrow_downward"></i> 67%</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5 class="font-weight-normal s-14">Iron</h5>
                        <span class="s-48 font-weight-lighter light-green-text">675</span>
                        <div> Carbon
                            <span class="text-light-green">
                                <i class="icon icon-arrow_downward"></i> 67%</span>
                        </div>
                    </div>
                    <div class="p-5 light">
                        <h5 class="font-weight-normal s-14">Helium</h5>
                        <span class="s-48 font-weight-lighter text-primary">300</span>
                        <div> Hydrogen
                            <span class="text-primary">
                                <i class="icon icon-arrow_downward"></i> 67%</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5 class="font-weight-normal s-14">Carbon</h5>
                        <span class="s-48 font-weight-lighter amber-text">700</span>
                        <div> Helium
                            <span class="amber-text">
                                <i class="icon icon-arrow_downward"></i> 67%</span>
                        </div>
                    </div>
                    <div class="p-5 light">
                        <h5 class="font-weight-normal s-14">Oxygen</h5>
                        <span class="s-48 font-weight-lighter text-indigo">411</span>
                        <div> Iron
                            <span class="text-indigo">
                                <i class="icon icon-arrow_downward"></i> 89%</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h5 class="font-weight-normal s-14">Helium</h5>
                        <span class="s-48 font-weight-lighter pink-text">224</span>
                        <div> Sodium
                            <span class="pink-text">
                                <i class="icon icon-arrow_downward"></i> 47%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex row row-eq-height my-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header white">
                        <div class="row justify-content-end">
                            <div class="col">
                                <ul class="nav nav-tabs card-header-tabs nav-material">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="w1-tab1" data-toggle="tab"
                                            href="#v-pills-w1-tab1">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="w1-tab2" data-toggle="tab"
                                            href="#v-pills-w1-tab2">Yesterday</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body no-p">
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInRightShort show active" id="v-pills-w1-tab1" role="tabpanel"
                                aria-labelledby="v-pills-w1-tab1">
                                <div class="row p-3">
                                    <div class="col-md-6">
                                        <div class="jvmap"
                                            data-options='{"map":"usa_en","backgroundColor":null,"color":"#4285f4","hoverOpacity":0.7,"selectedColor":"#36a2eb","enableZoom":true,"showTooltip":true,"values":"sample_data","scaleColors":["#E6F2F0","#149B7E"],"normalizeFunction":"polynomial"}'
                                            style="height:300px;"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body pt-0">
                                            <h6>Top Countries</h6>
                                            <div class="my-3">
                                                <div class="float-right">
                                                    <a href="#" class="btn-fab btn-fab-sm btn-primary r-5">
                                                        <i class="icon-mail-envelope-closed2 p-0"></i>
                                                    </a>
                                                    <a href="#" class="btn-fab btn-fab-sm btn-success r-5">
                                                        <i class="icon-star p-0"></i>
                                                    </a>
                                                </div>
                                                <div class="mr-3 float-left">
                                                    <i class="icon-angle-double-up bg-primary text-center avatar mt-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>United Kingdom</strong>
                                                    </div>
                                                    <small>5000+ Visitor in a month</small>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <small>25% US Visitors</small>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <small>45% UK Visitors</small>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <small>60% Complete</small>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <small>75% Complete</small>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <small>100% Complete</small>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInLeftShort" id="v-pills-w1-tab2" role="tabpanel"
                                aria-labelledby="v-pills-w1-tab2">
                                <div id='calendar'></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-eq-height">
                    <!-- Social Widget Start -->
                    <div class="col-md-4">
                        <div class="card my-3">
                            <div class="card-header white">
                                <strong> SOCIAL MEDIA </strong>
                            </div>
                            <div class="card-body">
                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook mr-3">
                                            <i class="icon-facebook"></i>
                                        </a> Facebook
                                        <span class="float-right mt-2 font-weight-bold">10%</span>
                                    </li>
                                    <li>
                                        <a href="#" class="youtube mr-3">
                                            <i class="icon-youtube"></i>
                                        </a>Youtube
                                        <span class="float-right mt-2 font-weight-bold">20%</span>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter mr-3">
                                            <i class="icon-twitter"></i>
                                        </a>Twitter
                                        <span class="float-right mt-2 font-weight-bold">50%</span>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram mr-3">
                                            <i class="icon-instagram"></i>
                                        </a>Instagram
                                        <span class="float-right mt-2 font-weight-bold">5%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Social Widget End -->
                    <!-- Product Widget Start -->
                    <div class="col-md-4">
                        <div class="card my-3">
                            <div class="card-header white">
                                <strong> Product </strong>
                            </div>
                            <div class="card-body">
                                <!-- Big Heading -->
                                <div class="text-center">
                                    <h3 class="my-3">$25,000</h3>
                                    <i class="icon-angle-double-up yellow avatar avatar-lg"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>
                                            <i class="icon-circle-o text-red mr-2"></i>Sales
                                        </p>
                                        <p>
                                            <i class="icon-circle-o text-green mr-2"></i>Last Month
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <i class="icon-angle-double-down text-red mr-2"></i>1,4,348
                                        </p>
                                        <p>
                                            <i class="icon-angle-double-up text-green mr-2"></i>1,11,5
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Widget End -->
                    <!-- Progress Widget Start -->
                    <div class="col-md-4">
                        <div class="card my-3">
                            <div class="card-header white">
                                <strong> Progress </strong>
                            </div>
                            <div class="card-body pt-0">
                                <div class="my-3">
                                    <small>25% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>45% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;"
                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>60% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>75% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>100% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Widget End -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="white">
                    <div class="card">
                        <div class="card-header bg-primary text-white b-b-light">
                            <div class="row justify-content-end">
                                <div class="col">
                                    <ul id="myTab4" role="tablist"
                                        class="nav nav-tabs card-header-tabs nav-material nav-material-white float-right">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="tab1" data-toggle="tab" href="#v-pills-tab1"
                                                role="tab" aria-controls="tab1" aria-expanded="true"
                                                aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab2" data-toggle="tab" href="#v-pills-tab2" role="tab"
                                                aria-controls="tab2" aria-selected="false">Yesterday</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body no-p">
                            <div class="tab-content">
                                <div class="tab-pane animated fadeIn show active" id="v-pills-tab1" role="tabpanel"
                                    aria-labelledby="v-pills-tab1">
                                    <div class="bg-primary text-white lighten-2">
                                        <div class="pt-5 pb-2 pl-5 pr-5">
                                            <h5 class="font-weight-normal s-14">Today's Income</h5>
                                            <span class="s-48 font-weight-lighter text-primary">
                                                <small>$</small>960</span>
                                            <div class="float-right">
                                                <span class="icon icon-money-bag s-48"></span>
                                            </div>
                                        </div>
                                        <canvas width="378" height="94" data-chart="spark" data-chart-type="line"
                                            data-dataset="[[28,530,200,430]]" data-labels="['a','b','c','d']"
                                            data-dataset-options="[
                                                            { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                            ]">
                                        </canvas>
                                    </div>
                                    <div class="slimScroll b-b" data-height="385">
                                        <div class="table-responsive">
                                            <table class="table table-hover earning-box">
                                                <thead class="no-b">
                                                    <tr>
                                                        <th colspan="2">Client Name</th>
                                                        <th>Item Purchased</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="{{ asset('template/assets') }}/img/dummy/u6.png"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing
                                                                Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="{{ asset('template/assets') }}/img/dummy/u5.png"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing
                                                                Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="{{ asset('template/assets') }}/img/dummy/u4.png"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing
                                                                Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="{{ asset('template/assets') }}/img/dummy/u3.png"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing
                                                                Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="{{ asset('template/assets') }}/img/dummy/u2.png"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing
                                                                Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane animated fadeIn" id="v-pills-tab2" role="tabpanel"
                                    aria-labelledby="v-pills-tab2">
                                    <div class="bg-primary text-white lighten-2">
                                        <div class="pt-5 pb-2 pl-5 pr-5">
                                            <h5 class="font-weight-normal s-14">Yesterday's Income</h5>
                                            <span class="s-48 font-weight-lighter text-primary">
                                                <small>$</small>1100</span>
                                            <div class="float-right">
                                                <span class="icon icon-money-bag s-48"></span>
                                            </div>
                                        </div>
                                        <canvas width="378" height="94" data-chart="spark" data-chart-type="line"
                                            data-dataset="[[620,20,700,50]]" data-labels="['a','b','c','d']"
                                            data-dataset-options="[
                                                            { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                            ]">
                                        </canvas>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover earning-box">
                                            <thead class="no-b">
                                                <tr>
                                                    <th colspan="2">Client Name</th>
                                                    <th>Item Purchased</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="w-10">
                                                        <span class="round">
                                                            <img src="{{ asset('template/assets') }}/img/dummy/u1.png"
                                                                alt="user">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                                        <span class="round">
                                                            <img src="{{ asset('template/assets') }}/img/dummy/u2.png"
                                                                alt="user">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                                        <span class="round">
                                                            <img src="{{ asset('template/assets') }}/img/dummy/u3.png"
                                                                alt="user">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                                        <span class="round">
                                                            <img src="{{ asset('template/assets') }}/img/dummy/u4.png"
                                                                alt="user">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-10">
                                                        <span class="round">
                                                            <img src="{{ asset('template/assets') }}/img/dummy/u5.png"
                                                                alt="user">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <h6>Sara Kamzoon</h6>
                                                        <small class="text-muted">Marketing Manager</small>
                                                    </td>
                                                    <td>25</td>
                                                    <td>$250</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card mb-3">
                    <div class="card-header white">
                        <h6>LATEST COMMENTS</h6>
                    </div>
                    <div class="card-body slimScroll" data-height="500">
                        <div class="media p-3 b-b">
                            <img class="mr-3 mt-1 w-40px" src="{{ asset('template/assets') }}/img/dummy/u4.png"
                                alt="user">
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                        <div class="media p-3">
                            <img class="mr-3 w-40px" src="{{ asset('template/assets') }}/img/dummy/u1.png" alt="user">
                            <div class="media-body">
                                <h6 class="mt-0">Sara Kamzoon</h6>
                                vestibulum in vulputate at, tempus viverra turpis.
                                <div class="media p-2 my-3 bg-light r-5">
                                    <a class="pr-3" href="#">
                                        <img class="mt-1 w-40px" src="{{ asset('template/assets') }}/img/dummy/u2.png"
                                            alt="user">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Joe Doe</h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                        scelerisque ante sollicitudin.
                                    </div>
                                </div>
                                <div class="media p-2 my-3 r-5">
                                    <a class="pr-3" href="#">
                                        <img class="mt-1 w-40px" src="{{ asset('template/assets') }}/img/dummy/u3.png"
                                            alt="user">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Find Doe
                                            <span class="badge r-3 badge-primary pt-1 pb-1">Moderator</span>
                                        </h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                        scelerisque ante sollicitudin.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media p-3 r-5 yellow lighten-5">
                            <img class="mr-3 mt-1 w-40px" src="{{ asset('template/assets') }}/img/dummy/u6.png"
                                alt="user">
                            <div class="media-body">
                                <span class="badge r-3 badge-warning pt-1 pb-1 float-right">Reported</span>
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                        <div class="media p-3">
                            <img class="mr-3 mt-1 w-40px" src="{{ asset('template/assets') }}/img/dummy/u5.png"
                                alt="user">
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro </h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card mb-3">
                    <div class="card-header white">NEW ORDERS</div>
                    <div class="card-body slimScroll" data-height="500">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="no-b">
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s1.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-success">Delivered</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s2.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-success">Delivered</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s3.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-danger">Pending</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s4.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-success">Delivered</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s5.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-primary">Sold Out</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{ asset('template/assets') }}/img/demo/shop/s6.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge badge-warning">Low Stock</span>
                                        </td>
                                        <td>
                                            <span>
                                                <i class="icon icon-data_usage"></i> 5 days ago</span>
                                            <br>
                                            <span>
                                                <i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
