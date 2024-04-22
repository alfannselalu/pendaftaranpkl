<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoordinatorPKL;
use App\Models\KategoriAgenda as ModelsKategoriAgenda;

class KategoriAgenda extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koorPKL.agenda.kategori.index', [
            'kategoris' => ModelsKategoriAgenda::filter()->get(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koorPKL.agenda.kategori.create', [
            'kategoris' => ModelsKategoriAgenda::all(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|max:255',
        ]);
        
        ModelsKategoriAgenda::create($validatedData);

        return redirect('/kategoriAgenda')->with('message', 'New Kategori Has Been Added');
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
    public function edit(ModelsKategoriAgenda $kategori, $id)
    {
        $kategori = ModelsKategoriAgenda::find($id);
        
        return view('koorPKL.agenda.kategori.edit', [
            'kategori' => $kategori,
            'kategoris' => ModelsKategoriAgenda::all(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelsKategoriAgenda $kategori, $id)
    {
        $rules = [
            'kategori' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        ModelsKategoriAgenda::where('id',$id, $kategori->id)
        ->update($validatedData);

        return redirect('/kategoriAgenda')->with('message', 'Kategori Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsKategoriAgenda $kategori, $id)
    {
        $kategori = ModelsKategoriAgenda::find($id)->delete();

        return redirect('/kategoriAgenda')->with('fail', 'Kategori Has Been Deleted');
    }
}