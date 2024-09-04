<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadsController extends Controller
{
    public function Upload_Post(Request $request){
        $validate = $request->validate([
            'movie_id' => 'required|unique:uploads,movie_id',
            'poster_url' => 'required',
            'trailer_url' => 'required',
            'video_url' => 'required'
        ],
        [
            'movie_id.unique' => 'This movie is already taken, Please select another!'
        ]
        );

        if($validate){
            $data = [
                'movie_id' => $validate['movie_id'],
                'poster_url' => $validate['poster_url'],
                'trailer_url' => $validate['trailer_url'],
                'video_url' => $validate['video_url'],
            ];
            $sqlUpoads = DB::table('uploads')->insert($data);
            if($sqlUpoads){
                return response()->json([
                    'message' => 'Movie data uploaded successfully'
                ]);
            }else{
                return response()->json([
                    'message' => 'Failed to upload the movie data, Please try again!'
                ]);
            }
        }
    }
}
