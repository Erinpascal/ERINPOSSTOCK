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
      @include('Admin.inc.search')
      <div class="col-xs-6 col-sm-3">

              <select id="catID">
                 <option value="">Select a Category</option>
                 @foreach(App\Category::all() as $cList)
                 <option class="option" value="{{$cList->id}}">{{$cList->name}}</option>
                 @endforeach
               </select>

            </div>

             <div class="col-xs-6 col-sm-3">
            <select id="priceID">
                <option value="">Select Price Range</option>
                <option value="0-100">0-100</option>
                <option value="100-300">100-300</option>
                <option value="300-500">300-500</option>
                <option value="500-1000">500-1000</option>
            </select>
          </div>
          

            <button id="findBtn">find</button>
      


<div class="table-responsive">
<div class="dt-responsive table-responsive">



<div class="card-header-right">

</div>
</div>

<div id="product_data">
    @include('Admin.pos_invoice.product')
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



  @push('scripts')

  <script>
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function(event) {
          event.preventDefault();
          var page = $(this).attr('href').split('page=')[1];
          getMoreProducts(page);
        });


        $('#search').on('keyup', function() {
          $value = $(this).val();
          getMoreProducts(1);
        });

        $('#name').on('change', function() {
          getMoreProducts();
        });

       
        
        
    });


    function getMoreProducts(page) {

      var search = $('#search').val();

      // Search on based of country
      var selectedCountry = $("#name option:selected").val();

      // Search on based of type
      var selectedType = $("#sort_by option:selected").val();




      $.ajax({
        type: "GET",
        data: {
          'search_query':search,
          'name': selectedCountry,
          'sort_by': selectedType,
          'range': selectedRange
        },
        url: "{{ route('products.get-more-products') }}" + "?page=" + page,
        success:function(data) {
          $('#product_data').html(data);
        }
      });
    }
  </script>

  @endpush