<nav class="navbar navbar-expand-lg bg-body-tertiary "data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
            <img class="img-fluid imgCustom"src="/img/logo.png" alt="">
            <h5 class="mt-2">GameSite</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName()=='home') active @endif" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName()=='articles.index') active @endif" aria-current="page" href="{{route('articles.index')}}">Articoli disponibili</a>
                </li>
                
                {{-- ONLY GUESTS --}}
                @guest
                    
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area personale
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end rounded-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                </li>
                @endguest

                {{-- ONLY AUTHENTICATED USERS --}}
                @auth
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName()=='articles.create') active @endif" aria-current="page" href="{{route('articles.create')}}">Inserisci articolo</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end rounded-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('mail.contattaci')}}">Contattaci</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button class="nav-link" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
                        
            </ul>
            
        </div>
    </div>
</nav>
