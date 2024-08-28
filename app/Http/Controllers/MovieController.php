<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function GetMovies(){
        $movies = DB::table('movie')
        ->LeftJoin('uploads','movie.movie_id','=','uploads.movie_id')
        ->select(
            'movie.movie_id',
            'movie.title', 
            'movie.type', 
            'movie.description',
            'movie.release_date',
            'movie.rt_score',
            'uploads.poster_url',
            'uploads.trailer_url',
            'uploads.video_url',
        )
        ->get();
        if($movies){
            return response()->json([
                'movies' => $movies
            ]);
        }else{
            return response()->json([
                'message' => 'Could not found the movies in your database',
                'status' => 401
            ], 401);
        }
    }
    public function MoviePost(Request $request){
        $ajaxJSON = json_decode($request->input('GCP'), true);
        $genre = $ajaxJSON['genre'];
        $country = $ajaxJSON['country'];
        $team = $ajaxJSON['team'];

        $genreIds = DB::table('genre')->whereIn('genre_name', $genre)->pluck('genre_id');
        $countryIds = DB::table('country')->whereIn('country_name',$country)->pluck('country_id');
        $teamIds = DB::table('cast')->whereIn('cast_name',$team)->pluck('cast_id');
        
        $validationMessage = [
            'title.required' => 'Please enter the movie title',
            'type.required' => 'The video type is required',
            'release_date.required' => 'Please provide a release date.',
            'description.required' => 'A brief description of the movie is required.',
            'rt_score.required' => 'Please enter the Rotten Tomatoes score.',
        ];

        $validate = $request->validate([
            'title' => 'required|unique:movie,title',
            'type' => 'required',
            'release_date' => 'required',
            'description' => 'required',
            'rt_score' => 'required',
        ],$validationMessage);

        function movie_genre($genreID, $movieID){
            foreach($genreID as $genre){
                DB::table('moviegenre')->insert([
                    'genre_id' => $genre,
                    'movie_id' => $movieID,
                ]);
            }
        }
        function movie_country($countryID, $movieID){
            foreach($countryID as $country){
                DB::table('moviecountry')->insert([
                    'country_id' => $country,
                    'movie_id' => $movieID,
                ]);
            }
        }
        function movie_cast($castID, $movieID){
            foreach($castID as $cast){
                DB::table('moviecast')->insert([
                    'cast_id' => $cast,
                    'movie_id' => $movieID,
                ]);
            }
        }
        if($validate){
            $movieId = DB::table('movie')->insertGetId([
                'title' => $validate['title'],
                'type' => $validate['type'],
                'release_date' => $validate['release_date'],
                'description' => $validate['description'],
                'rt_score' => $validate['rt_score']
            ]);
            $movie = DB::table('movie')->where('movie_id',$movieId)->first();
            movie_genre($genreIds, $movieId);
            movie_country($countryIds, $movieId);
            movie_cast($teamIds, $movieId);
            if($movie){
                return response()->json([
                    'message' => "A new movie { $movie->title } has been added successfully."
                ]);
            }
        }else{
            return response()->json([
                'message' => "Failed to add the movie please try again."
            ]);
        }
    }

    function GetEditMovie(Request $request){
        $movie_id = json_decode($request->movie_id, true);

        $fetcheditmovie = DB::table('movie')
        ->join('moviegenre','movie.movie_id','=','moviegenre.movie_id')
        ->leftJoin('genre','moviegenre.genre_id','=','genre.genre_id')
        ->join('moviecountry','movie.movie_id','=','moviecountry.movie_id')
        ->leftJoin('country','moviecountry.country_id','=','country.country_id')
        ->join('moviecast','movie.movie_id','=','moviecast.movie_id')
        ->leftJoin('cast','moviecast.cast_id','=','cast.cast_id')
        ->where('moviegenre.movie_id', $movie_id)
        ->get();

        $result = [
            'movie' => $fetcheditmovie->first(),
            'genres' => $fetcheditmovie->pluck('genre_name')->unique()->values(),
            'countries' => $fetcheditmovie->pluck('country_name')->unique()->values(),
            'casts' => $fetcheditmovie->pluck('cast_name')->unique()->values(),
        ];
        return $result;
    }
    
    public function EditMovie(Request $request){
        $categories = json_decode($request->input('categorizeGCP'), true);

        $form = $request->validate([
            'title' => 'nullable|string|min:3|unique:movie,title',
            'type' => 'nullable|string|min:3',
            'release_date' => 'nullable|date',
            'description' => 'nullable|string|min:3',
            'rt_score' => 'nullable|int|min:1'
        ]);
        
        $data = array_filter($form, function($value){
            return $value !== null && $value !== '';
        });

        if(empty($data)){
            return response()->json([
               'message' => 'Failed to update the movie'
            ]);
        }else{
            $edit_movie = DB::table('movie')->where('movie_id',$categories['movie_id'])->update($data);
            if($edit_movie){
                return response()->json([
                    'message' => 'Movie modified successfully'
                ]);
            }else{
                return response()->json([
                    'message' => 'No changes made to ' . $categories['movie_title']
                ]);
            }
        }
    }

    function DeleteMovie(Request $request){
        $movie_id = json_decode($request->movie_id,true);
        $delete_movie = DB::table('movie')
        ->where('movie_id',$movie_id)
        ->delete();

        return $movie_id;
    }
}
