<!DOCTYPE html>
<html>
<head>
    <title>Real Return On Investment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>
<body>
  
<div class="container" style="margin-top: 11em;">
  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="/img/stripeimage.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
  
                    <form 
                            role="form" 
                            action="{{ route('stripe.store') }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text' name="name">
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text' name="cardnumber">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Price</label> 
                                <select name="price" id="" autocomplete='off' class='form-control card-number' >
                                    <option value="100">100$</option>

                                </select>
                                
                               
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text' name="cvc">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text' name="expirationmonth">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text' name="expirationyear">
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                            </div>
                        </div>
                          
                    </form>
                </div>
            </div>        
        </div>
    </div>
      
</div>
  
</body>
  
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>

<!-- <body class="bg-ls">
<section class="login-page">
    <div class="container height-full-page">
        <div class="row align-items-center height-full-page">
            <div class="col-12">
                <div class="text-center">
                    <img src="/img/real.png">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 login-content-wrap">
                        <div class="login-content">
                            <p>Welcome to the District 10 App.  Please <b>Sign-in</b> or <b>Create a new account</b>.</p>
                            <p>District 10 is made up of 7 Chapters of the National Electrical Contractors Association (NECA) representing the Outside Electrical Construction industry in the United States of America.
                            <ul style="color: #e5e7ec;">
                                <li>American Line Builders Chapter</li>
                                <li>Missouri Valley Chapter</li>
                                <li>Northeast Line Constructors Chapter</li>
                                <li>Northwest Line Constructors Chapter</li>
                                <li>Southeastern Line Constructors Chapter</li>
                                <li>Southwestern Line Constructors Chapter</li>
                                <li>Western Line Constructors Chapter</li>
                            </ul>
                            </p>
                            <p>The D10 App will serve to provide you with access to Chapter content, Collective Bargaining Agreements, Jurisdictional Maps, and more.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="card" style="margin-bottom: 3em;">
                    
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <br>
                                <br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>@if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <br>
                                <br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                 @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>
                            

                            
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <br>
                            <div class="col-xs-5 col-sm-5 col-md-9">
                            <div class="form-group" style="margin-left: 3.5em;">
                            <div style="color: #0000FF;"> <strong><a href="{{url('register')}}">Create Account</a> </strong> &nbsp; |
                             &nbsp;<a href="{{ route('password.request') }}">Forgot Password</a>
                             
                          
                                </div>
                                        </div>
                                </div>
                                <br>
                                
                        </form>
                    </div>
                </div>
                    </div>
                </div>
               
            </div>
        </div>
</section>
</body>


 -->


</html>