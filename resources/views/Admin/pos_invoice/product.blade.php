<div class="card-block">

<div class="default-grid">
<div class="row lightboxgallery-popup">

@if(!empty($products))

@forelse ($products as $product)  
<div class="col-sm-4 default-grid-item">  
<div class="product_data">
<div class="card gallery-desc">
<div class="masonry-media">
<a class="media-middle" href="#!">
<img class="img-fluid" src="{{url('images',$product->image)}}" alt="masonary">
</a>
</div>
<div class="card-block">
<input type="hidden" class="product_id" name="" value="{{$product->id}}">
<input  type="hidden" value="1" min="1" class="qty-input" max="100" name="">
@php
        $products=App\Product::find($product->id)
        @endphp

<h6 class="job-card-desc">{{ $product->name }}</h6>
<p class="text-muted">
<button type="button" class="add-to-cart-btn btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Add 
</button>
</p>

</div>
</div>
</div>
</div>
@empty
  <li>No Data</li>
@endforelse


@endif      


</div>




</div>




</div>