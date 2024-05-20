@extends('layouts.main')

@section('content')
<section class="container justify-center items-center mx-auto mt-5">
    <div class="px-4 py-16">
        <div class="popular-movies">
            <a href="#" class="popular-actor-title flex gap-2 w-fit text-red-600 font-semibold items-center bg-black/50 rounded-full pl-3 py-1 pr-2">
                <h2 class="uppercase text-lg tracking-[.15em]">Popular Actor</h2>
            </a>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                @foreach ( $popularActors as $actor)
                    <div class="actor mt-8">
                        <a href="{{ route('actors.show', $actor['id']) }}" >
                            <img src="{{ $actor['profile_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150 rounded-xl hover:scale-105" alt="profile image">
                        </a>
                        <div class="mt-2">
                            <div class="text-lg">{{ $actor['name'] }}</div>
                            <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- end of popular movies -->

    <div class="flex justify-between pb-16">
        @if ($previous)
            <a href="/actors/page/{{ $previous }}" class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full px-3 py-1">
                <ion-icon name="chevron-back-outline" class=""></ion-icon>
                <h2 >Previous</h2>
            </a>
        @endif

        @if($next)
            <a href="/actors/page/{{ $next }}" class="popular-movies-title flex gap-2 w-fit text-red-600 hover:text-white font-semibold items-center bg-black/50 rounded-full px-3 py-1">
                <h2 >Next</h2>
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </a>
        @endif
    </div>
</section>
@endsection
