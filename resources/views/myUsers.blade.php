<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <div>
     <h2>{{$company}}</h2> <h4 align="right">{{$date}}</h4>
     <p>{{$location}}</p>
     <p>{{$email}}</p>
     <p></p>
     <!-- <img src="{{$real}}" alt=""> -->
     <p>{{$contact}} / {{$contact1}}</p>
    </div>
    <h2 align="center">{{ $title }}</h2>
   
   <div class="container">
    <table class="table table-bordered" border="1" style="border-collapse: collapse;">
        <tr class="tb-cl">
            <th width="50px" align="left">No</th>
            <th width="200px" align="left">Name</th>
            <th width="240px" align="left">Email</th>
            <th width="160px" align="left">Date</th>
        </tr>
        @foreach ($users as $user)
        <tr>
           <td>{{$user->id}}</td> 
           <td>{{$user->name}}</td>    
           <td>{{$user->email}}</td>
           <td>{{$user->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>