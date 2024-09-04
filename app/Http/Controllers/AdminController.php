<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard(){
        $cast = DB::table('cast')->get();
        $countries = DB::table('country')->get();
        $genres = DB::table('genre')->get();
        $movies = DB::table('movie')->get();
        return view('pages.admin.dashboard', compact('cast','countries','genres','movies'));
    }
}
