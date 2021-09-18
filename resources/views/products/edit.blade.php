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
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Manage Houses</a></li>
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
   

    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Id*</strong>
                <input type="text" name="houseid" value="{{ $product->houseid }}" class="form-control AL-N1" placeholder="Enter House Id">
                
                @if ($errors->has('houseid'))
                                <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>City*</strong>
                <input type="text" name="city" value="{{ $product->city }}" class="form-control AL-N1" placeholder="Enter City">
                
                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
            </div>
        </div>
            
       
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Rooms*</strong>
                <input type="text" class="form-control AL-N1" value="{{ $product->numberofroom }}" name="numberofroom" placeholder="Enter Number of rooms">
            @if ($errors->has('numberofroom'))
                                <span class="text-danger">{{ $errors->first('numberofroom') }}</span>
                                @endif
        </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Saloons</strong>
                <input type="text" class="form-control AL-N1" value="{{ $product->numberofsaloons }}" name="numberofsaloons" placeholder="Enter Number of Saloons">
                
           @if ($errors->has('numberofsaloons'))
                                <span class="text-danger">{{ $errors->first('numberofsaloons') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Toilets</strong>
                <input type="text" name="numberoftb" value="{{ $product->numberoftb }}" class="form-control AL-N1" placeholder="Enter Number of Toilets">
             </div>
             @if ($errors->has('numberoftb'))
                                <span class="text-danger">{{ $errors->first('numberoftb') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Kitchen</strong>
                <input type="text" name="numberofkitchen" value="{{ $product->numberofkitchen }}" class="form-control AL-N1" placeholder="Enter Number of Kitchen">
            </div>
            @if ($errors->has('numberofkitchen'))
                                <span class="text-danger">{{ $errors->first('numberofkitchen') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Extra-Houses</strong>
                <input type="text" name="extrahouses" value="{{ $product->extrahouses }}" class="form-control AL-N1" placeholder="Enter Extra-Houses">
             </div>
             @if ($errors->has('extrahouses'))
                                <span class="text-danger">{{ $errors->first('extrahouses') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Location</strong>
                <input type="text" name="houselocation" value="{{ $product->houselocation }}" class="form-control AL-N1" placeholder="Enter House Location">
            </div>
            @if ($errors->has('houselocation'))
                                <span class="text-danger">{{ $errors->first('houselocation') }}</span>
                                @endif
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Price*</strong>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control AL-N1" placeholder="Enter Price">
             </div>
             @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Description</strong>
                <input type="text" name="housedescription" value="{{ $product->housedescription }}" class="form-control AL-N1" placeholder="Enter House Description">
                @if ($errors->has('housedescription'))
                                <span class="text-danger">{{ $errors->first('housedescription') }}</span>
                                @endif
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Picture</strong>
                <input type="text" name="houseimage" value="{{ $product->houseimage }}" class="form-control AL-N1" placeholder="Enter URL">
             </div>
             @if ($errors->has('houseimage'))
                                <span class="text-danger">{{ $errors->first('houseimage') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Saloon Picture</strong>
                <input type="file" name="saloonimage" value="{{ $product->saloonimage }}" class="form-control AL-N1">
            </div>
            @if ($errors->has('saloonimage'))
                                <span class="text-danger">{{ $errors->first('saloonimage') }}</span>
                                @endif
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Room Image</strong>
                <input type="file" name="roomimage" value="{{ $product->roomimage }}" class="form-control AL-N1">
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