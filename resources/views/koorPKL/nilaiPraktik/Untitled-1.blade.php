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
        $users = User::with('nilaiPraktik')->filter()->get();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();
        return view('koorPKL.nilaiPraktik.index', compact('users', 'koordinator_p_k_l_s'));
    }

    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $userId)
    {
        // Validate the request
        $request->validate([
            'aspek_penilaian' => 'required|string',
            'nilai' => 'required|numeric|between:0,10',
        ]);
    
        // Find the user
        $user = User::findOrFail($userId);
    
        // Create or update nilai_praktik record
        $user->nilaiPraktik()->updateOrCreate(
            [],
            [
                'aspek_penilaian' => $request->input('aspek_penilaian'),
                'nilai' => $request->input('nilai'),
            ]
        );
    
        // Redirect to the named route after successful submission
        return redirect()->route('nilai-praktik.index')->with('success', 'Nilai berhasil disimpan.');
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
    public function edit($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found.']);
        }

        $viewContent = View::make('koorPKL.nilaiPraktik.edit', compact('user'))->render();

        return response()->json(['html' => $viewContent]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId)
    {
        $request->validate([
            'aspek_penilaian' => 'required',
            'nilai' => 'required',
        ]);

        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found.']);
        }

        // Update or create the nilai_praktik record
        $user->nilaiPraktik()->updateOrCreate(
            [],
            [
                'aspek_penilaian' => $request->input('aspek_penilaian'),
                'nilai' => $request->input('nilai'),
            ]
        );

        return redirect()->route('nilai-praktik.index')->with('success', 'Nilai berhasil di ubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
