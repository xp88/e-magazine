

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản trị trang tin</title>
        {{-- <base href="{{asset('/admin')}}"> --}}

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="{{asset('admin')}}/css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="{{asset('admin')}}/css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap-tour/bootstrap-tour.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="{{asset('admin')}}/css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{asset('admin')}}/js/modernizr/modernizr.min.js"></script>
        @yield('jsscript')

        <!-- ========== DATATABLES ========== -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js" />
        <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.22/dataRender/ellipsis.js" />
        
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

@include('admin/nav')

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    @include('admin/left-sidebar')

                    @yield('main')

                    @include('admin/right-sidebar')

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="{{asset('admin')}}/js/jquery/jquery-2.2.4.min.js"></script>
        <script src="{{asset('admin')}}/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{asset('admin')}}/js/bootstrap/bootstrap.min.js"></script>
        <script src="{{asset('admin')}}/js/pace/pace.min.js"></script>
        <script src="{{asset('admin')}}/js/lobipanel/lobipanel.min.js"></script>
        <script src="{{asset('admin')}}/js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="{{asset('admin')}}/js/prism/prism.js"></script>
        <script src="{{asset('admin')}}/js/waypoint/waypoints.min.js"></script>
        <script src="{{asset('admin')}}/js/counterUp/jquery.counterup.min.js"></script>
        <script src="{{asset('admin')}}/js/amcharts/amcharts.js"></script>
        <script src="{{asset('admin')}}/js/amcharts/serial.js"></script>
        <script src="{{asset('admin')}}/js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="{{asset('admin')}}/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="{{asset('admin')}}/js/amcharts/themes/light.js"></script>
        <script src="{{asset('admin')}}/js/toastr/toastr.min.js"></script>
        <script src="{{asset('admin')}}/js/icheck/icheck.min.js"></script>
        <script src="{{asset('admin')}}/js/bootstrap-tour/bootstrap-tour.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="{{asset('admin')}}/js/main.js"></script>
        <script src="{{asset('admin')}}/js/production-chart.js"></script>
        <script src="{{asset('admin')}}/js/traffic-chart.js"></script>
        <script src="{{asset('admin')}}/js/task-list.js"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
        
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3500",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                // toastr["success"]("One stop solution to your website admin panel!", "Welcome to Options!");


            $('#table_tin').DataTable( {
                "sScrollX": "100%",
    "bScrollCollapse": true
    
} );


            
            });

           
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
