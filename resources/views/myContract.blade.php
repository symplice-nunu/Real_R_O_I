<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <div>
     <h2>{{$company}}</h2> <h4 align="right">{{$date}}</h4>
     <p>{{$location}}</p>
     <p>{{$email}}</p>
     <p>{{$contact}} / {{$contact1}}</p>
    </div>
    <h2 align="center">{{ $title }}</h2>
   
   <div class="container">
    <table class="table table-bordered" border="1" style="border-collapse: collapse;">
        <tr class="tb-cl">
            <th width="25px" align="left">No</th>
            <th width="140px" align="left">E Name</th>
            <th width="130px" align="left">Buyer Name</th>
            <th width="65px" align="left">House Id</th>
            <th width="60px" align="left">P Type</th>
            <th width="75px" align="left">H Location</th>
            <th width="50px" align="left">Date</th>
        </tr>
        @foreach ($contract as $contra)
        <tr>
           <td>{{$contra->id}}</td> 
           <td>{{$contra->empname}}</td>  
           <td>{{$contra->buyername}}</td>    
           <td>{{$contra->houseid}}</td> 
           <td>${{$contra->paymenttype}}</td>    
           <td>{{$contra->location}}</td>
           <td>{{$contra->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>