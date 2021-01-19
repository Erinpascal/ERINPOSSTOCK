@extends('layouts.adminlayout.admin_design')
@section('content')



 <div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
  <div style="margin-bottom: 10px;" class="row">
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
<th>Image</th>
<th>Name</th>
 <th>Category</th>

 <th></th>

</tr>
</thead>
<tbody>
@foreach ($products as $product)  
<tr class="product_data">
<td class="img-pro">
<img src="{{url('images',$product->image)}}" height="40" width="40" class="img-fluid d-inline-block" alt="tbl">
</td>
<input type="hidden" class="product_id" name="" value="{{$product->id}}">
<input  type="hidden" value="1" min="1" class="qty-input" max="100" name="">


<td>{{ $product->name }}</td>
 <td>{{ $product->category->name}}</td>
 

 


 
<td>
<button type="button" class="add-to-cart-btn btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
<i class="icofont icofont-cart-alt f-20"></i>
</button>

<button type="button" class="delete_cart_data btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
<i class="icofont icofont-cart-alt f-20"></i>
</button>
                    
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

