<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CekRoleGuru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::find($request->session()->get('id_users'));

        if (is_null($user)) {
            return redirect('/');
        }
        $guru = Guru::find($user->id_users);

        if ($guru) {
            $isKelas = Kelas::where('id_guru', $guru->nip)->exists();
            $isMapel = Mapel::where('id_guru', $guru->nip)->exists();

            if ($isKelas) {
                return $next($request);
            } elseif ($isMapel) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
