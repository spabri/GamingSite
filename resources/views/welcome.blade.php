<x-layout>
    <x-navbar />
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <header class="my-3">
        <div class="swiper swiper1 mySwiper">
            <div class="swiper-wrapper">
                @foreach ($articles as $article)
                    <div class="swiper-slide swiper-slide1 position-relative">
                        <a href="{{ route('articles.show', compact('article')) }}" class="w-100 h-100">
                            <img class="img-fluid"src="{{ Storage::url($article->img) }}" alt="">
                            <p class="carousel-title position-absolute">{{ $article->title }}</p>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </header>

    {{-- SWIPER HOME CARDS --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper2 mySwiper2" style="height: 200px,width:100px">
                    <div class="swiper-wrapper">
                        @foreach ($articles as $article)
                            <div class="swiper-slide swiper-slide2">
                                <a href="{{ route('articles.show', compact('article')) }}" class="w-100 h-100">
                                    <img class=""src="{{ Storage::url($article->img) }}" alt="">
                                    <h6 class="text-light">{{$article->title}}</h6>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
<x-footer></x-footer>

</x-layout>
