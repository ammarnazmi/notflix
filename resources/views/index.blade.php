@extends('layouts.main')

@section('content')
<section class="container justify-center items-center mx-auto mt-5">
    <div class="card__container swiper md:ps-5 md:pe-5 ">
        <div class="card__content ms-[1.75rem] me-[1.75rem] overflow-hidden rounded-[1.25rem] ">
            <div class="swiper-wrapper">
                <article class="card__article w-[300px] rounded-[1.25rem] overflow-hidden flex relative swiper-slide">
                    <div class="card__image relative">
                        <img src="https://wallpapercave.com/wp/wp4566625.jpg" class="">
                    </div>
                    <div class="card__data absolute text-white p-3 left-0 bottom-0 w-full">
                        <div class="bg-black/30 backdrop-blur-md p-2 rounded-xl">
                            <div class="text-xs gap-3 flex">
                                <span>7.3</span>
                                <span>2024</span>
                                <span>140m</span>
                            </div>
                            <h3 class="text-lg font-semibold md:text-2xl">King Kong KOng Ki</h3>
                        </div>
                    </div>
                </article>
                <article class="card__article w-[300px] rounded-[1.25rem] overflow-hidden flex relative swiper-slide">
                    <div class="card__image relative">
                        <img src="https://wallpapercave.com/wp/wp4566616.jpg" class="">
                    </div>
                    <div class="card__data absolute text-white p-3 left-0 bottom-0 w-full">
                        <div class="bg-black/30 backdrop-blur-md p-2 rounded-xl">
                            <div class="text-xs gap-3 flex">
                                <span>7.3</span>
                                <span>2024</span>
                                <span>140m</span>
                            </div>
                            <h3 class="text-lg font-semibold md:text-2xl">King Kong KOng Ki</h3>
                        </div>
                    </div>
                </article>
                <article class="card__article w-[300px] rounded-[1.25rem] overflow-hidden flex relative swiper-slide">
                    <div class="card__image relative">
                        <img src="https://wallpaperaccess.com/full/1349214.jpg" class="">
                        <!-- <img src="avatar-1.png" class=""> -->
                    </div>
                    <div class="card__data absolute text-white p-3 left-0 bottom-0 w-full">
                        <div class="bg-black/30 backdrop-blur-md p-2 rounded-xl">
                            <div class="text-xs gap-3 flex">
                                <span>7.3</span>
                                <span>2024</span>
                                <span>140m</span>
                            </div>
                            <h3 class="text-lg font-semibold md:text-2xl">King Kong KOng Ki</h3>
                        </div>
                    </div>
                </article>
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
            <a href="#" class="popular-movies-title flex gap-2  hover:text-red-600 font-semibold items-center">
                <h2 class="uppercase text-lg tracking-[.15em]">Popular Movies</h2>
                <ion-icon name="chevron-forward-outline" class="text-xl"></ion-icon>
            </a>
            <div class="grid grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" class="rounded-xl">
                    </a>
                    <div class="mt-2 items-center">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 gap-2 text-sm">
                            <ion-icon name="star" class="text-orange-600"></ion-icon>
                            <span>85%</span>
                            <span>|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            }
        });
    }
</script>
@endsection
