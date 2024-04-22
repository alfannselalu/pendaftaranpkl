<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class IsKoorPKL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('koordinator')->check()){
            return redirect()->route('loginKoor')->with('error', 'Please Login First');
        }
        // // Cek apakah pengguna sudah login
        // if (!Auth::check()) {
        //     // Jika belum, lakukan proses login baru sesuai kebutuhan Anda
        //     // Contoh: Redirect ke halaman login baru
        //     return redirect('/loginKoor');
        // }

        return $next($request);
    }
}
