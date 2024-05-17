@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="parasite" class="w-64 md:w-96 rounded-xl">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['original_title'] }}</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <ion-icon name="star" class="text-orange-500"></ion-icon>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%'}} </span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }} @if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>

                    <p class="text-gray-300 mt-8">
                       {{ $movie['overview'] }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach ($movie['credits']['crew'] as $crew)
                                @if ($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{ $crew['name'] }}</div>
                                        <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-12">
                        @if (count($movie['videos']['results']) > 0)
                        <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="items-center bg-red-500 inline-flex text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-600 transition ease-in-out duration-150">
                            <ion-icon name="play-circle-outline" class="text-2xl"></ion-icon>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End of Movie info-->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <div class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-3">
                <h2 class="uppercase text-xl font-semibold tracking-[.15em]">Cast</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                         @if ($cast['profile_path'] != null)
                            <div class="mt-8">
                                <a href="#" class="">
                                    <img src="https://image.tmdb.org/t/p/w500/{{$cast['profile_path']}}" class="rounded-xl hover:scale-105 hover:opacity-75 ease-in-out duration-150">
                                </a>
                                <div class="mt-2">
                                    <div class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $cast['character'] }}</div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
