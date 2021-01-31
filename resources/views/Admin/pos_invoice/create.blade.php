@extends('layouts.adminlayout.admin_design')
@section('content')

<div class="page-body">
<div class="row">

<div class="col-xl-7">
<div class="card">
<div class="card-header">
<h5>products in store</h5>
</div>
<div class="card-block">
<div class="table-responsive">
<div class="dt-responsive table-responsive">



<div class="card-header-right">

</div>
</div>
<div class="card-block">
<div class="default-grid">
<div class="row lightboxgallery-popup">

<!-- <div class="col-sm-3 default-grid-item">
<div class="card gallery-desc">
<div class="masonry-media">
<a class="media-middle" href="#!">
<img class="img-fluid" src="assets/images/gallery-grid/masonry-1.jpg" alt="masonary">
 </a>
</div>
<div class="card-block">
<h6 class="job-card-desc">Job Description</h6>
<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
<div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
<div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>
</div>
</div>
</div> -->
@foreach ($products as $product)  
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

<h6 class="job-card-desc">{{ $product->name }}</h6>
<p class="text-muted">
<button type="button" class="add-to-cart-btn btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Add 
</button>
</p>

</div>
</div>
</div>
</div>
@endforeach

</div>




</div>




</div>
</div>
</div>
</div>
</div>



<div class="col-sm-12 col-xl-5">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Cart Item</h5>
</div>
<div class="card-block">
<div id="pie-chart" style="height:300px">
	
	
<table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table></div>
</div>
</div>
</div>
<!-- <div class="col-sm-12">

<div class="card analytic-user">
<div class="card-block-big text-center">
<i class="icofont icofont-wallet"></i>
<h1>$ 324587</h1>
<h4>All Income</h4>
</div>
<div class="card-footer p-t-25 p-b-25">
<p class="m-b-0">This is standard panel footer</p>
</div>
</div> -->

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

