<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    Public $popularMovies;
    public $nowPlaying;
    public $genres;

    public function __construct($popularMovies, $nowPlaying, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlaying = $nowPlaying;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        return $this->formatMovies($this->popularMovies);
    }

    public function nowPlaying()
    {
        usort($this->nowPlaying, function($a, $b) {
            return strtotime($b['release_date']) - strtotime($a['release_date']);
        });

        return $this->formatMovies($this->nowPlaying);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

    }

    private function formatMovies($movies)
    {
        return collect($movies)->take(12)->map(function($movie) {
            $genresFormat = collect($movie['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y'),
                'genres' => $this->genres(),
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'realese_date', 'genres', 'backdrop_path',
                'release_date'
            ]);
        });
    }
}
