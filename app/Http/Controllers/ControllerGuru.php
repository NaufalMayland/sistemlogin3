<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\User;

class ControllerGuru extends Controller
{
    public function index(Request $request){

        // dd($request->session()->get('id_users'));
        $guru = Guru::find($request->session()->get('id_users'));
        return view('guru.index')->with(compact('guru', $guru));    
    }
}
