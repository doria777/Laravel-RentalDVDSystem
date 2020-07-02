@section('sidebar')
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
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard.index')}}">
                            <i class="fas fa-chart-pie fa-xs"></i>
                            <p>ダッシュボード</p>
                        </a>
                    </li> -->
                    <li class="nav-item @if (Request::is('dashboard.index')) active @endif">
                        <a class="nav-link" href="{{route('dashboard.index')}}">
                            <i class="fas fa-chart-pie fa-xs"></i>
                            <p>ダッシュボード</p>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('film_info_search.index')) active @endif">
                        <a class="nav-link" href="{{route('film_info_search.index')}}">
                            <i class="fas fa-film fa-xs"></i>
                            <p>映画情報検索</p>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('customer_info_search.index')) active @endif">
                        <a class="nav-link" href="{{route('customer_info_search.index')}}">
                            <i class="fas fa-users fa-xs"></i>
                            <p>顧客情報検索</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection