@extends('layouts.app')


@section('content')

<div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Payments List</h2>
            </div>
            <div class="col-sm-6 pull-right" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Payments List</li>
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
                <a class="btn btn-primary btn-create" href="#"> Download</a>
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
            <th>Name</th>
            <th>Payments</th>
            <th>Date</th>
        </tr>
        @foreach ($stripee as $stripe)
        <tr>
            <td>{{ $stripe->name }}</td>
            <td>{{ $stripe->price }}</td>
            <td>{{ $stripe->created_at }}</td>
           
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
</script>
@endsection
