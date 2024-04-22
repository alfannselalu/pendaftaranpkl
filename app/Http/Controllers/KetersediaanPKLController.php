<?php

namespace App\Http\Controllers;

use App\Models\KetersediaanPKL;
use App\Models\Department;
use Illuminate\Http\Request;

class KetersediaanPKLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.cek-ketersediaan.index', [
            // 'departments' => Department::filter()->get()
            'departments' => Department::filter()->get()
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
    public function show(KetersediaanPKL $ketersediaanPKL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KetersediaanPKL $ketersediaanPKL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KetersediaanPKL $ketersediaanPKL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KetersediaanPKL $ketersediaanPKL)
    {
        //
    }
}
