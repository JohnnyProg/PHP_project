<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="Kawusia" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="życzymy najlepszej kawusi" content="kawa" />
        <meta name="Jan Gryta" content="" />
        <title>Smacznej kawusi - Projekt</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{URL::asset('assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('css/lightbox.css')}}" />
        <link href="{{URL::asset('css/mobiscroll.javascript.min.css')}}" rel="stylesheet" />
        <script src="{{URL::asset('js/mobiscroll.javascript.min.js')}}"></script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Smacznej Kawusi</div>
                <div class="list-group list-group-flush">
                    <a href="{{url('/pages/kawy')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="coffe">Kawy</a>
                    <a href="{{url('/pages/jedzenie')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="food">Coś słodkiego</a>
                    <a href="{{url('/pages/historia')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="zestawy">Historia zamówień</a>
                    <a href="{{url('/pages/zamow')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="form_zestaw">Złóż zamówienie</a>
                    <a href="../pages/comments')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="galllery">Opinie</a>
                    @guest
                    @else
                    @if (\Auth::user()->admin == 1)
                    <a href="{{url('/admin/users')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="galllery">Przegląd użytkowników</a>
                    <a href="{{url('/admin/orders')}}" class="list-group-item list-group-item-action list-group-item-light p-3"  id="galllery">Przegląd zamówień</a>
                    @endif
                    @endguest
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            @guest    
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#!">Link</a></li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('editUserForm')}}">Edytuj konto</a>
                                        <a class="dropdown-item" href="{{route('showUser')}}">Pokaż konto</a>
                                        <div class="dropdown-divider"></div>
                                        <a
                                            class="dropdown-item" 
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();""
                                        >
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid" id="mainContent">
                    @yield('content')
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL::asset('js/test.js')}}"></script>
    </body>
</html>
