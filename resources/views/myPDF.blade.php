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
            <th width="80px" align="left">House Id</th>
            <th width="60px" align="left">Rooms</th>
            <th width="65px" align="left">Saloons</th>>
            <th width="100px" align="left">Extra House</th>
            <th width="200px" align="left">Location</th>
            <th width="80px" align="left">Invested</th>
            <th width="80px" align="left">Price</th>
        </tr>
        @foreach ($products as $product)
        <tr>
           <td>{{$product->houseid}}</td> 
           <td>{{$product->numberofroom}}</td> 
           <td>{{$product->numberofsaloons}}</td>  
           <td>{{$product->extrahouses}}</td> 
           <td>{{$product->houselocation}}</td>
           <td>${{$product->invested}}</td> 
           <td>${{$product->price}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>