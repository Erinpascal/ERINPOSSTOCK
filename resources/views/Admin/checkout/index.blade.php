@extends('layouts.adminlayout.admin_design')
@section('content')
  <div class="page-body">
    <!-- <form action="/place_order" method="post">
                              {{ csrf_field() }}
      <label>name:</label>
    <input type="name" name="">
<button name="place_order_btn" class="btn btn_primary"></button>
    </form>
 --><div class="row">
<div class="col-sm-12">
  @if(isset($cart_data))
    @if(Cookie::get('shopping_cart'))
    @php $total="0" @endphp
   <div class="shopping-cart">

<div class="card">
<div class="card-header">
  
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>

</div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="e-product-list" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline cart-page" role="grid" style="width: 100%;">
<thead>
<tr>
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 1000px;">Product Name</th>
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Price</th>
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Quantity</th>

</tr>
</thead>
<tbody  >
 @foreach ($cart_data as $data)

<tr class="cartpage">
</td>
<td class="pro-name">
{{ $data['item_name'] }}</td>
<td>{{ ($data['item_price']) }}</td>

<td>{{$data['item_quantity']}}</td>
 @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp

 </tr>
 @endforeach




</tbody>
</table>
<hr>
<div class="text-right">
  <h5>Grand Total:{{$total}}</h5>
</div>
</div>
</div>
</div>

  <div class="row">

                                <div class="col-md-8 col-sm-12 estimate-ship-tax">
                                    <div>
                                        <a href="{{ route("invoice.create") }}" class="btn btn-upper btn-warning outer-left-xs">Cart more</a>
                                    </div>
                                </div>

                                
                            </div>

                        </div>
                    @endif
                       <form action="/place_order" method="post">
                              {{ csrf_field() }}

     
<button name="place_order_btn" class="btn btn-upper btn-warning outer-left-xs">Submit and Print</button>
    </form>
                @else
                    <div class="row">
                        <div class="col-md-12 mycard py-5 text-center">
                            <div class="mycards">
                                <h4>Your cart is currently empty.</h4>
                                <a href="{{ route("invoice.create") }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Cart More </a>
                            </div>
                        </div>
                    </div>
                @endif

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