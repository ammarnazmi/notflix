<div class="mt-8">
    <a href="{{ route('tv.show', $tvShow['id']) }}">
        <img src="{{ $tvShow['poster_path'] }}" class="rounded-xl ease-in-out duration-150 hover:opacity-75 hover:scale-105">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvShow['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$tvShow['name']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <ion-icon name="star" class="text-orange-500"></ion-icon>
            <span class="ml-1">{{ $tvShow['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span>{{ $tvShow['first_air_date'] }}</span>
        </div>
    </div>
</div>
