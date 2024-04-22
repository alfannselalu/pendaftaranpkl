<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use Illuminate\Http\Request;

class AdminPKLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataTables.dataAdmin.index', [
            'admins' => Admin::filter()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dataTables.dataAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_admin' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('admin-photos');
            $validatedData['image'] = $imagePath;
        }

        Admin::create([
            'nama_admin' => $validatedData['nama_admin'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'image' => $validatedData['image'],
            'password' => $validatedData['password'],
        ]);

        return redirect('/dataAdmin')->with('success', 'Admin berhasil ditambahkan!');
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
        $adminPKL = Admin::findOrFail($id);
        $admins = Admin::all();
        // $departments = Department::all();

        return view('admin.dataTables.dataAdmin.edit', compact('adminPKL','admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_admin' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'image' => 'required',
        ]);
    
        $adminPKL = Admin::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('admin-photos', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $adminPKL->update($validatedData);
    
        return redirect('/dataAdmin')->with('success', 'Data Admin has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adminPKL = Admin::findOrFail($id);
        $adminPKL->delete();

        return redirect('/dataAdmin')->with('fail', 'Admin has been deleted!');
    }
}
