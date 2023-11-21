<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('articles.index')}}">Articoli disponibili</a>
                </li>
                
                {{-- ONLY GUESTS --}}
                @guest
                    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area personale
                    </a>
                    
                    <ul class="dropdown-menu">
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
                    <a class="nav-link active" aria-current="page" href="{{route('articles.create')}}">Inserisci articolo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    
                    <ul class="dropdown-menu">
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
