<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ControllerAdmin extends Controller
{
    public function index(Request $request){
        $admin = Admin::find($request->session()->get('id_users')); 
        
        return view('admin.index')->with(compact('admin'));
    }
}
