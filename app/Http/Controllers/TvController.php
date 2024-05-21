<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;

class TvController extends Controller
{
    public function index()
    {
        $popularTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $viewModel = new TvViewModel(
            $popularTv,
            $genres,
        );

        return view('tv.index', $viewModel);
    }

    public function show($id)
    {
        $tvShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/'.$id."?append_to_response=credits,videos,images")
            ->json();

        $viewModel = new TvShowViewModel($tvShow);

        return view('tv.show', $viewModel);
    }
}
