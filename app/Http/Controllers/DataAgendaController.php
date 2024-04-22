<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dataAgenda;
use Illuminate\Http\Request;
use App\Models\KategoriAgenda;
use App\Models\KoordinatorPKL;

class DataAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koorPKL.agenda.dataAgenda.index', [
            'agendas' => dataAgenda::with('user','kategori_agendas')->get(),
            'kategori_agendas' => KategoriAgenda::all(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $kategori_agendas = KategoriAgenda::all();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();
        return view('koorPKL.agenda.dataAgenda.create', compact('users', 'kategori_agendas','koordinator_p_k_l_s'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'user_id' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required|string',
            'kategori_id' => 'required',
        ]);
    
        dataAgenda::create($validatedData);
        
        return redirect('/dataAgenda')->with('message', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataAgenda $dataAgenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataAgenda = dataAgenda::findOrFail($id);
        $users = User::all();
        $kategori_agendas = KategoriAgenda::all();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();

        return view('koorPKL.agenda.dataAgenda.edit', compact('dataAgenda', 'users', 'kategori_agendas','koordinator_p_k_l_s'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'user_id' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required|string',
            'kategori_id' => 'required',
        ]);

        $dataAgenda = dataAgenda::findOrFail($id);
        $dataAgenda->update($validatedData);

        return redirect('/dataAgenda')->with('message', 'Data Agenda has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dataAgenda = dataAgenda::findOrFail($id);
        $dataAgenda->delete();

        return redirect('/dataAgenda')->with('fail', 'Data Agenda has been deleted!');
    }
}
