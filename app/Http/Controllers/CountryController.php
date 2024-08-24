<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function CountryPost(Request $request){
        $validate = validator($request->all(),[
            'country_name' => 'required|min:2',
        ]);
        if($validate->fails()){
            return redirect()->back()->with('nuetral-error', 'Some fields are empty');
        }
        $exists = DB::table('country')->where('country_name', $request->country_name)->exists();

        if ($exists) {
            return redirect()->back()->with('error', 'Country already exists');
        }
        $data = [
            'country_name' => $request->country_name
        ];
        $country = DB::table('country')->insert($data);
        if($country){
            return redirect('/Pop Admin Panel')->with('success', 'Country added successfully');
        }else{
            return redirect('/Pop Admin Panel')->with('error', 'Failed to add country');
        }
    }
    function EditCountry(Request $request, $countryid){
        $validate = $request->validate([
            'country_name' => 'nullable|min:4',
        ]);
        $exists = DB::table('country')->where('country_name', $request->country_name)->exists();

        if ($exists) {
            return redirect()->back()->with('error', 'Country already exists');
        }
        $data = [];
        switch ($validate) {
            case $request->filled('country_name'):
                $data['country_name'] = $validate['country_name'];
                break;
        }
        if(empty($data)){
            return redirect(route('Admin_Dashboard'))->with('nuetral-error', 'No changes made to this country');
        }else{
            $editcountry = DB::table('country')->where('country_id', $countryid)->update($data);
            if($editcountry){
                return redirect(route('Admin_Dashboard'))->with('success', 'Country modified successfully');
            } else {
                return redirect(route('Admin_Dashboard'))->with('error', 'Failed to update country');
            }
        }
    }
    function DeleteCountry(Request $request, $countryid){
        $DeleteCountry = DB::table('country')->where('country_id', $countryid)->delete();
        if($DeleteCountry){
            return redirect(route('Admin_Dashboard'))->with('success', 'Country deleted successfully');
        } else {
            return redirect(route('Admin_Dashboard'))->with('error', 'Failed to delete country');
        }
    }
}
