<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin_css/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('admin_css/assets/img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>E-Kitap Satış Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('admin_css/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('admin_css/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/133550a9d3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>
<body>
<div class="wrapper">
  @include("layouts.sidebar")
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('admin.index')}}"> Admin Panel'e Hoş Geldiniz... </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <strong>By Kadir YOLCU</strong>
                </p>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('admin_css/assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin_css/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin_css/assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('admin_css/assets/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('admin_css/assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('admin_css/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin_css/assets/js/bootstrap-notify.js')}}"></script>

<script src="{{asset('admin_css/assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('admin_css/assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</body>
</html>
