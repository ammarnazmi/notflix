@extends('layouts.main')

@section('content')
<section class="container justify-center items-center mx-auto mt-5">
    <div class="px-4 py-16">
        <div class="popular-movies">
            <a href="#" class="popular-movies-title flex gap-2 w-fit text-red-600 font-semibold items-center bg-black/50 rounded-full px-3 py-1">
                <h2 class="uppercase text-lg tracking-[.15em]">Popular Tv Show</h2>
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8">
                @foreach ($popularTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow"/>
                @endforeach
            </div>
        </div>
    </div><!-- end of popular Tv Shows -->
</section>
@endsection
