@extends('layouts.app')


@section('content')
<div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage houses</h2>
            </div>
            <div class="col-sm-6 pull-right" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Manage houses</li>
                </ol>
            </div>
        </div>
    </div>
        <div class="col-lg-12 margin-tb">
            
           
        </div>
        
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table align="right" style="margin-bottom: 1em;">
    <tr>
        <td align="right" colspan="2"> 
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-right"  style="margin-bottom: 1em;">
                <a class="btn btn-primary btn-create" href="{{ route('products.create') }}"> Add Houses</a>
            </div>
        </div></td><td>

        </td> <br>
    <tr>
        <td align="right" colspan="2"> 
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-right"  style="margin-bottom: 1em;">
                <a class="btn btn-success btn-create"  href="{{ url('generate-pdf') }}"> Download</a>
            </div>
        </div></td><td>

        </td> <br>
        
    </tr>
    </tr>
    <tr>
        <td>
            Search:&nbsp;
</td>
<td>
        <div class="col-lg-12">
                 <input type="search" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search" class="form-control">
        </div>
        </td>
    </tr>

</table>
    <table class="table table-bordered"  id="myTable">
        <tr>
        <th>House Id</th>
            <th>City</th>
            <th>Rooms</th>
            <th>Saloons</th>
            <th>Toilets</th>
            <th>Kitchens</th>
            <th>Extra H</th>
            <th>Price</th>
            <th>Invested</th>
            <th>Picture</th>
            <th width="140px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
            <td>{{ $product->houseid }}</td>
            <td>{{ $product->city }}</td>
            <td>{{ $product->numberofroom }}</td>
            <td>{{ $product->numberofsaloons }}</td>
            <td>{{ $product->numberoftb }}</td>
            <td>{{ $product->numberofkitchen }}</td>
            <td>{{ $product->extrahouses }}</td>
            <td>${{ $product->price }}</td>
            <td>${{ $product->invested }}</td>
            <td> <img src="{{ $product->houseimage }}" alt="" style="width: 2.5em; height: 2.5em; border-radius: 2em;" > </td> 
	       

            <td>
    
    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: teal; border-color: teal;">
            <a class="fas fa-eye" style="color: white;" href="{{ route('products.show',$product->id) }}" ></a>
        </button>
        <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
            <a class="fas fa-pen" style="color: white;" href="{{ route('products.edit',$product->id) }}" ></a>
        </button>
        @csrf
        @method('DELETE')

        <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
    </form>
</td>
	    </tr>
	    @endforeach
    </table>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

    {!! $products->links() !!}



@endsection