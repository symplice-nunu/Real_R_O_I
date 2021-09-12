
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
                <a class="btn btn-primary btn-create" href="{{ route('houses.create') }}"> Add Houses</a>
            </div>
        </div></td><td>

        </td> <br>
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
   <div class="container">
    <table class="table table-bordered"  id="myTable">
        <tr class="tb-cl">
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
        @foreach ($houses as $house)
        <tr>
            <td>{{ $house->houseid }}</td>
            <td>{{ $house->city }}</td>
            <td>{{ $house->numberofroom }}</td>
            <td>{{ $house->numberofsaloons }}</td>
            <td>{{ $house->numberoftb }}</td>
            <td>{{ $house->numberofkitchen }}</td>
            <td>{{ $house->extrahouses }}</td>
            <td>{{ $house->price }}</td>
            <td>{{ $house->invested }}</td>
            <td>{{ $house->houseimage }}</td>
            <td>
    
                <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
   
                    <!-- <a class="btn btn-info" href="{{ route('houses.show',$house->id) }}">Show</a> -->
                    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
                        <a class="fas fa-pen" style="color: white;" href="{{ route('houses.edit',$house->id) }}" ></a>
                    </button>
    
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    </div>
       </div>    </div>
       
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
function myFunction(searchTerm) {
  var input, filter, table, tr, td, i;
  filter = searchTerm.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

var options = $("#fruitOptions");
$("#myTable tr:not(.header)").each(function() {
  options.append($("<option />").val($(this).find("td:first-child").text()).text($(this).find("td:first-child").text()));
});

$("#myInput").on('input', function() {
  myFunction($(this).val());
});

$("#fruitOptions").on('change', function() {
  myFunction($(this).val());
});
</script>
@yield('content')
@endsection

