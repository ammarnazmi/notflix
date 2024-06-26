@extends('layouts.main')

@section('content')
<section class="container justify-center items-center mx-auto mt-5">
    <div class="card__container swiper md:ps-5 md:pe-5 ">
        <div class="card__content ms-[1.75rem] me-[1.75rem] overflow-hidden rounded-[1.25rem] ">
            <div class="swiper-wrapper">
                @foreach ($popularMovies as $movie)
                    @if($loop->index < 5)
                        <article class="card__article w-[300px] rounded-[1.25rem] overflow-hidden flex relative swiper-slide">
                            <div class="card__image relative hover:opacity-75">
                                <img src="https://image.tmdb.org/t/p/w500/{{$movie['backdrop_path']}}" class="">
                            </div>
                            <div class="card__data absolute text-white p-3 left-0 bottom-0 w-full">
                                <div class="bg-black/30 backdrop-blur-md p-2 rounded-xl">
                                    <div class="text-xs flex items-center">
                                        <ion-icon name="star" class="text-orange-600"></ion-icon>
                                        <span class="ml-1">{{ $movie['vote_average'] }}</span>
                                        <span class="mx-2">{{ $movie['release_date']}}</span>
                                    </div>
                                    <h3 class="text-base font-semibold md:text-lg">{{ $movie['title'] }}</h3>
                                </div>
                            </div>
                        </article>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>

        <!--next and back buttons-->
        <div class="swiper-button-prev after:content-['']  rounded-full md:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 text-5xl bg-black/50 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </div>

        <div class="swiper-button-next after:content-[''] rounded-full md:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 bg-black/50 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </div> <!-- End of Movie Slider -->

    <div class="px-4 pt-16">
        <div class="popular-movies">
            <a href="#" class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-1">
                <h2 class="uppercase text-lg tracking-[.15em]">Popular Movies</h2>
                <ion-icon name="chevron-forward-outline" class="text-xl"></ion-icon>
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div><!-- end of popular movies -->

    <div class="px-4 pt-16 pb-5">
        <div class="popular-movies">
            <a href="#" class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-1">
                <h2 class="uppercase text-lg tracking-[.15em]">Now Playing</h2>
                <ion-icon name="chevron-forward-outline" class="text-xl"></ion-icon>
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8">
                @foreach ($nowPlaying as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div><!-- end of Now Playing movies -->
</section>



<script>
    window.onload = function(){
        let swiperCard = new Swiper('.card__content', {
            loop: true,
            spaceBetween: 32,
            grabCursor: true,
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                600:{
                    slidesPerView: 2,
                },
                1268:{
                    slidesPerView: 3,
                },
            }
        });
    }
</script>
@endsection
