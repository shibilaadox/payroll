@extends('layouts.master')
@section('main-content')
    <div class="breadcrumb">
                <h1>Version 3</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li>Version 3</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title m-0">Network Stats</div>
                                    <p class="text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="p-4 rounded d-flex align-items-center bg-primary text-white">
                                                <i class="i-Data-Backup text-32 mr-3"></i>
                                                <div>
                                                    <h4 class="text-18 mb-1 text-white">Backups</h4>
                                                    <span>Total: 32</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="p-4 rounded d-flex align-items-center bg-primary text-white">
                                                <i class="i-Big-Data text-32 mr-3"></i>
                                                <div>
                                                    <h4 class="text-18 mb-1 text-white">Databases</h4>
                                                    <span>Total: 302</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="p-4 border border-light rounded d-flex align-items-center">
                                                <i class="i-Data-Cloud text-32 mr-3"></i>
                                                <div>
                                                    <h4 class="text-18 mb-1">Space used</h4>
                                                    <span>Total: 160GB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="p-4 border border-light rounded d-flex align-items-center">
                                                <i class="i-Data-Download text-32 mr-3"></i>
                                                <div>
                                                    <h4 class="text-18 mb-1">Downloaded</h4>
                                                    <span>Total: 30GB</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-z">
                            <div class="card card-profile-1 mb-4">
                                <div class="card-body text-center">
                                    <div class="avatar box-shadow-2 mb-3">
                                        <img src="{{asset('assets/images/faces/16.jpg')}}" alt="">
                                    </div>
                                    <h5 class="m-0">Jassica Hike</h5>
                                    <p class="mt-0 text-muted">UI/UX Designer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
                                    <button class="btn btn-primary btn-rounded">Contact Jassica</button>
                                    <div class="card-socials-simple mt-4">
                                        <a href="">
                                            <i class="i-Linkedin-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Facebook-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-profile-1 mb-4">
                                <div class="card-body text-center">
                                    <div class="avatar box-shadow-2 mb-3">
                                        <img src="{{asset('assets/images/faces/2.jpg')}}" alt="">
                                    </div>
                                    <h5 class="m-0">James Hike</h5>
                                    <p class="mt-0 text-muted">VR Developer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
                                    <button class="btn btn-primary btn-rounded">Contact James</button>
                                    <div class="card-socials-simple mt-4">
                                        <a href="">
                                            <i class="i-Linkedin-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Facebook-2"></i>
                                        </a>
                                        <a href="">
                                            <i class="i-Twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="card card-ecommerce-3 o-hidden mb-4">
                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="">
                                        <img class="card-img-left" src="{{asset('assets/images/photo-wide-1.jpg')}}" alt="">
                                    </div>
                                    <div class="flex-grow-1 p-4">
                                        <h5 class="m-0">Product featured</h5>
                                        <p class="m-0 text-small text-muted">By ABC Cafe</p>
                                        <p class="m-0">$40 <del>$55</del></p>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt placeat esse tempore debitis.</p>
                                        <div class="actions">
                                            <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary">
                                                <i class="icon i-Add-Cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-ecommerce-3 o-hidden mb-4">
                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="">
                                        <img class="card-img-left" src="{{asset('assets/images/photo-wide-2.jpg')}}" alt="">
                                    </div>
                                    <div class="flex-grow-1 p-4">
                                        <h5 class="m-0">Product featured</h5>
                                        <p class="m-0 text-small text-muted">By Apple</p>
                                        <p class="m-0">$40 <del>$55</del></p>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt placeat esse tempore debitis.</p>
                                        <div class="actions">
                                            <button class="btn btn-sm rounded-circle btn-icon btn-outline-primary">
                                                <i class="icon i-Add-Cart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-long-1.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <div class="text-center pt-4">
                                        <h5 class="card-title mb-2 text-white">Card title</h5>
                                        <div class="separator border-top mb-2"></div>
                                        <p class="text-small font-italic">Last updated 3 mins ago</p>
                                    </div>
                                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                                        <span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>
                                            12 </span>
                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{asset('assets/images/photo-long-2.jpg')}}" alt="Card image">
                                <div class="card-img-overlay">
                                    <div class="text-center pt-4">
                                        <h5 class="card-title mb-2 text-white">Card title</h5>
                                        <div class="separator border-top mb-2"></div>
                                        <p class="text-small font-italic">Last updated 3 mins ago</p>
                                    </div>
                                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                                        <span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>
                                            12 </span>
                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="mb-0 text-muted">Subscription/Registration</h6>
                                    <p class="text-24 font-weight-light mb-1">20/80</p>
                                    <div id="echart1" style="height: 140px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-0 text-muted">Project Running/Completed</h6>
                                    <p class="text-24 font-weight-light mb-1">40/60</p>
                                    <div id="echart2" style="height: 140px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="mb-2">Last 7 days traffic status</h6>
                                    <p class="text-24 font-weight-light mb-1"><i class="i-Up text-success"></i> 15%</p>
                                    <div id="echart3" style="height: 60px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="mb-2">Server failures</h6>
                                    <p class="text-24 font-weight-light mb-1"><i class="i-Down text-danger"></i> 5%</p>
                                    <div id="echart4" style="height: 60px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v3.script.js')}}"></script>

@endsection
