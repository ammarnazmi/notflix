@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="" alt="parasite" class="w-64 md:w-96 rounded-xl">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <ion-icon name="star" class="text-orange-500"></ion-icon>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Action</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore similique autem deserunt sed illum esse, a quae, sit laboriosam tempora id nobis aspernatur sapiente, voluptatem repellat aut voluptatum consectetur porro?
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Bong Joon-ho</div>
                                <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                            </div>
                            <div class="ml-8">
                                <div>Han Jin-won</div>
                                <div class="text-sm text-gray-400"> screenplay</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-600 transition ease-in-out duration-150">
                            <ion-icon name="play-circle-outline" class="text-2xl"></ion-icon>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End of Movie info-->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">
                cast
            </h2>
        </div>
    </div>
@endsection
