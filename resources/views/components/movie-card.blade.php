<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}" class="">
        <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" class="rounded-xl ease-in-out duration-150 hover:opacity-75 hover:scale-105">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <ion-icon name="star" class="text-orange-500"></ion-icon>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . '%'}}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y') }}</span>
        </div>
    </div>
</div>