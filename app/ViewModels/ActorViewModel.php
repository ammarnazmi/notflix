<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class ActorViewModel extends ViewModel
{
    public $actor;

    public function __construct($actor)
    {
        $this->actor = $actor;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d,Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => $this->actor['profile_path']
            ? 'https://image.tmdb.org/t/p/w500/'.$this->actor['profile_path']
            : 'https://via.placeholder.com/300x450',
        ])->dump();
    }
}
