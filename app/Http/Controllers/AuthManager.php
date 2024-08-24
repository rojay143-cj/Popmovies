<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Schema;

class AuthManager extends Controller
{
    public function RegisterPost(Request $request)
    {
        $JSONajax = $request->all();

        try {
            $validate = $request->validate([
                'nickname' => 'required|min:4',
                'email' => 'required|email|unique:users',
                'username' => 'required|min:4',
                'password' => 'required|min:4|confirmed',
            ]);
            $password = bcrypt($validate['password']);
            $RegisterUser = DB::table('users')->insert([
                'role_id' => 10,
                'nickname' => $validate['nickname'],
                'email' => $validate['email'],
                'username' => $validate['username'],
                'password' => $password,
            ]);
            return response()->json([
                'message' => "Account created successfully",
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'message' => 'Failed to create user. Please try again!',
                'error' => $e->getMessage()
            ], 500);
        }
        
    }

    function LoginPost(Request $request)
    {
        $validate = validator($request->all(), [
            'login' => 'required|min:4',
            'password' => 'required|min:4'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', 'Please fill in all fields');
        }
        $ue = $request->input('login');
        $field = filter_var($ue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login_data = [
            $field => $ue,
            'password' => $request->input('password')
        ];
        if (Auth::attempt($login_data)) {
            $user = Auth::user();
            switch ($user->role_id) {
                case 1000:
                    return redirect()->intended(route('Admin_Dashboard'));
                case 100:
                case 10:
                    return redirect()->intended(route('homepage'));
                default:
                    return abort(403, 'Unauthorized Access.');
            }
        } else {
            return redirect()->back()->with('error', 'Incorrect Username or Password');
        }
    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('homepage'));
    }
}
