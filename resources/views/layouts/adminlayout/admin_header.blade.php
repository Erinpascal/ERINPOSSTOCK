<!-- hearder -->
<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="index-2.html">
<img class="img-fluid" src="{{ asset('assets/images/logo.png')}}" alt="Theme-Logo" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
<li>
<a class="main-search morphsearch-search" href="#">

<i class="ti-search"></i>
</a>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>
<li class="mega-menu-top">
<!-- <a href="#">
Mega
<i class="ti-angle-down"></i>
</a> -->
<ul class="show-notification row">
<li class="col-sm-3">
<h6 class="mega-menu-title">Popular Links</h6>
<ul class="mega-menu-links">
<li><a href="form-elements-component.html">Form Elements</a></li>
<li><a href="button.html">Buttons</a></li>
<li><a href="map-google.html">Maps</a></li>
<li><a href="user-card.html">Contact Cards</a></li>
<li><a href="user-profile.html">User Information</a></li>
<li><a href="auth-lock-screen.html">Lock Screen</a></li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Mailbox</h6>
<ul class="mega-mailbox">
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-folder"></i>
</div>
<div class="media-body">
<h5>Data Backup</h5>
<small class="text-muted">Store your data</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-headphone-alt"></i>
</div>
<div class="media-body">
<h5>Support</h5>
<small class="text-muted">24-hour support</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-dropbox"></i>
</div>
<div class="media-body">
<h5>Drop-box</h5>
<small class="text-muted">Store large amount of data in one-box only
</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-location-pin"></i>
</div>
<div class="media-body">
<h5>Location</h5>
<small class="text-muted">Find Your Location with ease of use</small>
</div>
</a>
</li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Gallery</h6>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/01.jpg')}}" alt="Gallery-1">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/02.jpg')}}" alt="Gallery-2">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/03.jpg')}}" alt="Gallery-3">
</div>
</div>
<div class="row m-b-20">
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/04.jpg')}}" alt="Gallery-4">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/05.jpg')}}" alt="Gallery-5">
</div>
<div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/mega-menu/06.jpg')}}" alt="Gallery-6">
</div>
</div>
<button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Contact Us</h6>
<div class="mega-menu-contact">
<div class="form-group row">
<label for="example-text-input" class="col-3 col-form-label">Name</label>
<div class="col-9">
<input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Email</label>
<div class="col-9">
<input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Contact</label>
<div class="col-9">
<input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="exampleTextarea" class="col-3 col-form-label">Message</label>
<div class="col-9">
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
 </div>
</div>
</div>
</li>
</ul>
</li>
</ul>

<ul class="nav-right">
<li class="header-notification lng-dropdown">
<a href="{{ route("invoice.create") }}" id="dropdown-active-item">
<i class="flag-icon flag-icon-gb m-r-5"></i> POS
</a>

<ul class="show-notification">

</ul>
</li>
<li class="header-notification">
<a href="{{ route("carts.index") }}" >
<i class="ti-bell"></i>
    <span class="basket-item-count">

<span class="badge badge-pill red">0</span>

</span>
Cart
</a>

</li>
<!-- <li class="header-notification">
<a href="#">
<i class="ti-comments"></i>
<span class="badge">9</span>
</a>
</li> -->
<li class="user-profile header-notification">
<a href="#!">
<img src="{{ asset('assets/images/user.png')}}" alt="User-Profile-Image">
<span>John Doe</span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">

<li>
<a href="user-profile.html">
<i class="ti-user"></i> Profile
</a>
</li>


<li>


 <a class="ti-layout-sidebar-left" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
</form>



</li>
</ul>
</li>
</ul>

<div id="morphsearch" class="morphsearch">
<form class="morphsearch-form">
<input class="morphsearch-input" type="search" placeholder="Search..." />
<button class="morphsearch-submit" type="submit">Search</button>
</form>
<div class="morphsearch-content">
<div class="dummy-column">
<h2>People</h2>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
<h3>Sara Soueidan</h3>
</a>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
<h3>Shaun Dona</h3>
</a>
</div>
<div class="dummy-column">
<h2>Popular</h2>
<a class="dummy-media-object" href="#!">
<img src="{{ asset('assets/images/avatar-1.png')}}" alt="PagePreloadingEffect" />
<h3>Page Preloading Effect</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="{{ asset('assets/images/avatar-1.png')}}" alt="DraggableDualViewSlideshow" />
<h3>Draggable Dual-View Slideshow</h3>
</a>
</div>
<div class="dummy-column">
<h2>Recent</h2>
<a class="dummy-media-object" href="#!">
<img src="{{ asset('assets/images/avatar-1.png')}}" alt="TooltipStylesInspiration" />
<h3>Tooltip Styles Inspiration</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="{{ asset('assets/images/avatar-1.png')}}" alt="NotificationStyles" />
<h3>Notification Styles Inspiration</h3>
</a>
</div>
</div>

<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
</div>

</div>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-1.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-2.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u2.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-3.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-4.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-5.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-1.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-3.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
 <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-4.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/avatar-1.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{ asset('assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="{{ asset('assets/images/avatar-1.png')}}" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="{{ asset('assets/images/avatar-2.png')}}" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>

<!-- Header -->