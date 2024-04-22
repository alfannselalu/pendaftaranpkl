<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\nilaiPraktik;
use Illuminate\Http\Request;
use App\Models\KoordinatorPKL;

class nilaiPrakerinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.nilaiPrakerin.index', [
            'nilaiPraktiks' => nilaiPraktik::with('user')->get(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
