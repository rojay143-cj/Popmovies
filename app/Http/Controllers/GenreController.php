<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function GenrePost(Request $request){
        $validate = validator($request->all(),[
            'genre_name' => 'required|min:3',
        ]);
        if($validate->fails()){
            return redirect()->back()->with('nuetral-error', 'Some fields are empty');
        }
        $exists = DB::table('genre')->where('genre_name', $request->genre_name)->exists();

        if ($exists) {
            return redirect()->back()->with('error', 'Genre already exists');
        }
        $data = [
            'genre_name' => $request->genre_name
        ];
        $genre = DB::table('genre')->insert($data);
        if($genre){
            return redirect('/Pop Admin Panel')->with('success', 'Genre added successfully');
        }else{
            return redirect('/Pop Admin Panel')->with('error', 'Failed to add genre');
        }
    }
    function EditGenre(Request $request, $genreid){
        $validate = $request->validate([
            'genre_name' => 'nullable|min:4',
        ]);
        $exists = DB::table('genre')->where('genre_name', $request->genre_name)->exists();

        if ($exists) {
            return redirect()->back()->with('error', 'Genre already exists');
        }
        $data = [];
        switch ($validate) {
            case $request->filled('genre_name'):
                $data['genre_name'] = $validate['genre_name'];
                break;
        }
        if(empty($data)){
            return redirect(route('Admin_Dashboard'))->with('nuetral-error', 'No changes made to this genre');
        }else{
            $editgenre = DB::table('genre')->where('genre_id', $genreid)->update($data);
            if($editgenre){
                return redirect(route('Admin_Dashboard'))->with('success', 'Genre modified successfully');
            } else {
                return redirect(route('Admin_Dashboard'))->with('error', 'Failed to update genre');
            }
        }
    }
    function DeleteGenre(Request $request, $genreid){
        $Deletegenre = DB::table('genre')->where('genre_id', $genreid)->delete();
        if($Deletegenre){
            return redirect(route('Admin_Dashboard'))->with('success', 'genre deleted successfully');
        } else {
            return redirect(route('Admin_Dashboard'))->with('error', 'Failed to delete genre');
        }
    }
}
