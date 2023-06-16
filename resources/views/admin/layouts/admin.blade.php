<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('_assets/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('_assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    @stack('css')

    <!-- Core JS files -->
    <script src="{{asset('_assets/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('_assets/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('_assets/js/app.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
    <!-- /theme JS files -->
    @stack('js')

</head>

<body>

<!-- Main navbar -->
@include('admin.includes.header')
<!-- /main navbar -->






<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            @include('admin.includes.user-menu')
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">


                    <!-- Layout -->
                    @include('admin.includes.menu')
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content">

                @include('admin.includes.page-header',['title'=>$title ?? ''])

                @yield('content')
                <!-- //content bura -->
            </div>
            <!-- /content area -->


            <!-- Footer -->
            @include('admin.includes.footer')

            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
