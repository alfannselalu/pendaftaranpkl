<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoordinatorPKL;
use Illuminate\Support\Facades\Hash;


class RegisterKoordinator extends Controller
{
    public function KoorRegister()
    {
        return view('koorPKL.register.koorRegister');
    }

    public function KoorRegisterCreate(Request $request)
    {
        KoordinatorPKL::insert([
            'nama_koor' => $request->nama_koor,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('loginKoor')->with('success', 'Koor Berhasil Terdaftar');
    }
}
