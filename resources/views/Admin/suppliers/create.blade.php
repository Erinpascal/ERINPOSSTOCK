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
<form id="main" method="POST" action="{{ route('suppliers.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="name" placeholder="name Supplier">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Contact</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="contact" name="contact" placeholder="024*******">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="email" name="email" placeholder="medi@gmail.com">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Location</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="location" name="location" placeholder="location">
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