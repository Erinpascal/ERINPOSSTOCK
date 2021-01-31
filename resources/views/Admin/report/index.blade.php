
@extends('layouts.adminlayout.admin_design')
@section('content')

<!-- pascal -->
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">

<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>

</div>
</div>
<div class="card-block">
<form id="main" method="POST" action="{{ route('sales.search', ['id' => $sales->id]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}





<div class="form-group row">
<div class="col-sm-4">
  <label class="col-sm-2 col-form-label">From:</label>
<input type="date" class="form-control"  id="from" name="from" >
<span class="messages"></span>
</div>

<div class="col-sm-4">
  <label class="col-sm-2 col-form-label">To:</label>

<input type="date" class="form-control"  id="to" name="to" >
<span class="messages"></span>
</div>
<div class="col-sm-4">
<br>
<button type="submit" class="btn btn-primary m-b-0">Submit</button>
</div>

</div>
</form>
</div>



      <div class="card-block">
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>id</th>
<th>Customer Server</th>
<th>code</th>

 <th>action</th>

</tr>
</thead>
<tbody>
  @foreach($sales as  $item)
<tr data-entry-id="{{ $item->id }}">
<td>{{ $item->id }}</td>
<td>{{ $item->user->name }}</td>

<td>{{ $item->tracking_no }}</td>

  


 
<td>
  

                        <a href="{{ route('allsale.show', $item->id) }}" title="show sales"  class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></a>

                                           
</td>

</tr>
@endforeach

</tfoot>
</table>
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