
@extends('layouts.main')

@section('content')
    <div class="tvShow-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{$tvShow['poster_path']}}" alt="{{ $tvShow['original_name'] }}" class="w-64 md:w-96 rounded-xl">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $tvShow['original_name'] }}</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <ion-icon name="star" class="text-orange-500"></ion-icon>
                        <span class="ml-1">{{ $tvShow['vote_average'] }} </span>
                        <span class="mx-2">|</span>
                        <span>{{ $tvShow['first_air_date']}}</span>
                        <span class="mx-2">|</span>
                        <span>
                            {{ $tvShow['genres'] }}
                        </span>
                    </div>

                    <p class="text-gray-300 mt-8">
                       {{ $tvShow['overview'] }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach ($tvShow['crew'] as $crew)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div x-data="{ isOpen: false}">
                        <div class="mt-12">
                            @if ($tvShow['videos']['results'])
                                <button
                                @click="isOpen = true"
                                class="items-center bg-red-500 inline-flex text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-600 transition ease-in-out duration-150">
                                    <ion-icon name="play-circle-outline" class="text-2xl"></ion-icon>
                                    <span class="ml-2">Play Trailer</span>
                                </button>

                                <template x-if="isOpen">
                                    <template x-if="isOpen">
                                        <div
                                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto backdrop-blur-md bg-white/30"
                                        >
                                        <div class="container mx-auto lg:px-32 rounded-xl overflow-y-auto">
                                            <div class="bg-gray-900 rounded-xl">
                                                <div class="flex justify-end pr-4 pt-2">
                                                    <button
                                                        @click="isOpen = false"
                                                        @keydown.escape.window="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body px-8 py-8">
                                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                                        <iframe
                                                        class="responsive-iframe absolute top-0 left-0 w-full h-full rounded-lg"
                                                        src="https://www.youtube.com/embed/{{ $tvShow['videos']['results'][0]['key'] }}" style="border:0;"
                                                        allow="autoplay; encrypted-media"
                                                        allowfullscreen></iframe>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End of tvShow info-->

    <div class="tvShow-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <div class="popular-tvShows-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-3">
                <h2 class="uppercase text-xl font-semibold tracking-[.15em]">Cast</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($tvShow['cast'] as $cast)
                    @if ($cast['profile_path'] != null)
                        <div class="mt-8">
                            <a href="{{ route('actors.show', $cast['id']) }}" class="">
                                <img src="https://image.tmdb.org/t/p/w500/{{$cast['profile_path']}}" class="rounded-xl hover:scale-105 hover:opacity-75 ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <div class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $cast['character'] }}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
