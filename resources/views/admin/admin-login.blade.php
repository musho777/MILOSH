<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:06:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Adminor-Bootstrap HTML Admin Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin dashboard,admin dashboard template,admin panel template,admin template,bootstrap 4 dashboard,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap dashboard,bootstrap dashboard template,dashboard design template,dashboard html,dashboard template,html admin template,html dashboard template">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}" />

    <!-- Title -->
    <title>adminor – Clean & Modern Responsive Bootstrap 4 admin dashboard HTML5 Template.</title>
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}">

    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="{{asset('assets/plugins/toggle-sidebar/sidemenu-dark.css')}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{asset('assets/css/left-menu-dark.css')}}" rel="stylesheet" />

    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />


    <!-- Custom scroll bar css-->
    <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!---Font icons-->
    <link href="{{asset('assets/css/icons.css" rel="stylesheet')}}" />


    <!---Switcher css-->
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/switcher/demo.css" rel="stylesheet')}}" />
</head>

<body class="login-img">
<div id="global-loader" ></div>
<div class="page h-100">
    <div class="page-single">
        <div class="container">
            <div class="row authentication">
                <div class="col-lg-5 col-xl-4 col-md-6 d-block col-login mx-auto">
                    <div class="text-center mb-6">
                        <img src="{{asset('assets/images/brand/logo.png')}}" class="h-8" alt="">
                    </div>
                    <form class="card" action="{{route('checkAdminLogin')}}" method="post">
                        @csrf
                        <div class="card-body p-6 ">
                            <div class="card-title text-center">Login to your Account</div>
                            <div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">

                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

@include('admin.layouts.scripts')
</body>

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:06:33 GMT -->
</html>
