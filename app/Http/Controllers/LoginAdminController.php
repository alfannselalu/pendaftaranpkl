<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\View\View;

class   LoginAdminController extends Controller
{
    public function loginAdmin(): View
    {
        return view('admin.login.loginAdmin');
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
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');        
            }
    }

    /**
     * Destroy an authenticated session.
     */
    
    public function logoutAdmin(Request $request)
    {
        Auth::logout();
    
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect()->route('loginAdmin');
    }
}
