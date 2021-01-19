@extends('layouts.adminlayout.admin_design')
@section('content')
  <div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
  <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("products.create") }}">
                Create Products
            </a>
        </div>
    </div>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>

</div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>id</th>
<th>code</th>
<th> Grandtotal</th>
 <th>Products</th>
 <th>action</th>

</tr>
</thead>
<tbody>
  @foreach($sales as $key => $sales)
<tr data-entry-id="{{ $sales->id }}">
<td>{{ $sales->id }}</td>

<td>{{ $sales->code }}</td>
<!-- <td>{{ $sales->grandtotal}}</td> -->
 <td>
    <ul>
 
                                </ul>
 </td>
  


 
<td>
   <form class="row" method="POST" action="{{ route('sales.destroy', $sales->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('sales.edit', $sales->id) }}" title="Edit City"  class="btn btn-danger"><i class="icofont icofont-ui-edit"></i></a>

                        <a href="{{ route('sales.show', $sales->id) }}" title="show sales"  class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></a>

                        <button type="submit" title="Delete City" class="btn btn-danger">
                          <i class="icofont icofont-delete-alt"></i>
                        </button>


<!--                         class="btn btn-danger"><i class="icofont icofont-eye-alt"
 -->                    </form>
                    
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

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  @endsection