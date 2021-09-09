@extends('layouts.app')


@section('content')
<div class="container" style="margin-left:15em;">
<div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Create New User</h2>
            </div>
           
        </div>
    </div>
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="card" style="width: 30em; margin-left:15em; margin-top: 2em; padding-top: 3.5em;">
<div class="container">
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong >Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 1em;">
        <div class="form-group">
            <strong >Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 1em;">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 1em;">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 1em;">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="pull-right"  style="margin-bottom: 2em; margin-top: 1em;">
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success btn-create" href="{{ route('users.index') }}"> Back</a>
            </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
@endsection