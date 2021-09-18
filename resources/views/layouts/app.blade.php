<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Real Return On Investiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://kit.fontawesome.com/19faefb6e6.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css/css2?family=Poppins:wght@300;400;500;600&display=swap');
:root {
    --main-color: whitesmoke;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
.dec{
    text-decoration: none;
}
.AL-N1{
    margin-bottom: 1em;
    margin-top: 0.5em;
}
.bta1{
    height: 2em;
    width: 2em;
    border-radius: 2em;
    background-color: red;
    border-color: red;
    color: white;
}
.sidebar{
    width: 345px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
    transition: width 300ms;

}
.sidebar-brand{
    height: 68px;
    padding: 1rem 0rem 1rem 2rem;
    color: white;
    background-color: teal;
}
.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-menu li{
width: 100%;
margin-bottom: 1rem;
}
.sidebar-menu a{
    display: block;
    color:grey;
    font-size: 0.9rem;

}
.sidebar-menu a.active{
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}
.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;
}
#nav-toggle:checked + .sidebar{
    width: 70px;
}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
    
    text-align: center;
}
#nav-toggle:checked + .sidebar li a{
    padding-left: 0rem;
}
#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
    display: none;
}
#nav-toggle:checked ~ .main-content{
    margin-left: 70px;
}
#nav-toggle:checked ~ .main-content header{
    width: calc(100% - 70px);
    left: 70px;
}
.main-content{
    transition: margin-left 200ms;
    margin-left: 345px;
}
.tb-cl{
    background-color: #003399;
    color: #fff;
}
header{
    background: teal;
    display: flex;
    color: #fff;
    justify-content: space-between;
    padding: 1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    position: fixed;
    left: 345px;
    width: calc(100% - 345px);
    top: 0;
    z-index: 100;
    transition: left 300ms;
}
#nav-toggle {
    display: none;
    
}
header h2{
    color: #222;

}
header label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}
.search-wrapper{
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
}
.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}

.user-wrapper{
    display: flex;
    align-items: center;

}

.user-wrapper small{
    display: inline-block;
    color: var(--text-grey);
}




@media only screen and (max-width: 1200px){
    .sidebar{
        width: 70px;
    }
    .sidebar-brand,
    .sidebar li {
        padding-left: 1rem;
        text-align: center;
    }
    .sidebar li a{
        padding-left: 0rem;
    }
    .sidebar .sidebar-brand h2 span:last-child,
    .sidebar li a span:last-child{
        display: none;
    }
    .main-content{
        margin-left: 70px;
    }
    .main-content header{
        width: calc(100% - 70px);
        left: 70px;
    }
    
}

@media only screen and (max-width: 768px) {
   
    .search-wrapper{
        display: none;
    }
    .sidebar{
        left: -100% !important;
    }
    header h2{
        display: flex;
        align-items: center;
    }
    header h2 label {
        display: inline-block;
        background: var(--main-color);
        padding-right: 0rem;
        margin-left: 1rem;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center !important;
    }
    header h2 span{
        text-align: center;
        padding-right: 0rem;
    }
    header h2{
        font-size: 1.1rem;
    }
    header{
        width: 100% !important;
        left: 0 !important;
    }
    .main-content{
        width: 100%;
        margin-left: 0rem;
    }
    #nav-toggle:checked + .sidebar {
        left: 0 !important;
        z-index: 100;
        width: 345px;
    }
    
    #nav-toggle:checked + .sidebar .sidebar-brand,
    #nav-toggle:checked + .sidebar li {
        padding-left: 2rem;
        text-align: left;
    }
    #nav-toggle:checked + .sidebar li a{
        padding-left: 1rem;
    }
    #nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
    #nav-toggle:checked + .sidebar li a span:last-child{
        display: inline;
    }
    #nav-toggle:checked ~ .main-content{
        margin-left: 0rem !important;
    }

}
    </style>
</head>
<body>
      
 <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><img src="/img/real.png"  style="height: 1.5em;"></span><span>R.R.O.I</span></h2>
        </div>
        <div class="sidebar-menu">
           
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="dec"><span class="las la-home"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="dec"><span class="las la-users"></span>
                        <span>Manage Users</span></a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="dec"><span class="las la-users"></span>
                        <span>Manage Role</span></a>
                </li>
                <li>
                    <a href="{{ route('products.create') }}" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Register House</span></a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Houses</span></a>
                </li>
                <li>
                    <a href="{{ route('sharelinklist') }}" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Share Link to Pay House</span></a>
                </li>
                <li>
                    <a href="{{ route('contract.create') }}" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Make Contract</span></a>
                </li>
                <li>
                    <a href="{{ route('contract.index') }}"class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Purchase Agreement</span></a>
                </li>
                <li>
                    <a href="{{ route('stripee.index') }}" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Payments</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle" style="color: white;">
                    <span class="las la-bars"> </span>

                </label>
                

            </h2>
            <div class="user-wrapper" >
            <span>Welcome</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>{{ Auth::user()->name }} </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('logout') }}" >
            <a class="fas fa-power-off" style="color: white; text-decoration: none;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            
            </div>
        </header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <!-- <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="">Manage Product</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>