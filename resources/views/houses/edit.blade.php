@extends('layouts.app')
  
@section('content')
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Houses - Edit</h2>
            </div>
            <div class="col-sm-6" style="margin-bottom: 1.5em;">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('houses.index') }}">Manage Houses</a></li>
                    <li class="breadcrumb-item">Edit</li>
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
   
<form action="{{ route('houses.update',$houses->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Id*</strong>
                <input type="text" name="houseid" value="{{ $houses->houseid }}" class="form-control" placeholder="Enter House Id">
                
                @if ($errors->has('houseid'))
                                <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>City*</strong>
                <input type="text" name="city" value="{{ $houses->city }}" class="form-control" placeholder="Enter City">
                
                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
            </div>
        </div>
            
       
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Rooms*</strong>
                <input type="text" class="form-control" value="{{ $houses->numberofroom }}" name="numberofroom" placeholder="Enter Number of rooms">
            @if ($errors->has('numberofroom'))
                                <span class="text-danger">{{ $errors->first('numberofroom') }}</span>
                                @endif
        </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Saloons</strong>
                <input type="text" class="form-control" value="{{ $houses->numberofsaloons }}" name="numberofsaloons" placeholder="Enter Number of Saloons">
                
           @if ($errors->has('numberofsaloons'))
                                <span class="text-danger">{{ $errors->first('numberofsaloons') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Toilets</strong>
                <input type="text" name="numberoftb" value="{{ $houses->numberoftb }}" class="form-control" placeholder="Enter Number of Toilets">
             </div>
             @if ($errors->has('numberoftb'))
                                <span class="text-danger">{{ $errors->first('numberoftb') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Kitchen</strong>
                <input type="text" name="numberofkitchen" value="{{ $houses->numberofkitchen }}" class="form-control" placeholder="Enter Number of Kitchen">
            </div>
            @if ($errors->has('numberofkitchen'))
                                <span class="text-danger">{{ $errors->first('numberofkitchen') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Extra-Houses</strong>
                <input type="text" name="extrahouses" value="{{ $houses->extrahouses }}" class="form-control" placeholder="Enter Extra-Houses">
             </div>
             @if ($errors->has('extrahouses'))
                                <span class="text-danger">{{ $errors->first('extrahouses') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Location</strong>
                <input type="text" name="houselocation" value="{{ $houses->houselocation }}" class="form-control" placeholder="Enter House Location">
            </div>
            @if ($errors->has('houselocation'))
                                <span class="text-danger">{{ $errors->first('houselocation') }}</span>
                                @endif
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Price*</strong>
                <input type="number" name="price" value="{{ $houses->price }}" class="form-control" placeholder="Enter Price">
             </div>
             @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Description</strong>
                <input type="text" name="housedescription" value="{{ $houses->housedescription }}" class="form-control" placeholder="Enter House Description">
                @if ($errors->has('housedescription'))
                                <span class="text-danger">{{ $errors->first('housedescription') }}</span>
                                @endif
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Picture</strong>
                <input type="file" name="houseimage" value="{{ $houses->houseimage }}" class="form-control" placeholder="Enter Website">
             </div>
             @if ($errors->has('houseimage'))
                                <span class="text-danger">{{ $errors->first('houseimage') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Saloon Picture</strong>
                <input type="file" name="saloonimage" value="{{ $houses->saloonimage }}" class="form-control">
            </div>
            @if ($errors->has('saloonimage'))
                                <span class="text-danger">{{ $errors->first('saloonimage') }}</span>
                                @endif
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Room Image</strong>
                <input type="file" name="roomimage" value="{{ $houses->roomimage }}" class="form-control">
            </div>
            @if ($errors->has('roomimage'))
                                <span class="text-danger">{{ $errors->first('roomimage') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection