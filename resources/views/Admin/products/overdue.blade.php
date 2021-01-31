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

 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

</div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Image</th>
<th>Name</th>
<th> Brand</th>
 <th>Category</th>
<th>Quantity</th>
<th>Selling Price</th>
<th>Bought Price</th>
<th> Status</th>
 <th>action</th>

</tr>
</thead>
<tbody>
@foreach ($products as $product)  
<tr>
<td class="img-pro">
<img src="{{url('images',$product->image)}}" height="40" width="40" class="img-fluid d-inline-block" alt="tbl">
</td>
<td>{{ $product->name }}</td>
<td>{{ $product->brand->name}}</td>
 <td>{{ $product->category->name}}</td>
  <td>{{ $product->qty}}</td>
  <td>Gh{{ $product->bprice}}</td>
 <td>Gh{{ $product->sprice}}</td>

<td>
  @if($product->qty < 50)
<label class="text-danger">Out Of Stock</label>
            @else 
     <label class="text-success">In Stock</label>

            @endif
</td>


 
<td>
   <form class="row" method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('products.edit', $product->id) }}" title="Edit City"  class="m-r-15 text-muted f-18"><i class="icofont icofont-ui-edit"></i></a>
                        
                        <button type="submit" title="Delete City" class="text-muted f-18">
                          <i class="icofont icofont-delete-alt"></i>
                        </button>
                    </form>
                    
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