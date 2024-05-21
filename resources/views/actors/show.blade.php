@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_path']}}" alt="" class="w-64 md:w-96 rounded-xl">
                <ul class="flex items-center mt-4 gap-2">
                    @if ($social['facebook'])
                        <li class="hover:opacity-75 hover:scale-110">
                            <a href="{{ $social['facebook'] }}" title="Facebook">
                                <ion-icon name="logo-facebook" class="text-3xl"></ion-icon>
                            </a>
                        </li>
                    @endif

                    @if ($social['instagram'])
                        <li class="hover:opacity-75 hover:scale-110">
                            <a href="{{ $social['instagram'] }}" title="Insta">
                                <ion-icon name="logo-instagram" class="text-3xl"></ion-icon>
                            </a>
                        </li>
                    @endif
                </ul>
            </div><!--End of Social-->

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

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                        @foreach ($knownForMovies as $knownForMovie)
                            <div class="mt-4">
                                <a href="{{ route('movies.show', $knownForMovie['id']) }}"><img src="{{ $knownForMovie['poster_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150 hover:scale-105 rounded-xl"></a>
                                <a href="#" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">
                                    {{ $knownForMovie['title'] }}
                                </a>
                            </div>
                        @endforeach
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
            <ul class="list-disc leading-loose pl-5 mt-8">
                @foreach ($credits as $credit)
                    <li>
                        {{ $credit['realese_year'] }} &middot;
                        <strong>{{ $credit['title'] }}</strong> as
                        {{ $credit['character'] }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div> <!--End of credits-->
@endsection
