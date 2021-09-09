
@extends('app')
<link rel="stylesheet" href="/css/auth.css">
@section('content')
<body class="bg-ls">
<main class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <div class="text-center">
                    <img src="/img/real.png">
                </div>
                <div class="card" style="width: 50em; margin-left: -12em;  margin-bottom: 3em;">
                    
                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    
                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror cd-kk" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" style="margin-bottom: 2em;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            </td>
                            <td>&nbsp;</td>
                            <td>
                           

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror cd-kk" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Address" style="width: 23.5em; margin-bottom: 2em;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            </td>
                            </tr>
                            <tr>
                                <td>

                            <div class="form-group mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror cd-kk" name="password" required autocomplete="new-password" placeholder="Password" style="margin-bottom: 2em;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            </td>
                            <td>&nbsp;</td>
                            <td>
                            <div class="form-group mb-2">
                            <input id="password-confirm" type="password" class="form-control cd-kk" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="margin-bottom: 2em;">
                                <span class="text-danger"></span>
                            </div>
                            
                            </td>
                            </tr>
                            <tr>
                                <td>
                            
                        <div class="form-group mb-2">
                                <div class="form-group" style="margin-bottom: 2em;">
                              <div class="g-recaptcha" data-sitekey="6Lce3kAcAAAAAGvaArCJqWmkdKemtknxViDaVIKB"></div>
                                </div>
                             </div>
                            </td>
                            </tr>
                            <tr>
                                <td>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block" style="margin-bottom: 2em;">Submit</button>
                            </div>
                            <div style="color: #0000FF;"> <strong><a href="{{url('login')}}">Login</a>
                             
                          
                                </div>
                            </div>
                            </td>
                            </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
</div>





@endsection