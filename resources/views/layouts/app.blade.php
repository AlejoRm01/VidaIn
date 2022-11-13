<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'VidaIn')</title>
</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"><img width="200" height="45" src="{{   asset('/img/Logo1.png')   }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a class="nav-link active" href="{{ route('login') }}">Iniciar sesión</a>
                    @else    
                    <a class="nav-link active" href="{{ route('home.index') }}">{{ Auth::user()->getName() }}</a>
                    <a class="nav-link active" href="{{ route('aliment.index') }}">Arma tu plato</a>
                    <a class="nav-link active" href="{{ route('dishHouse.index') }}">Recetas</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">Nosotros</a>  
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active"
                            onclick="document.getElementById('logout').submit();">Cerrar sesión</a>
                            @csrf
                    </form>   
                    @endguest   
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>
    
    <div class="container-fluid bg-primary text-center p-3">
        <div class="row">
            <div class="col">
                <div class="row justify-content-center">
                    <img class="img-responsive img-resize" src="{{  url('/img/cook.png')  }}" >
                </div>
                <div class="row">
                    <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('home.select') }}">
                            {{ __('Cocinar') }}
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-center">
                <img class="img-responsive img-resize" src="{{  url('/img/home.png')  }}" >
                </div>
                <div class="row">
                    <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('home.index') }}">
                            {{ __('Inicio') }}
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-center">
                <img class="img-responsive img-resize" src="{{  url('/img/profile.png')  }}" >
                </div>
                <div class="row">
                    <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('dishHouse.index') }}">
                            {{ __('Mi Perfil') }}
                    </a>
                </div>
            </div>
        </div>
    </footer>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>