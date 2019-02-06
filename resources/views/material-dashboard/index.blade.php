<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    @include('material-dashboard.css')
</head>
<body>
    <div class="wrapper ">
        @include('material-dashboard.sidebar')
        <div class="main-panel">
            @include('material-dashboard.navbar')
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('material-dashboard.footer')
        </div>
    </div>
    @include('material-dashboard.scripts')
    @yield('scripts')
</body>
</html>
