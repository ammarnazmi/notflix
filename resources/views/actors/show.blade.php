@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_pathgit push ']}}" alt="" class="w-64 md:w-96 rounded-xl">
                <ul class="flex items-center mt-4 gap-2">
                    <li class="hover:opacity-75 hover:scale-110">
                        <a href="" title="Facebook">
                            <ion-icon name="logo-facebook" class="text-2xl"></ion-icon>
                        </a>
                    </li>
                    <li class="hover:opacity-75 hover:scale-110">
                        <a href="" title="Insta">
                            <ion-icon name="logo-instagram" class="text-2xl"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span class="ml-1">{{ $actor['birthday'] }} ({{ $actor['age'] . ' Years' }})</span>
                        <span class="mx-2">|</span>
                        <span>{{ $actor['place_of_birth'] }}</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        {{ $actor['biography'] }}
                    </p>

                    <h4 class="font-semibold mt-12">Known For</h4>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg-grid-cols-5 gap-8">
                        <div class="mt-4">
                            <a><img src="" class="hover:opacity-75 transition ease-in-out duration-150 hover:scale-105 rounded-xl"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End of Movie info-->

    <div class="movie-credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <div class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-3">
                <h2 class="uppercase text-xl font-semibold tracking-[.15em]">Credits</h2>
            </div>
        </div>
    </div> <!--End of credits-->
@endsection
