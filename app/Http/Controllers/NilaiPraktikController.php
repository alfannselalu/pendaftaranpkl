<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\nilaiPraktik;
use Illuminate\Http\Request;
use App\Models\KoordinatorPKL;
use Illuminate\Support\Facades\View;


class NilaiPraktikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koorPKL.nilaiPraktik.index', [
            'nilaiPraktiks' => nilaiPraktik::with('user')->get(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }

    public function create()
    {
        $users = User::all();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();
        return view('koorPKL.nilaiPraktik.create', compact('users', 'koordinator_p_k_l_s'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_sekolah' => 'required',
            'nilai' => 'required|string',
            'aspek_penilaian' => 'required',
        ]);

        nilaiPraktik::create($validatedData);

        return redirect('/nilai-praktik')->with('message', 'New Nilai has been added!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nilaiPraktik = nilaiPraktik::findOrFail($id);
        $users = User::all();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();

        return view('koorPKL.nilaiPraktik.edit', compact('nilaiPraktik', 'users','koordinator_p_k_l_s'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|string',
            'nama_sekolah' => 'required',
            'nilai' => 'required|string',
            'aspek_penilaian' => 'required',
        ]);

        $nilaiPraktik = nilaiPraktik::findOrFail($id);
        $nilaiPraktik->update($validatedData);

        return redirect('/nilai-praktik')->with('message', 'Nilai has been updated!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilaiPraktik = nilaiPraktik::findOrFail($id);
        $nilaiPraktik->delete();

        return redirect('/nilai-praktik')->with('fail', 'Nilai has been deleted!');
    }
}
