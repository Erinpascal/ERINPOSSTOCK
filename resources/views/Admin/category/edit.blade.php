@extends('layouts.adminlayout.admin_design')

@section('content')
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Add Category</h5>
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
<form id="main"  method="POST" action="{{ route("categories.update", [$categories->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">





<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="name" value="{{ $categories->name }}">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Description</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="description" value="{{ $categories->description }}">
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
