@extends('layouts.adminlayout.admin_design')
@section('content')
  <div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
 
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
<th>id</th>
<th>Customer Server</th>
<th>code</th>

 <th>action</th>

</tr>
</thead>
<tbody>
  @foreach($sales as  $item)
<tr data-entry-id="{{ $item->id }}">
<td>{{ $item->id }}</td>
<td>{{ $item->user->name }}</td>

<td>{{ $item->tracking_no }}</td>

  


 
<td>
  

                        <a href="{{ route('allsale.show', $item->id) }}" title="show sales"  class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></a>

                        <!-- <a href="{{URL::to('/makepdfpurchase/'.$item->id)}}" target="_blank"  class="btn btn-danger btn-sm"><i class="fa fa-print"></i></a>
 -->
                                           
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