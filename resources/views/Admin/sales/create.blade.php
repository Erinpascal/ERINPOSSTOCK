
@extends('layouts.adminlayout.admin_design')
@section('content')

 
<!-- pascal -->
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Add Products</h5>
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
<form id="main" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}



<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="name" >
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Image</label>
<div class="col-sm-10">
<input type="file" class="form-control" id="name" name="image" placeholder="name vehicle">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Category:</label>
<div class="col-sm-10" >
<select  class="form-control form-control-default" name="category_id">
<option value="opt1">Select One Category Only</option>
 @foreach($category as $category)
 <option value="{{ $category->id }}">{{ $category->name }}</option>
 @endforeach
</select>
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
<input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Bought Price</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="bprice" name="bprice" placeholder="Bought Price">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Selling Price</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="sprice" name="sprice" placeholder="Selling Price">
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

