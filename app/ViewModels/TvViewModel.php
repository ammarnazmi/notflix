<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;
class TvViewModel extends ViewModel
{
    public $popularTv;
    public $genres;

    public function __construct($popularTv, $genres)
    {
        $this->popularTv = $popularTv;
        $this->genres = $genres;
    }

    public function popularTv()
    {
        return $this->formatTv($this->popularTv);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

    }

    private function formatTv($tv)
    {
        return collect($tv)->map(function($tvShow) {
            $genresFormat = collect($tvShow['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvShow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$tvShow['poster_path'],
                'vote_average' => $tvShow['vote_average'] * 10 . '%',
                'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d,Y'),
                'genres' => $this->genres(),
            ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'realese_date', 'genres', 'backdrop_path',
                'first_air_date'
            ]);
        });
    }
}
