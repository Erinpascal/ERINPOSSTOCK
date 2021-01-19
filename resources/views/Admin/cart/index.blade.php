@extends('layouts.adminlayout.admin_design')
@section('content')

 <div class="page-body">
<div class="row">
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
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Amount</th>
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Qty</th>
<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">Grand Total</th>

<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 134px;text-align:center">Action</th>
</tr>
</thead>
<tbody  >
 @foreach ($cart_data as $data)

<tr class="cartpage">
</td>
<td class="pro-name">
{{ $data['item_name'] }}</td>
<td>{{ number_format($data['item_price'], 2) }}</td>
<td  class="pro-name">
<!-- <input type="number" class="form-control" value="{{ $data['item_quantity'] }}" min="1" max="100"> -->
<input type="hidden" class="product_id" value="{{ $data['item_id'] }}" >
<div class="col-xl-3 col-sm-12">
<div class="p-l-0 m-b-25">
<div class="input-group quantity">

<span class="input-group-btn">
<button type="button" class="btn btn-default btn-number decrement-btn changeQuantity shadow-none"  data-type="minus" data-field="quant[1]">
<span class="icofont icofont-minus m-0"></span>
</button>
</span>
<input type="text"  class=" qty-input input-number text-center"maxlength="2" max="100" value="{{ $data['item_quantity'] }}">
 <input type="hidden" class="product_id" value="{{ $data['item_id'] }}" >
<!-- 
            <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{ $data['item_quantity'] }}"> -->

<span class="input-group-btn">
<button type="button" class="btn btn-default btn-number increment-btn changeQuantity shadow-none" data-type="plus" data-field="quant[1]">
<span class="icofont icofont-plus m-0"></span>
</button>
</span>
</div>
</div>
</div>

</td >
<td>{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</td>
<td class="action-icon text-center">
<a href="#!" class="delete_cart_data" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
</td>
 @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
 </tr>
 @endforeach




</tbody>
</table>
</div>
</div>
</div>

  <div class="row">

                                <div class="col-md-8 col-sm-12 estimate-ship-tax">
                                    <div>
                                        <a href="{{ url('collections') }}" class="btn btn-upper btn-warning outer-left-xs">Continue Shopping</a>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 ">
                                    <div class="cart-shopping-total">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="cart-subtotal-name">Subtotal</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="cart-subtotal-price">
                                                    Rs.
                                                    <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="cart-grand-name">Grand Total</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="cart-grand-price">
                                                    Rs.
                                                    <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cart-checkout-btn text-center">
                                                    @if (Auth::user())
                                                        <a href="{{ url('checkout') }}" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</a>
                                                    @else
                                                        <a href="{{ url('login') }}" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</a>
                                                        {{-- you add a pop modal for making a login --}}
                                                    @endif
                                                    <h6 class="mt-3">Checkout with Fabcart</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                @else
                    <div class="row">
                        <div class="col-md-12 mycard py-5 text-center">
                            <div class="mycards">
                                <h4>Your cart is currently empty.</h4>
                                <a href="{{ url('collections') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
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