<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PDF Generator') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> --}}
</head>
<body>
    <div class="w-100 bg-dark">
        <div class="container text-white py-2 clearfix">
            <div class="w-50 float-left">
                <small>
                    Hi ! create, maintain, publish, and share your resume for free !!!                
                </small>                
            </div>
            <div class="w-50 float-right">
                <ul class="nav justify-content-end">
                    @if($_SERVER['REQUEST_URI'] != '/')
                        <li class="nav-item mr-3">
                            <a class="nav-link p-0 hvr-links" href="/">
                                {{ __('Home') }}
                            </a>
                        </li>
                    @endif
                    @guest
                        <li class="nav-item mr-3">
                            <a class="nav-link p-0 hvr-links" href="{{ route('login') }}">
                                {{ __('Login') }}
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 hvr-links" href="{{ route('register') }}">
                                {{ __('Register') }}
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>
                     @else
                        <li class="nav-item mr-3">
                            <a class="nav-link p-0 hvr-links" href="/timeline">
                                {{ __('Timeline') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle p-0 text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ fullname() }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-light text-left" href="/profile">
                                    {{ __('Profile') }}
                                    <i class="fas fa-chalkboard-teacher float-right mt-1 text-light"></i>
                                </a>
                                <a class="dropdown-item text-light text-left" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="fas fa-sign-out-alt float-right mt-1 text-light"></i>
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
    </div>
    <div class="clearfix"></div>
    <main>
        @yield('content')
    </main>

    <footer id="footer-main" class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="w-100 text-white mt-2 text-capitalize">
                        <i>all rights reserved &copy; 2018, Ranjan Rimal.</i>
                    </div>
                    <div class="w-100 text-white mb-1">
                        <i class="fab fa-facebook-square fa-lg mr-2"></i>
                        <i class="fab fa-twitter-square fa-lg mr-2"></i> 
                        <i class="fab fa-linkedin fa-lg mr-2"></i> 
                    </div>                    
                </div>
                <div class="col-sm">
                    <div class="w-100 text-white mt-2 text-capitalize">
                        <ul class="list-inline clearfix text-right">
                            <li class="list-inline-item mt-2">
                                <a href="#" class="hvr-links">Terms</a>
                            </li>
                            <li class="list-inline-item mt-2">
                                <a href="#" class="hvr-links">About</a>
                            </li>
                            <li class="list-inline-item mt-2">
                                <a href="#" class="hvr-links">Contact</a>
                            </li>
                        </ul>
                    </div>                   
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{asset('js/datatable.js')}}"></script> --}}
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script src="{{asset('js/mixed.js')}}"></script>
    @yield('script')
</body>
</html>
