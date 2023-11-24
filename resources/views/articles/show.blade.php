<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->category }}</p>
                    <p class="card-text">L'autore è {{ $article->user->name }}</p>
                    <p class="card-text mt-3">{{ $article->body }}</p>
                    @if (count($article->consoles))
                        
                    <p>Disponibile per:</p>
                    <ul>
                    @foreach ($article->consoles as $console)
                        <li>{{$console->name}}</li>                            
                        @endforeach
                    </ul>
                    @else
                    <p>Purtroppo questo gioco non è disponibile per nessuna console.</p>
                    @endif
                </div>
                
                @if(Auth::id()==$article->user->id)
                <div class="card-body">
                    <a href="{{route('articles.edit',compact('article'))}}" class="card-link">Modifica articolo</a>
                    
                </div>
                <div class="card-body">
                    <form action="{{route('articles.destroy',compact('article'))}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a type="submit" class="btn btn-custom card-link">Elimina articolo</a>
                    </form>
                    
                </div>
                @endif
                
            </div>
        </div>
    </div>
</x-layout>
