<x-layout>
    <x-navbar></x-navbar>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">

            @foreach ($articles as $article)
                <a href="{{ route('articles.show', compact('article')) }}"
                    class="card rounded-0 d-flex flex-column justify-content-between  col-md-3 col-12 my-3 card-custom">
                    
                        <div class= "d-flex align-items-center">
                            <img src="{{ Storage::url($article->img) }}" class="w-100 rounded-0" alt="...">
                        </div>
                        <div class="d-flex flex-column justify-content-between">
                            
                              <p class="card-text article-category">{{ $article->category }}</p>
                              <h5 class="card-title article-title">{{ $article->title }}</h5>
                              @if ($article->price)
                                
                              <button class="btn btn-primary w-50 rounded-0">
                                <div>€{{$article->price}}</div>
                              </button>
                              @endif
                            
                        </div>

                        
                </a>
            @endforeach

        </div>
    </div>
<x-footer></x-footer>
</x-layout>
