<x-layout>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
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
                        <input value="{{$article->title}}" name= "title" type="text" class="form-control" id="title"
                            aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input value="{{$article->category}}"name= "category" type="text" class="form-control" id="category">
                    </div>
                   {{-- non serve inserire il campo autore perché viene preso da Auth::user --}}
                    <div class="mb-3">
                        <label for="body" class="form-label">Testo dell'articolo</label>
                        <textarea name="body" type="text" class="form-control" id="body">{{$article->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">immagine presente</label>
                        <img src="{{Storage::url($article->img)}}" alt="" height="200px">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Modifica l'immagine</label>
                        <input name= "img" type="file" class="form-control" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
