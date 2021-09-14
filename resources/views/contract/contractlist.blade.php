
@extends('layouts.app')
@section('content')

       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Contract</h2>
            </div>
            <div class="col-sm-6 pull-right" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Manage Contract</li>
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
                <a class="btn btn-primary btn-create"  href="{{ route('contract.create') }}"> New Contract</a>
            </div>
        </div></td><td>

        </td> <br>
        
    </tr>
    <tr>
        <td align="right" colspan="2"> 
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-right"  style="margin-bottom: 1em;">
                <a class="btn btn-success btn-create"  href="#"> Download</a>
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
            <th>Emp Name</th>
            <th>Emp Title</th>
            <th>Payment Type</th>
            <th>Location</th>
            <th width="140px">Action</th>
        </tr>
        @foreach ($contract as $contra)
        <tr>
            <td>{{ $contra->houseid }}</td>
            <td>{{ $contra->empname }}</td>
            <td>{{ $contra->emptitle }}</td>
            <td>{{ $contra-> paymenttype}}</td>
            <td>{{ $contra->location }}</td>
            <td>
    
                <form action="{{ route('contract.destroy',$contra->id) }}" method="POST">
                <button style="height: 2em; width: 2em; border-radius: 2em; background-color: teal; border-color: teal;">
                        <a class="fas fa-eye" style="color: white;" href="{{ route('contract.show',$contra->id) }}" ></a>
                    </button>
                    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
                        <a class="fas fa-pen" style="color: white;" href="{{ route('contract.edit',$contra->id) }}" ></a>
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

