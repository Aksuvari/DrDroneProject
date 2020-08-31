<!--
<link rel="shortcut icon" href="{{asset('Frontend/assets/images/favicon.ico')}}">
<link href="{{asset('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Frontend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css"> -->
<meta name="_token" content="{{csrf_token()}}" />
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->

            <div class="logo">
                <a href="homepage" class="logo">
                    <img src="{{asset('Frontend/assets/images/logo-sm.png')}}" alt="" class="logo-small">
                    <img src="{{asset('Frontend/assets/images/logo.png')}}" alt="" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <ul class="float-right list-unstyled mb-0 ">

                    <li class="dropdown notification-list d-none d-sm-block">
                        <ul class="navigation-menu ">
                            <li class="has-submenu ">
                                <a href="#"><i class="ti-menu-alt"></i>Projeler </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('projectAdd')}}">Proje Ekleme</a>
                                    </li>
                                    <li>
                                        <a href="{{route('projectList')}}">Proje Listesi</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>

                    <li class="dropdown notification-list">
                        <br>
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <h6 class="text-uppercase mb-3">Kemal Apayadin</h6>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <!--
                                       <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div> -->

                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger"><i class="mdi mdi-power text-danger"></i> Logout</button>
                                </form>

                            </div>
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!--@foreach($current as $item)

            if($item->datetime->formatted_date

    @endforeach -->
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Bugünün Tarihi</h4>
                        <ol class="breadcrumb">
                            <div class="form-group row" id="formapi" >
                                <label for="example-date-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="dateajax"  name="date" type="date" value="2020-08-20" >
                                </div>
                            </div>
                        </ol>
                        <div class="state-information">
                            <div class="state-graph">
                                <div class="col-md-4 col-lg-3"><i class="ion-ios7-thunderstorm"></i> <h6 class="text-uppercase mb-3">
                                        <img src="{{$current['condition']['icon']}}"></h6>
                                </div>
                            </div>

                            <div class="state-graph">
                                <div class="col-md-4 col-lg-3"><i class="ion-ios7-sunny"></i>
                                    <h6 class="text-uppercase mb-3">{{$current['forecast']['humidity']}}</h6>
                                </div>
                            </div>
                            <div class="state-graph">
                                <div class="col-md-4 col-lg-3"><i class="ion-ios7-sunny"></i>
                                    <h6 class="text-uppercase mb-3">{{$current['forecast']['temp']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<!--
<script src="{{asset('Frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('Frontend/assets/js/waves.min.js')}}"></script>

<script src="{{asset('Plugins/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
 -->
<!-- App js -->
<!--
<script src="{{asset('Frontend/assets/js/app.js')}}"></script> -->
