@extends('layouts.adminlayout.admin_design')
@section('content')
<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<div class="box-header with-border">
                <h3 class="box-title">Roles</h3>
                <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm pull-right">Create roles</a>
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
 <th>No</th>
   <th>Name</th>
   <th>Action</th>

</tr>
</thead>
<tbody>
      
       @foreach ($roles as $key => $role)
<tr>

<td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>

<td>
   <form class="row" method="POST" action="{{ route('roles.destroy', $role->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('roles.edit', $role->id) }}" title="Edit City"  class="m-r-15 text-muted f-18"><i class="icofont icofont-ui-edit"></i></a>
                        
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