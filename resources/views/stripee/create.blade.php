@extends('layouts.app')


@section('content')


        <div class="col-lg-12 margin-tb">
            
           
        </div>
        
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="container">
    <table class="table table-bordered" style="margin-top: 6em; background-color: lightgrey;">
        <tr align="center" bgcolor="lightblue" style="color: black;">
            <td><b>{{ Auth::user()->name }} &nbsp </b> Click on View Icon to view your payment Process</td>
        </tr>
        @foreach ($stripee as $stripe)
        
        @endforeach
        <tr align="center">
            <td>
    
                <form action="" method="POST">
                <button style="height: 6em; width: 6em; border-radius: 2em; background-color: teal; border-color: teal;">
                        <a class="fas fa-eye" style="color: white;" href="{{ route('stripee.show',$stripe->id=2) }}" ></a>
                    </button>
                   </form>
                </td>
           
        </tr>
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
