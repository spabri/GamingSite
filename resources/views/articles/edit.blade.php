<x-layout>
    <x-navbar>
    </x-navbar>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 my-3 d-flex justify-content-center">
                <h2>Modifica {{$article->title}}</h2>
              </div>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('articles.update',compact('article'))}}"enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- snippet errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        {{-- redirecting with flashed session data --}}
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{$article->title}}" name= "title" type="text" class="form-control rounded-0" id="title"
                            aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input value="{{$article->category}}"name= "category" type="text" class="form-control rounded-0" id="category">
                    </div>
                   {{-- non serve inserire il campo autore perché viene preso da Auth::user --}}
                    <div class="mb-3">
                        <label for="body" class="form-label">Testo dell'articolo</label>
                        <textarea name="body" type="text" class="form-control rounded-0" id="body" style="height:300px">{{$article->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input value="{{$article->price}}"name="price" type="float" class="form-control rounded-0"
                            id="price">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Immagine presente:</label>
                        <img src="{{Storage::url($article->img)}}" alt="" height="200px">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Modifica l'immagine</label>
                        <input name= "img" type="file" class="form-control rounded-0" id="img">
                    </div>
                    @foreach ($consoles as $console)
                        <div class="form-check mb-3">
                            <input 
                            @if ($article->consoles->contains($console)) checked 
                            @endif 
                            class="form-check-input" type="checkbox" name="consoles[]"
                                value="{{ $console->id }}" id="flexCheckDefault">
                            <label class="form-check-label rounded-0" for="flexCheckDefault"> {{ $console->name }}</label>
                        </div>
                    @endforeach
                    

                    <button type="submit" class="btn btn-custom rounded-0">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
