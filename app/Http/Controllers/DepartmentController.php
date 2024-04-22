<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.department.index', [
            // 'departments' => Department::filter()->get()
            'departments' => Department::filter()->get(),
            'admins' => Admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create', [
            'departments' => Department::all(),
            'admins' => Admin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'posisi' => 'required|max:255',
        ]);
        
        Department::create($validatedData);

        return redirect('/department')->with('message', 'New Department Has Been Added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('admin.department.edit', [
            'department' => $department,
            'departments' => Department::all(),
            'admins' => Admin::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Department $department)
{
    $rules = [
        'posisi' => 'required|max:255',
        'status' => 'required|in:0,Kosong,Tersedia',
    ];

    $validatedData = $request->validate($rules);

    $department->update($validatedData);

    $message = '';

    if ($request->status == 'Kosong') {
        $message = 'Posisi Ini Sedang Kosong.';
    } elseif ($request->status == 'Tersedia') {
        $message = 'Posisi Ini Tersedia.';
    }

    return redirect('/department')->with('success', 'Department Has Been Updated')->with('status_message', $message);
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        Department::destroy($department->id);

        return redirect('/department')->with('fail', 'Department Has Been Deleted');
    }
}
