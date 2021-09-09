@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        
    </div>
</div>
<table align="right" style="margin-bottom: 1em;">
    <tr>
        <td align="right" colspan="2"> 
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-right"  style="margin-bottom: 1em;">
                <a class="btn btn-primary btn-create" href="{{ route('roles.create') }}"> New Role</a>
            </div>
        </div></td>
    </tr>
    

</table>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
        <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
            <!-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> -->
            @can('role-edit')
                <a class="fas fa-pen" href="{{ route('roles.edit',$role->id) }}" style=" color: white;"></a>
            @endcan
            </button>
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
                {!! Form::close() !!}
            @endcan
        </td>
       
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}
@endsection