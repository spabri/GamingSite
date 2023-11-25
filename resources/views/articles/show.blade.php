<x-layout>
    <x-navbar></x-navbar>
    <div class="container my-5 show-view">
        <div class="row">
            <div class="col-12 my-3 d-flex flex-column align-items-center justify-content-center">
                <h2 class="text-uppercase">{{ $article->title }}</h2>
                <h5>categoria: <span class="text-uppercase">{{ $article->category }}</span></h5>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($article->img) }}" class="w-100" alt="...">
            </div>
            <div class="col-12 col-md-4 mx-md-5">




                <p class=" mt-3">{{ $article->body }}</p>
                @if ($article->price)
                    <p>il prezzo medio è {{ $article->price }} €</p>
                @endif
                @if (count($article->consoles))

                    <p>Disponibile per:</p>
                    <ul>
                        @foreach ($article->consoles as $console)
                            <li>{{ $console->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Purtroppo questo gioco non è disponibile per nessuna console.</p>
                @endif
                <p class="">L'autore è <span class="text-capitalize">{{ $article->user->name }}</span></p>


                {{-- @if (Auth::id() == $article->user->id) --}}
                <div class="card-body">
                    <a href="{{ route('articles.edit', compact('article')) }}"
                        class="btn btn-custom rounded-0 card-link my-1">Modifica articolo</a>

                </div>
                <div class="card-body">
                    <form action="{{ route('articles.destroy', compact('article')) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-custom rounded-0 card-link my-1">Elimina articolo</button>
                    </form>

                </div>
                {{-- @endif --}}

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
