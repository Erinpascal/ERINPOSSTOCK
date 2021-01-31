<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar" pcoded-header-position="relative">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="">
<div class="main-menu-header">
<img class="img-40" src="{{ asset('assets/images/user.png')}}" alt="User-Profile-Image">
<div class="user-details">
<span>John Doe</span>
<span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
</div>
</div>
<div class="main-menu-content">
<ul>
<li class="more-details">
<a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
<a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
</li>
</ul>
</div>
</div>
<hr>

<!-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5"></div>
 --><ul class="pcoded-item pcoded-left-item">
 <div class="col-md-8 col-sm-12 estimate-ship-tax">
<div>
<a href="{{ route("invoice.create") }}" class="btn btn-upper btn-primary">Point Of Sale</a>
</div>
   </div>
   <hr>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-home"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.main">User Management</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="{{ route("roles.index") }}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.default">Roles</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="{{ route("users.index") }}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Users</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>


<li class="pcoded-hasmenu">
<a href="javascript:void(0)" data-i18n="nav.navigate.main">
<span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
<span class="pcoded-mtext">Suppliers</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{ route("suppliers.create") }}" data-i18n="nav.navigate.navbar">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">Suppliers create</span>
<span class="pcoded-mcaret"></span>
</a>
</li>


</ul>

<ul class="pcoded-submenu">
<li class=" ">
<a href="{{ route("suppliers.index") }}" data-i18n="nav.navigate.navbar">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">Suppliers list</span>
<span class="pcoded-mcaret"></span>
</a>
</li>


</ul>
</li>



<li class="pcoded-hasmenu">
<a href="javascript:void(0)" data-i18n="nav.navigate.main">
<span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
<span class="pcoded-mtext">Items/Products</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{ route("products.create") }}" data-i18n="nav.navigate.navbar">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">New Item/Product</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="{{ route("products.index") }}" data-i18n="nav.navigate.navbar-inverse">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">Item list</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="{{ route("categories.create") }}" data-i18n="nav.navigate.navbar-with-elements">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">New Category</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

<li class=" ">
<a href="{{ route("categories.index") }}" data-i18n="nav.navigate.navbar-with-elements">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">Category List</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="{{ route("brands.create") }}" data-i18n="nav.navigate.navbar-with-elements">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">New Brand</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" ">
<a href="{{ route("brands.index") }}" data-i18n="nav.navigate.navbar-with-elements">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">Brand List</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>
</li>


<li class="pcoded-hasmenu">
<a href="javascript:void(0)" data-i18n="nav.navigate.main">
<span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
<span class="pcoded-mtext">Sales</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{ route("allsale.index") }}" data-i18n="nav.navigate.navbar">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext">sales list</span>
<span class="pcoded-mcaret"></span>
</a>
</li>


</ul>
</li>

</ul>




<ul class="pcoded-item pcoded-left-item">
<li class="">
<a href="{{ url('report') }}" data-i18n="nav.navigate.navbar-with-elements">
<span class="pcoded-micon"><i class="ti-file"></i></span>
<span class="pcoded-mtext">Reports</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class="">
<a href="https://support.phoenixcoded.net/#/home" target="_blank" data-i18n="nav.submit-issue.main">
<span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
<span class="pcoded-mtext">Submit Issue</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>
</div>
</nav>
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>POINT OF SALE SYSTEM</h4>
 </div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Dashboard</a>
</li>
<li class="breadcrumb-item"><a href="#!">POS</a>
</li>
</ul>
</div>
</div>