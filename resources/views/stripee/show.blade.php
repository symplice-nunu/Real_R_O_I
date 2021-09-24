@extends('layouts.app')


@section('content')



<div class="container">
   
<table class="table" style="margin-top: 2em;" id="tblMembers" border="0">

  <thead>
     <tr>
         <td> <span>
<img src="/img/real.png" alt="" style="width: 7em;">
      </span></td>
     </tr>
     <tr>
         <td>
      <p>Real Construction</p>

         </td>
     </tr>
     <tr>
         <td>
      <p>KK 705 St, Kigali</p>
             
         </td>
     </tr>
     <tr>
         <td>
      <p>info@real.rw</p>
             
         </td>
     </tr>
     <tr>
         <td>
      <p>+250 788306817 / +250 788314255</p>
             
         </td>
     </tr>
      <br>
     <tr>
         <td>
      <h3 align="center">Payment Process for<strong>
           {{ $stripee->name }}
      </strong></h3>  
         </td>
     </tr>
      
  
    <tr>
      <th scope="col" colspan="4" >
               {{ $stripee->name }}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Money to be paid</td>
    <th scope="row">${{ 120000}}</th>
    </tr>
    <tr>
    <td>Paid</td>
    <th scope="row">${{ $stripee->price}}</th>
    </tr>
    <tr>
    <td>Debt</td>
    <th scope="row">${{ 120000 - $stripee->price}}</th>
    </tr>
    <tr>
    <td colspan="3" align="center">
        <strong style="margin-left: -30em;">Last Payment Date</strong> </td>
    </tr>
    <td scope="row" colspan="3" align="center">{{ $stripee->created_at}}</td>
    </tr>
  </tbody>
</table>

<br />
    <input class="btn btn-success" type="button" id="btnExport" value="Download" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblMembers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var allMembersDataInformation = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(allMembersDataInformation).download("Personal-Payment.pdf");
                }
            });
        });
    </script>
</div>
@endsection