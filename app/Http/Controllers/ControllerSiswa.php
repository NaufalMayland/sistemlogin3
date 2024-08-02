<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class ControllerSiswa extends Controller
{
    public function index(Request $request){
        $siswa = Siswa::find($request->session()->get('id_users'));
        return view ('siswa.index')->with(compact('siswa'));
    }
}
