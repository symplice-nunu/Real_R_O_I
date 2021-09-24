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
            <th width="50px" align="left">No</th>
            <th width="260px" align="left">Name</th>
            <th width="125px" align="left">Amount</th>
            <th width="220px" align="left">Date</th>
        </tr>
        @foreach ($stripe as $strip)
        <tr>
           <td>{{$strip->id}}</td> 
           <td>{{$strip->name}}</td>    
           <td>${{$strip->price}}</td>
           <td>{{$strip->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>