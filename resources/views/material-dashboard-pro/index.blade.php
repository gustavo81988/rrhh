<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material-dashboard-pro/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('material-dashboard-pro/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    @include('material-dashboard-pro.css')
</head>
<body>
    <div class="wrapper ">
        @include('material-dashboard-pro.sidebar')
        <div class="main-panel">
            @include('material-dashboard-pro.navbar')
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('material-dashboard-pro.footer')
        </div>
    </div>
    @include('material-dashboard-pro.scripts')
    @yield('scripts')
</body>
</html>
