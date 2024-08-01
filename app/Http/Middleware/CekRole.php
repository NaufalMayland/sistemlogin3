<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = User::find($request->session()->get('id_users'));
        
        if ($role == 'admin') {
            if ($user->id_users && Admin::find($user->id_users)) {
                return $next($request);
            }
        } elseif ($role == 'guru') {
            if ($user->id_users && Guru::find($user->id_users)) {
                return $next($request);
            }
        } elseif ($role == 'siswa') {
            if ($user->id_users && Siswa::find($user->id_users)) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
