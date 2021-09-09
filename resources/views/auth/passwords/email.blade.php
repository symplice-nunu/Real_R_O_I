@extends('app')

@section('content')

<body class="bg-ls2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="text-center">
                    <img src="/img/real.png">
                </div>
            <div class="card" style="height: 20em; border-radius: 1em;">
              

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                        <div class="form-group row mb-0">
                        </div>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="margin-top: 5em; margin-bottom: 3em; height: 3.5em;" placeholder="E-mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <div style="color: #0000FF;"> <strong><a href="{{url('login')}}">Login</a> </strong>
                             
                          
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
