
<!DOCTYPE html>
<html>
<head>
    <title>Real Return On Investiment</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Share Link for Payment</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ route('sharelink-form.store') }}">
                  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>House Id:</strong>
                                        <input type="text" name="houseid" class="form-control" placeholder="House Id" value="{{ old('houseid') }}">
                                        @if ($errors->has('houseid'))
                                            <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Permission to Pay House:</strong>
                                        <select name="title" id="" class="form-control">
                                            <option value="Permission to Pay House from Real Construction">Permission to Pay House from Real Construction. Click the link Below to pay</option>
                                            </select>
                                       
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Payment Link:</strong>
                                        <select name="application" id=""  class="form-control">
                                            <option value="http://localhost:8000/stripe">http://localhost:8000/stripe</option>

                                
                                        </select>
                                         @if ($errors->has('application'))
                                            <span class="text-danger">{{ $errors->first('application') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Send Link</button>
                                <button class="btn btn-primary btn-submit"> <a href="{{ route('sharelinklist') }}" style="color: white; text-decoration: none;">Back</a> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>