<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            
                        @else
                            <li class="nav-item dropdown">
                                    <li></li><a class="nav-link" href="{{ route('orderings.create') }}">{{ __('Sukurti naują užsakymą') }}</a></li>
                                    <li></li><a class="nav-link" href="{{ route('admins.create') }}">{{ __('Sukurti naują gaminio tipą') }}</a></li>
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
        <div class="col-md-2">
               
            @yield('sidebar')
            <h2>MANO UŽSAKYMAI</h2>
        @show
    </div>
    
    <div class="col-md-10">
    <main class="py-4">
            
        @yield('content')
    </main>
</div>
    </div>
<!--Footer-->
<footer class="page-footer font-small mdb-color lighten-3 pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row my-4">

            <!--First column-->
            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Žemelapis</h5>
                @php 
                    $place = urldecode("Vilnius, Lithuania, Ozo g. 6") ;
                    
                @endphp

                <iframe
                  width="600"
                  height="250"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDj2dNPApZsVhqeYrpku6OTLR4dM-LRPE8
                    &q={{ $place }}" allowfullscreen>
                </iframe>


            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 col-lg-2 ml-auto">
                <h5 class="text-uppercase mb-4 font-weight-bold">Apie</h5>
                <ul class="list-unstyled">
                    <p>
                        <a href="#!">Projektai</a>
                    </p>
                    <p>
                        <a href="#!">Apie mus</a>
                    </p>
                    <p>
                        <a href="#!">Blog</a>
                    </p>
                
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Adresas</h5>
                <!--Info-->
                <p>
                    <i class="fa fa-home mr-3"></i> Vilnius, Ozo g. 6</p>
               
                <p>
                    <i class="fa fa-phone mr-3"></i> +370 684 66 214</p>
                <p>
                    <i class="fa fa-print mr-3"></i> rimkeviciusss@gmail.com</p>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

        </div>
    </div>
    <!--/.Footer Links-->

   

</footer>
<!--/.Footer-->
                      
                  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
