<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Point Of Sales</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name='csrf-token' content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}">

        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            #preloader {
                position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url({{asset('Preloader_2.gif')}}) center no-repeat #fff;
            }
        </style>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
        </div>

        <!-- Begin page -->
        <div id="app">

            <!-- ========== Left Sidebar Start ========== -->
            <app></app>

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/modernizr.min.js')}}"></script>
        <script src="{{asset('/js/detect.js')}}"></script>
        <script src="{{asset('/js/fastclick.js')}}"></script>
        <script src="{{asset('/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/js/waves.js')}}"></script>
        <script src="{{asset('/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('plugins/alertify/js/alertify.js')}}"></script>
        <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

        <!-- App js -->
        <script src="{{mix('/js/app.js')}}"></script>
        <script src="{{asset('/js/app_template.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            $(window).load(function() {
		// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
			});
        </script>

    </body>
</html>