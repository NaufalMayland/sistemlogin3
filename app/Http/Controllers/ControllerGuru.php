<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;

class ControllerGuru extends Controller
{
    public function index(Request $request){

        $guru = Guru::find($request->session()->get('id_users'));

        $guruwali = Kelas::where('id_guru', $guru->nip)->exists();
        $gurumapel = Mapel::where('id_guru', $guru->nip)->exists();
        $kelas = $guru->kelas;
        $mapel = $guru->mapel;
        // dd($kelas)

        return view('guru.index')->with(compact('guru', 'guruwali', 'gurumapel', 'kelas', 'mapel'));    
    }
}

