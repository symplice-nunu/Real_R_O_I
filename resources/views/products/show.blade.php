@extends('layouts.app')


@section('content')
   <div class="container" style="margin-left: 8em;">
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> House Details</h2>
            </div>
            <div class="pull-right" style="margin-bottom: 1em;">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <table>
        <tr>
            <td colspan="2">
                <img src="{{ $product->houseimage }}" alt=""  style="width: 42em; margin-bottom: 1em;">
        </div>
            </td>
        </tr>
        <tr>
            <td>
            <img src="{{ $product->roomimage }}" alt=""  style="width: 21em; margin-bottom: 1em;">
            </td>
            <td>
            <img src="{{ $product->saloonimage }}" alt=""  style="width: 21em; margin-bottom: 1em;">
            </td>
        </tr>
        <tr>
            <td style="margin-bottom: 1em;">
               <p style="margin-bottom: 1em;"> <strong>House Id:</strong>
               {{ $product->houseid }}</p> 
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;"> <strong>City:</strong>
                {{ $product->city }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">  <strong>Number of Room:</strong>
                {{ $product->numberofroom }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">    <strong>Number of Saloon:</strong>
                {{ $product->numberofsaloons }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">   <strong>Number of Toilets:</strong>
                {{ $product->numberoftb }} </p>
            </td>
        </tr>
        <tr>
        <p style="margin-bottom: 1em;"> <td>
                <strong>Kitchen:</strong>
                {{ $product->numberofkitchen }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">    <strong>Extra-Houses:</strong>
                {{ $product->extrahouses }}
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">  <strong>Location:</strong>
                {{ $product->houselocation }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">   <strong>Invested:</strong>
                {{ $product->invested }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">    <strong>Price:</strong>
                {{ $product->price }} </p>
            </td>
        </tr>
        <tr>
            <td>
            <p style="margin-bottom: 1em;">   <strong>House Description:</strong>
                {{ $product->housedescription }} </p>
            </td>
        </tr>
    </table>
   </div>
@endsection
