<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class ActorViewModel extends ViewModel
{
    public $actor;
    public $social;
    public $credits;

    public function __construct($actor, $social, $credits)
    {
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d,Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => $this->actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w500/'.$this->actor['profile_path']
                : 'https://via.placeholder.com/300x450',
        ]);
    }

    public function social()
    {
        return collect($this->social)->merge([
            'facebook' => $this->social['twitter_id']
                ? 'https://facebook.com/'.$this->social['facebook_id']
                : null,
            'instagram' => $this->social['instagram_id']
                ? 'https://instagram.com/'.$this->social['instagram_id']
                : null,
        ]);
    }

    public function knownForMovies()
    {
        $castTitles = collect($this->credits)->get('cast');

        return collect($castTitles)->where('media_type', 'movie')
            ->sortByDesc('popularity')
            ->take(5)
            ->map(function($movie) {
                return collect($movie)->merge([
                    'poster_path' => $movie['poster_path']
                        ? 'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
                        : 'https://via.placeholder.com/185x278',
                    'title' => isset($movie['title'])
                        ? $movie['title']
                        : 'Untitled',
                ]);
            }
        );
    }

    public function credits()
    {
        $castTitles = collect($this->credits)->get('cast');

        return collect($castTitles)->map(function($movie) {
            if (isset($movie['realese_date'])) {
                $realeseDate = $movie['release_date'];
            } elseif (isset($movie['first_air_date'])) {
                $realeseDate = $movie['first_air_date'];
            } else {
                $realeseDate = '';
            }

            if (isset($movie['title'])) {
                $title = $movie['title'];
            } elseif (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = '';
            }

            return collect($movie)->merge([
                'realese_date' => $realeseDate,
                'realese_year' => isset($realeseDate)
                    ? Carbon::parse($realeseDate)->format('Y')
                    : 'Future',
                'title' => $title,
                'character' => isset($movie['character'])
                    ? $movie['character']
                    : '',
            ]);
        })->sortbyDesc('release_date');
    }


}
