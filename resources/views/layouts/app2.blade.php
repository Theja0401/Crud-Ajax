<head>
    <meta charset="utf-8" />
    <title>Admin | Company Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.min.css">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    {{-- dropify --}}
    <link href="{{asset('/libs/dropify/dropify.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

    {{-- datatables --}}
    <link href="{{asset('/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    {{-- sweet alert --}}
    <link href="{{asset('/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- select2 --}}
    <link href="{{asset('/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-dark text-center">
                    <span class="logo-lg">
                        <img src="{{asset('/images/logo.png')}}" alt="" class="mt-3" height="50">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>
    
            </ul>

        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="{{asset('/images/users/user-1.jpg')}}" alt="user-img" class="rounded-circle img-thumbnail avatar-md">
                    <div class="dropdown">
                        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false"></a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user mr-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock mr-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            

                        </div>
                    </div>
                    <p class="text-muted">Admin ComPro</p>
                </div>

                <!--- Sidemenu -->
             
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        
    </div>
    <!-- Vendor js -->
    <script src="{{asset('/js/vendor.min.js')}}"></script>
    
    <!-- knob plugin -->
    <script src="{{asset('/libs/jquery-knob/jquery.knob.min.js')}}"></script>
    
    <!--Morris Chart-->
    <script src="{{asset('/libs/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('/libs/raphael/raphael.min.js')}}"></script>
    
    <!-- Dashboard init js-->
    <script src="{{asset('/js/pages/dashboard.init.js')}}"></script>
    
    <!-- App js -->
    <script src="{{asset('/js/app.min.js')}}"></script>

    {{-- dropify --}}
    <script src="{{ asset('/libs/dropify/dropify.min.js') }}"></script>
    
    {{-- ckeditor --}}
    <script type="text/javascript" src="{{ asset('/libs/ckeditor2/ckeditor/ckeditor.js') }}"></script>
    
    {{-- data tables --}}
    <script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.select.min.js')}}"></script>
    
    {{-- Font Awesome 6 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    
    {{-- sweet alert --}}
    <script src="{{ asset('/libs/sweetalert2/sweetalert2.min.js') }}" ></script>
    {{-- Select2 --}}
    <script src="{{ asset('/libs/select2/select2.min.js') }}" ></script>
</body>
</html>