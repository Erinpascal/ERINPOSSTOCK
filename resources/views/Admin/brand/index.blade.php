@extends('layouts.adminlayout.admin_design')
@section('content')








<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Zero Configuration</h5>
<span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
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
<th>Name</th>
<th>Description</th>
<th>Action</th>

</tr>
</thead>
<tbody>
            @foreach ($brand as $brand)
<tr>

<td>{{ $brand->name }}</td>
<td>{{ $brand->description}}</td>

<td>
   <form class="row" method="POST" action="{{ route('brands.destroy', $brand->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('brands.edit', $brand->id) }}" title="Edit City"  class="m-r-15 text-muted f-18"><i class="icofont icofont-ui-edit"></i></a>
                        
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