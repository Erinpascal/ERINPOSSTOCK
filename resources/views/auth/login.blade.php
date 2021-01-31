<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:15:57 GMT -->
<head>
<title>Flat Able - Premium Admin Template by Phoenixcoded</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="Phoenixcoded">

<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('../bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/flag-icon/flag-icon.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/menu-search/css/component.css')}}">

<link rel="stylesheet" href="{{ asset('../bower_components/c3/c3.css')}}" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="{{ asset('../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css')}}" id="color" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/linearicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-line-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css')}}">
</head>
<body class="fix-menu">
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
	 @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="login-card card-block auth-body">
<form class="md-float-material" method="POST" action="{{ route('login') }}">
@csrf

<div class="text-center">
<img src="assets/images/auth/logo.png" alt="logo.png">
</div>
<div class="auth-box">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign in. It is fast and easy.</h3>
</div>
</div>
<hr />

<div class="input-group">
<input type="text" class="form-control" name="email" placeholder="Your Email Address">
<span class="md-line"></span>
</div>
<div class="input-group">
<input type="password" class="form-control" name="password" placeholder="Choose Password">
<span class="md-line"></span>
</div>



<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in now.</button>
</div>
</div>

</div>
</form>

</div>

</div>

</div>

</div>

</section>


<script type="text/javascript" src="{{ asset('../bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/tether/dist/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('../bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<script type="text/javascript" src="{{ asset('../bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

<script type="text/javascript" src="{{ asset('../bower_components/classie/classie.js')}}"></script>

<script src="{{ asset('../bower_components/d3/d3.min.js')}}"></script>
<script src="{{ asset('../bower_components/c3/c3.js')}}"></script>

<script type="text/javascript" src="{{ asset('../../www.gstatic.com/charts/loader.js')}}"></script>

<script src="{{ asset('assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>

<script src="{{ asset('../bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('../bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{ asset('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('../bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('../bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('../bower_components/i18next/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('../bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/edit-table/jquery.tabledit.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/edit-table/editable.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/pages/dashboard/ecommerce-dashboard.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js')}}"></script>
<script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{ asset('assets/js/demo-12.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mousewheel.min.js')}}"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:15:57 GMT -->
</html>
