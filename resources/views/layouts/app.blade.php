<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'CMMA Project') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://cdn.iconscout.com/icon/free/png-512/laravel-226015.png">
    <link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-512/laravel-226015.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('backend/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="header">MAIN NAVIGATION </li>
                    <li class="active">
                        <a href="#"><i class="menu-icon fa fa-laptop"></i><span>Dashboard</span> </a>
                    </li>
                    @role('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><span>User Management</span></a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-double-right"></i></i><span>View User </span></a></li>                           
                            <li><a href="{{ route('users.create') }}"><i class="fa fa-angle-double-right"></i></i><span>Create User</span></a></li>
                            <li><a href="{{ route('roles.index') }}"><i class="fa fa-angle-double-right"></i></i><span>Roles</span></a></li>
            
                        </ul>
                    </li>
                    @endrole
                    @role('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><span>Client Management</span></a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-double-right"></i></i><span>View Client </span></a></li>                           
                           <li><a href="{{ route('users.create') }}"><i class="fa fa-angle-double-right"></i></i><span>Create Client</span></a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><span>Project Management</span></a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-double-right"></i></i><span>View Project </span></a></li>                           
                           <li><a href="{{ route('users.create') }}"><i class="fa fa-angle-double-right"></i></i><span>Create Project</span></a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><span>Support Management</span></a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-double-right"></i></i><span>View Project </span></a></li>                           
                           <li><a href="{{ route('users.create') }}"><i class="fa fa-angle-double-right"></i></i><span>Create Project</span></a></li>
                        </ul>
                    </li>
                    @endrole

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><span>Reports</span></a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="{{ route('forms.create') }}"><i class="fa fa-angle-double-right"></i></i><span>Create New Form Elements</span></a></li>                           
                            <li><a href="{{ route('forms.index') }}"><i class="fa fa-angle-double-right"></i></i><span>View Form Elements</span></a></li>
                        </ul>
                    </li>
                    <!-- @role('Vendor User')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i> <span>Project details</span></a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Enter Project details</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Enter Individual Engagement details</span></a></li>
                        </ul>
                    </li>
                    @endrole
                    @if(auth()->user()->can('upload'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i><span>Upload module</span>
</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Upload Document</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Upload Photo</span></a></li>
                        </ul>
                    </li>
                    @endif
                    @role('System Admin')
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i><span>Document Management</span></a>
                        
                    </li>
                    @endrole
                    @role('System Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i><span>Report</span></a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i><span>MIS Reports</span></a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('System Admin')
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i><span>Project Monitoring </span></a>
                        
                    </li>
                    @endrole -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('backend/images/logo.png') }}" alt="Logo"></a>
                    <a href="#"> <span class="logo" style="width:425px;">
                    <h2>E Square System & Technologies Pvt. Ltd.</h2>
                    <small>Project Monitoring Information System</small>
                 </span></a>
                    <a class="toggle-logout hidden" href="#"><span class="ti-exchange-vertical"></span></a>
                    <a id="menuToggle" class="menutoggle d-hidden"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left user-login-details">
                        <ul style="margin-bottom: 0;">
                        <li class="logged_in" >Logged in as : {{ Auth::user()->fullname }}, {{ Auth::user()->roles->pluck('name')->first() }}<br><small class="">E Square System &amp; Technologies</small></li>
                        <li class="logged_out">

                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                           <i class="fas fa-lock-open"></i> <span> Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                    </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">              
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>
         @yield('content')
        </div>        
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->
    <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner">
                <div class="row">
                    <div class="copyright text-white">
            ©  2020 - 2021 <a href="#">  Project Monitoring Information System </a>
        </div>
                </div>
            </div>
        </footer>
    <!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
 var $=jQuery.noConflict();
    $(window).on("load", function(event){
        $("#myModal").modal('show');
    });
</script>
<script type="text/javascript">

$(".upload-clarification-add").click(function () {

    //alert('hello')
    let lineNo = 1;
       console.log('hello');
                markup = '<tr><td><p>Element Name</p><input type="text" class="form-control"></td><td><button class="btn btn-danger m-10 upload-clarification-add" type="button"><i class="fas fa-minus-circle"></i></button></td></tr>';
                tableBody = $("table tbody");
                tableBody.append(markup);
                lineNo++;
            });


// $(".upload-clarification-add").click(function () {
//         $(".upload-clarification-container").append('<div id="upload-clarification-row"><div class="col-md-10 p-0">'.
//         '<input class="form-control" type="file" name="prebid_doc[]" multiple="multiple" id="uploadFile_'+divid+'"></div>'.
//         '<div class="col-md-2">'.
//         '<button class="btn btn-default btn-circle waves-effect waves-circle waves-float upload-clarification-remove" type="button">'.
//         '<i class="material-icons col-pink">delete</i></button></div></div>');
//     });


</script>
<style>
    .m-10 {
        margin-top:40px;

    }
</style>
</body>
</html>
