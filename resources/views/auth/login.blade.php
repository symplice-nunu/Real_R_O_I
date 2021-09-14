
@extends('logs.app')

@section('content')



<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>َLogin</title>
    

  </head>

  <body style="background-color: teal;">

<form class="box" onsubmit="return validate();" method="POST" action="{{ route('login') }}" style="background-color: lightskyblue;">
@csrf
 
  <div id="error_message"></div>
  <input type="text" name="email" id="email" placeholder="Email">

  <input type="password" name="password" id="password" placeholder="Password">
  <input type="submit" name="login_now_btn" value="Login">

  <div>
     <a href="{{ route('password.request') }}" style="text-decoration: none; color: #ffffff;">Forgot Password</a>
                             
                          
                                </div>

</form>
<script>
  function validate() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    



    var error_message = document.getElementById("error_message");

    error_message.style.padding = "10px";

    var text;
    
if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
if (password.length < 5) {
        text = "Please Enter valid Password.";
        error_message.innerHTML = text;
        return false;
    }
  
    return true;
}
</script>
  </body>

</html>

@endsection