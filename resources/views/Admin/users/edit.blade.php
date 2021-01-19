<!-- @extends('layouts.adminlayout.admin_design')
@section('content')

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Add Products</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>

</div>
</div>
<div class="card-block">

<form action="{{ route('categories.update', $categories->id) }}" method="POST">
        @csrf
        @method('PUT')



<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="name"  value="{{ $categories->name }}"placeholder="name Category">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Description</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="name" name="description" value="{{ $categories->description }}" placeholder="Description">
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



@endsection -->

@extends('layouts.adminlayout.admin_design')
@section('content')

<!-- pascal -->
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Add User</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
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

</div>
</div>
<div class="card-block">
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}



<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control' )) !!} <br>

<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Email"</label>
<div class="col-sm-10">
   {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Password"</label>
<div class="col-sm-10">
{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Confirm Password"</label>
<div class="col-sm-10">
{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Role"</label>
<div class="col-sm-10">
  {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
<span class="messages"></span>
</div>
</div>



<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary" name="add_product">Save</button></div>
</div>
{!! Form::close() !!}
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