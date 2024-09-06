<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadsController extends Controller
{
    public function Upload_Post(Request $request){
        $uploadData = $request->validate([
            'movie_id' => 'required|unique:uploads,movie_id',
            'poster_url' => 'required',
            'trailer_url' => 'required',
            'video_url' => 'required'
        ],
        [
            'movie_id.unique' => 'This movie is already taken, Please select another!'
        ]
        );
        $data = [
            'movie_id' => $uploadData['movie_id'],
            'poster_url' => $uploadData['poster_url'],
            'trailer_url' => $uploadData['trailer_url'],
            'video_url' => $uploadData['video_url'],
        ];
        $sqlUpoads = DB::table('uploads')->insert($data);
        if ($sqlUpoads) {
            return response()->json([
                'success' => 'Movie data uploaded successfully',
            ],200);
        } else {
            return response()->json([
                'error' => 'Failed to upload the movie data, Please try again!'
            ],500);
        }
    }
}
