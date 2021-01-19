@extends('layouts.adminlayout.admin_design')
@section('content')
<div class="page-body">
 <div class="row">
<div class="col-md-12 col-xl-4">

<div class="card table-card">
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row">
<div class="col-sm-4">
<i class="icofont icofont-eye-alt text-success"></i>
</div>
<div class="col-sm-8 text-center">
<h5>{{$products}}</h5>
<span>Products</span>
</div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row">
<div class="col-sm-4">
<i class="icofont icofont-ui-music text-danger"></i>
</div>
<div class="col-sm-8 text-center">
<h5>100%</h5>
<span>Suppliers</span>
</div>
</div>
</div>
</div>
</div>
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row">
<div class="col-sm-4">
<i class="icofont icofont-files text-info"></i>
</div>
<div class="col-sm-8 text-center">
<h5>2000 +</h5>
<span>Files</span>
</div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row">
<div class="col-sm-4">
<i class="icofont icofont-envelope-open text-warning"></i>
</div>
<div class="col-sm-8 text-center">
<h5>120</h5>
<span>Mails</span>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-12 col-xl-4">

<div class="card table-card">
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row">
<div class="col-sm-4">
<div id="barchart" style="height:40px;width:40px;"></div>
</div>
<div class="col-sm-8 text-center">
<h5>{{$quantity}}</h5>
<span>Current Stock</span>
</div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row ">
<div class="col-sm-4">
<i class="icofont icofont-network text-primary"></i>
</div>
<div class="col-sm-8 text-center">
<h5>600</h5>
<span>Stock Value</span>
</div>
</div>
</div>
</div>
</div>
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row ">
<div class="col-sm-4">
<div id="barchart2" style="height:40px;width:40px;"></div>
</div>
<div class="col-sm-8 text-center">
<h5>{{$lowstock}}</h5>
<span>Out Stock</span>
</div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row ">
<div class="col-sm-4">
<i class="icofont icofont-network-tower text-primary"></i>
</div>
<div class="col-sm-8 text-center">
<h5>100%</h5>
<span>Stock in</span>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-12 col-xl-4">

<div class="card table-card widget-primary-card">
<div class="">
<div class="row-table">
<div class="col-sm-3 card-block-big">
<i class="icofont icofont-star"></i>
</div>
<div class="col-sm-9">
<h4>4000 +</h4>
<h6>Profit</h6>
</div>
</div>
</div>
</div>


<div class="card table-card widget-success-card">
<div class="">
<div class="row-table">
<div class="col-sm-3 card-block-big">
<i class="icofont icofont-trophy-alt"></i>
</div>
<div class="col-sm-9">
<h4>17</h4>
<h6>Lost</h6>
</div>
</div>
</div>
</div>

</div>












<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-facebook">
<h3>1165 +</h3>
<span class="m-t-10">Da</span>
<i class="icofont icofont-social-facebook"></i>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-twitter">
<h3>780 +</h3>
<span class="m-t-10">Twitter Users</span>
<i class="icofont icofont-social-twitter"></i>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-linkein">
<h3>998 +</h3>
<span class="m-t-10">Linked In Users</span>
<i class="icofont icofont-brand-linkedin"></i>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-google-plus">
<h3>650 +</h3>
<span class="m-t-10">Google Plus Users</span>
<i class="icofont icofont-social-google-plus"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>








@endsection



