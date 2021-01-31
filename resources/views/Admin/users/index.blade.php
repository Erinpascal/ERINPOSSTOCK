 @extends('layouts.adminlayout.admin_design')
@section('content')


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<!-- <h5>Zero Configuration</h5> -->
<div class="box-header with-border">
<a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Create users</a>
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
<th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>

</tr>
</thead>
<tbody>
          @foreach ($data as $user)
<tr>

<td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>

<td>
   <form class="row" method="POST" action="{{ route('users.destroy', $user ->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('users.edit', $user->id) }}" title="Edit City"  class="m-r-15 text-muted f-18"><i class="icofont icofont-ui-edit"></i></a>
                        
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