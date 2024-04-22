<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\KoordinatorPKL;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;

class KoordinatorPKLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koorPKL.dataTables.dataKoorPKL.index', [
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->filter()->get()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koorPKL.dataTables.dataKoorPKL.create', [
            'departments' => Department::all()
        ]);
        

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_koor' => 'required|string',
            'username' => 'required|string', 
            'email' => 'required|string', 
            'department_id' => 'required',
            'image' => 'required',
            'password' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('koor-photos');
            $validatedData['image'] = $imagePath;
        }

        KoordinatorPKL::create([
            'nama_koor' => $validatedData['nama_koor'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'posisi' => $validatedData['posisi'],
            'image' => $validatedData['image'],
            'password' => $validatedData['password'],
        ]);
        // KoordinatorPKL::create($validatedData);

        return redirect('/dataKoor')->with('success', 'Koordinator berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KoordinatorPKL $koordinatorPKL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $koordinatorPKL = KoordinatorPKL::findOrFail($id);
        $departments = Department::all();
        $koordinator_p_k_l_s = KoordinatorPKL::with('department')->get();

        return view('koorPKL.dataTables.dataKoorPKL.edit', compact('koordinatorPKL', 'departments', 'koordinator_p_k_l_s'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_koor' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'department_id' => 'required',
            'image' => 'required',
        ]);

        $koordinatorPKL = KoordinatorPKL::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('koor-photos', 'public');
            $validatedData['image'] = $imagePath;
        }

        $koordinatorPKL->update($validatedData);

        return redirect('/dataKoor')->with('success', 'Data Koor has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $koordinatorPKL = KoordinatorPKL::findOrFail($id);
        $koordinatorPKL->delete();

        return redirect('/dataKoor')->with('fail', 'Koordinator has been deleted!');
    }
}
