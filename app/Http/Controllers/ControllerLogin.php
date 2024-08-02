<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ControllerLogin extends Controller
{
    public function LoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->post();
        // dd($credentials);
            $user = User::where('email', $credentials['email'])->first();
            if(is_null($user)){
                return redirect()->back()->withErrors('Email dan Password tidak sesuai')->withInput();
            }

            if(!Hash::check($credentials['password'], $user->password)){
                return redirect()->back()->withErrors('Password tidak sesuai')->withInput();
            }

            $request->session()->put('id_users', $user->id_users);
            if($user->role=='admin'){
                return redirect('/admin');
            }elseif($user->role=='guru'){
                return redirect('/guru');
            }elseif($user->role=='siswa'){
                return redirect('/siswa');
            }
            else{
                return redirect()->back()->withErrors('Akun tidak ada!')->withInput();
            }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
