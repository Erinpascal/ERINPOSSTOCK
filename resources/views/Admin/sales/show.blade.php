@extends('layouts.adminlayout.admin_design')
@section('content')




<div class="card">
<div class="row invoice-contact">
<div class="col-md-8">
<div class="invoice-box row">
<div class="col-sm-12">
<table class="table table-responsive invoice-table table-borderless">
<tbody>
<tr>
<td><img src="assets/images/logo-blue.png" class="m-b-10" alt=""></td>
</tr>
<tr>
<td>Saeed Pharmacy</td>
</tr>
<tr>
<td>Techima - Brone Ahafo</td>
</tr>
<tr>
<td><a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection#d4b0b1b9bb94b3b9b5bdb8fab7bbb9" target="_top"><span class="__cf_email__" data-cfemail="c9adaca4a689aea4a8a0a5e7aaa6a4">Atteypascal@gmail.com</span></a>
</td>
</tr>
<tr>
<td>0540200145</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row text-center">
<div class="col-sm-12 invoice-btn-group">
<!-- <button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Print Invoice
</button> -->
<a href="{{url('generate-invoice/'.$sales->id)}}" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Generate invoice</a>


<button type="button" class="btn btn-danger waves-effect waves-light">Cancel Invoice
</button>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row invoive-info">
<div class="col-md-4 col-xs-12 invoice-client-info">
<h6>Client Server :</h6>
<h6 class="m-0">{{$sales->user->name}}</h6>
<!-- <p class="m-0 m-t-10">208, Peris Point, Varachha Road, Surat.</p> -->

</div>
<div class="col-md-4 col-sm-6">
<h6>Sales Information :</h6>
<table class="table table-responsive invoice-table invoice-order table-borderless">
<tbody>
<tr>
<th>Date :</th>
<td>November 16,2021</td>
</tr>

<tr>

</tr>
</tbody>
</table>
</div>
<div class="col-md-4 col-sm-6">
<h6 class="m-b-20">Invoice Number:{{ $sales->tracking_no }}</h6>
<h6 class="text-uppercase text-primary">Total Due :
<span>$900.00</span>
</h6>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="table-responsive">
<table class="table  invoice-detail-table">
<thead>
<tr class="thead-default">
	<th>item</th>

<th>item</th>
<th>Quantity</th>
<th>Amount</th>
<th>Total</th>
</tr>
</thead>
<tbody>
	@php $total = "0"; @endphp
	@foreach($sales->item as $item)
<tr>
	<td>{{$item->id}}</td>
<td>
<p>
  {{$item->products->name}}</p>
</td>
<td>
	{{ $item ->quantity }} 
</td>
<td>Gh{{$item->price}}</td>
<td>{{ $item ->quantity * $item->price}}</td>
</tr>
@php $total = $total + ($item->quantity * $item->price) @endphp
@endforeach


</tbody>
</table>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<table class="table table-responsive invoice-table invoice-total">
<tbody>

<tr class="text-info">
<td>
<hr />
<h5 class="text-primary">Grand Total :</h5>
</td>
<td>
<hr />
<h5 class="text-primary">{{$total}}</h5>
<hr />

</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h6>Terms And Condition :</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
</div>
</div>
</div>
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

  @endsection