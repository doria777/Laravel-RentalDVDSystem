<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laravel RentalDVDSystem Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/afb0bbb830.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/light-bootstrap-dashboard.css') }}"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}"/>
</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{asset('img/sidebar-5.jpg  ')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{route('dashboard.index')}}" class="simple-text">
                        Laravel RentalDVDSystems
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard.index')}}">
                            <i class="fas fa-chart-pie fa-xs"></i>
                            <p>ダッシュボード</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('film_info_search.index')}}">
                            <i class="fas fa-film fa-xs"></i>
                            <p>映画情報検索</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('customer_info_search.index')}}">
                            <i class="fas fa-users fa-xs"></i>
                            <p>顧客情報検索</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">

                    <a class="navbar-brand" href="{{route('dashboard.index')}}"> ダッシュボード </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fas fa-palette fa-xs"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="fas fa-globe fa-xs"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-search fa-xs"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">映画情報検索結果</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="card strpied-tabled-with-hover">
                                        <div class="card-body table-full-width table-responsive">
                                            <table class="table table-hover table-striped">
                                            <thead>
                                                <th>タイトル</th>
                                                <th>説明</th>
                                                <th>カテゴリ</th>
                                                <th>役者（名）</th>
                                                <th>役者（姓）</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($film_info_search_results as $film_info_search_result)
                                                @if($loop->iteration < 6)
                                                <tr>
                                                <td>{{$film_info_search_result->title}}</td>
                                                <td>{{$film_info_search_result->description}}</td>
                                                <td>{{$film_info_search_result->name}}</td>
                                                <td>{{$film_info_search_result->first_name}}</td>
                                                <td>{{$film_info_search_result->last_name}}</td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">顧客情報検索結果</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="card strpied-tabled-with-hover">
                                        <div class="card-body table-full-width table-responsive">
                                            <table class="table table-hover table-striped">
                                            <thead>
                                                    <th>顧客ID</th>
                                                    <th>顧客（名）</th>
                                                    <th>顧客（姓）</th>
                                                    <th>Eメール</th>
                                                    <th>国</th>
                                                    <th>都市</th>
                                                    <th>住所1</th>
                                                    <th>住所2</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($customer_info_search_results as $customer_info_search_result)
                                                @if($loop->iteration < 6)
                                                <tr>
                                                    <td>{{$customer_info_search_result->customer_id}}</td>
                                                    <td>{{$customer_info_search_result->first_name}}</td>
                                                    <td>{{$customer_info_search_result->last_name}}</td>
                                                    <td>{{$customer_info_search_result->email}}</td>
                                                    <td>{{$customer_info_search_result->country}}</td>
                                                    <td>{{$customer_info_search_result->city}}</td>
                                                    <td>{{$customer_info_search_result->address}}</td>
                                                    <td>{{$customer_info_search_result->address2}}</td>
                                                </tr>
                                                @endif
                                                @endforeach
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
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.0 ') }}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    } ;
</script>

</html>