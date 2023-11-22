<x-layout>
    <x-navbar></x-navbar>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    @foreach($articles as $article)
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->category}}</p>
        </div>
        <div class="card-body">
          <a href="{{route('articles.show',compact('article'))}}" class="card-link">Visualizza dettagli</a>
          
        </div>
      </div>
    @endforeach
</x-layout>