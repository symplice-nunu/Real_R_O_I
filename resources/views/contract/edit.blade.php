@extends('layouts.app')
  
@section('content')
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Contract - Modify</h2>
            </div>
            <div class="col-sm-6" style="margin-bottom: 1.5em;">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contract.index') }}">Manage Contract</a></li>
                    <li class="breadcrumb-item">Modify</li>
                </ol>
            </div>
        </div>
    </div>
@if ($errors->any())
<div class="card">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('contract.update',$contract->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group">
                <strong>House Id*</strong>
                <input type="text" name="houseid" value="{{ $contract->houseid }}" class="form-control" placeholder="Enter House Id">
                
                @if ($errors->has('houseid'))
                                <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group ">
                <strong>Emp Name*</strong>
                <input type="text" name="empname" value="{{ $contract->empname }}" class="form-control" placeholder="Enter Employee Name">
                
                @if ($errors->has('empname'))
                                <span class="text-danger">{{ $errors->first('empname') }}</span>
                                @endif
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group">
                <strong>Title*</strong>
                <input type="text" class="form-control" value="{{ $contract->emptitle }}" name="emptitle" placeholder="Enter Emp Title">
            @if ($errors->has('emptitle'))
                                <span class="text-danger">{{ $errors->first('emptitle') }}</span>
                                @endif
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group">
                <strong>Buyer Name</strong>
                <input type="text" class="form-control" value="{{ $contract->buyername }}" name="buyername" placeholder="Enter Payment">
                
           @if ($errors->has('buyername'))
                                <span class="text-danger">{{ $errors->first('buyername') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group">
                <strong>Payment Type</strong>
                <input type="text" class="form-control" value="{{ $contract->paymenttype }}" name="paymenttype" placeholder="Enter Payment">
                
           @if ($errors->has('paymenttype'))
                                <span class="text-danger">{{ $errors->first('paymenttype') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top: 1em;">
            <div class="form-group">
                <strong>Location</strong>
                <input type="text" name="location" value="{{ $contract->location }}" class="form-control" placeholder="Enter Location">
             </div>
             @if ($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                @endif
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 1em;">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection