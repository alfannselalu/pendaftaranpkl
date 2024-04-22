<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.absensi.index', [
            'absensis' => Absensi::filter()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_masuk' => 'required|date_format:H:i',
            'jam_pulang' => 'required|date_format:H:i|after:jam_masuk',
            'nama_siswa' => 'required|string',
            'keterangan' => 'required|string',
        ]);
    
        Absensi::create($validatedData);
    
        return redirect('/absensi')->with('success', 'Absensi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //var_dump($absensi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        // $absensi = Absensi::find($id);

        return view('siswa.absensi.edit', [
            'absensi' => $absensi,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_masuk' => 'required|date_format:H:i',
            'jam_pulang' => 'required|date_format:H:i|after:jam_masuk',
            'nama_siswa' => 'required|string',
            'keterangan' => 'required|string',
        ]);
    
        // Proses pembaruan data setelah validasi berhasil
        // $absensi = Absensi::findOrFail($id);
        $absensi->update($validatedData);
    
        return redirect('/absensi')->with('success', 'Absensi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
{
    $absensi->delete();

    return redirect('/absensi')->with('fail', 'Absensi has been deleted!');
}
}