<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginKoorPKLRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\View\View;
use App\Models\KoordinatorPKL;


class LoginKoordinatorController extends Controller
{
    public function loginKoor(): View
    {
        return view('koorPKL.login.loginKoor');
        // return Inertia::render('Auth/Login', [
        //     'canResetPassword' => Route::has('password.request'),
        //     'status' => session('status'),
        // ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $check = $request->all();
        if(Auth::guard('koordinator')->attempt(['email' => $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('koor.dashboard');
        }else{
            return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');        
            }
    }

    /**
     * Destroy an authenticated session.
     */
    
    public function logoutKoor(Request $request)
    {
        Auth::logout();
    
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect()->route('loginKoor');
    }
}
