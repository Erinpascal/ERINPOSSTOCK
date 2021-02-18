@extends('layouts.adminlayout.admin_design')
@section('content')

<!-- pascal -->
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Add Supplier</h5>
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
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>

</div>
</div>
<div class="card-block">
<form id="main" method="POST" action="{{ route('supplys.create') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<!-- <input type="hidden" name="_method" value="POST">
 -->                        <div class="form-group row">
<label class="col-sm-2 col-form-label">Supplier:</label>
<div class="col-sm-10" >
<select  class="form-control form-control-default" name="supply_id">
<option value="opt1">Select One Supply Only</option>
 @foreach($supply as $supply)
 <option value="{{ $supply->id }}">{{ $supply->name }}</option>
 @endforeach
</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Product Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="name" placeholder="name of supplied product">
<span class="messages"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Brand:</label>
<div class="col-sm-10" >
<select  class="form-control form-control-default" name="brand_id">
<option value="opt1">Select One Brand Only</option>
 @foreach($brand as $brand)
 <option value="{{ $brand->id }}">{{ $brand->name }}</option>
 @endforeach
</select>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Quantity</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="quantity" name="quantity" placeholder="12">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Price</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="price" name="price" placeholder="23">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Supply Type</label>
<div class="col-sm-10">
<select  class="form-control form-control-default" name="type">
<option>Full_supply</option>
<option>Part_supply</option>
</select>


<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Expiry Date</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="expire" name="expire" >
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary m-b-0">Submit</button>
</div>
</div>
</form>
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