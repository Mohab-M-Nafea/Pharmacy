<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.header')
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layout.sidebar')
                @include('layout.top_nav')
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    <i class="@yield('content-title-class', 'fa fa-dashboard')"></i> @yield('content-title', 'Dashboard')
                                </h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        @yield('page-content')
                    </div>
                </div>
            </div>

        </div>
        @include('layout.footer')
    </body>
</html>
