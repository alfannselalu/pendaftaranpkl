<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\KoordinatorPKL;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'username' => ['required', 'string'],
            'nama_koor' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    
        KoordinatorPKL::insert([
            'username' => $validatedData['username'],
            'nama_koor' => $validatedData['nama_koor'],
            'email' => $validatedData['email'],
            'password' => bcrypt('password'),
        ]);
        
        return redirect()->route('loginKoor')->with('success', 'Koor Berhasil Terdaftar');
    }
}

        
                // event(new Registered($koorPKL));
        
                // Auth::login($koorPKL);