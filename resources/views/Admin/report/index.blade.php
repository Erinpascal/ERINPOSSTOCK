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
<form id="main" method="get" action="#" enctype="multipart/form-data">

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
<th>Product</th>


 <th>action</th>

</tr>
</thead>
<tbody>

  @foreach($sales as $sale)
<tr data-entry-id="{{ $sale->id }}">
<td>{{ $sale->id }}</td>
<td>{{ $sale->user->name }}</td>

<td>{{ $sale->tracking_no }}</td>
<td>
   <ul>
    @foreach($sale->products as $key => $item)
                                    <li>{{ $item->name }} ({{ $item->pivot->quantity }} x ${{ $item->price }})</li>
                                @endforeach
    </ul>
</td>

  


 
<td>
  

                        <a href="#" title="show sales"  class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></a>

                                           
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