<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $top_4 = file_get_contents(public_path('assets/top-4.json'));
        $top_4 = json_decode($top_4, true);
        $trending = file_get_contents(public_path('assets/trending-movies.json'));
        $trending = json_decode($trending, true);
        $trending = array_slice($trending, 0, 16);
        $latest = file_get_contents(public_path('assets/latest-movies.json'));
        $latest = json_decode($latest, true);
        $latest = array_slice($latest, 0, 16);
        $series = file_get_contents(public_path('assets/tv-series.json'));
        $series = json_decode($series, true);
        $series = array_slice($series, 0,5);
        $anime = file_get_contents(public_path('assets/anime-movies.json'));
        $anime = json_decode($anime, true);
        $anime = array_slice($anime, 0,5);
        $movies = array_slice($latest,3, 5);
        return view('pages.home',compact('top_4', 'trending', 'latest','series','anime','movies'));
    }
}
