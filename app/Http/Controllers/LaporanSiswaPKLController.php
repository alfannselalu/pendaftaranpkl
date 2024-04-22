<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Admin;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use App\Models\laporanSiswaPKL;
use App\Http\Controllers\Controller;

class LaporanSiswaPKLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.laporanStatusPKL.index', [
            'users' => User::with('department')->filter()->get(),
            'user_details' => UserDetails::all(),
            'admins' => Admin::all()
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
    public function show(laporanSiswaPKL $laporanSiswaPKL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(laporanSiswaPKL $laporanSiswaPKL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, laporanSiswaPKL $laporanSiswaPKL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(laporanSiswaPKL $laporanSiswaPKL)
    {
        //
    }
}
