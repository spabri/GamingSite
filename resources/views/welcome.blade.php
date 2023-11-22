<x-layout>
    <x-navbar/>
    <header>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($articles as $article)     
                <div class="swiper-slide"><img class="img-fluid"src="{{Storage::url($article->img)}}" alt=""></div>
                @endforeach
             
            </div>
            <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
          </div>
    </header>
    
    
</x-layout>