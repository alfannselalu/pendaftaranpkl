<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use App\Models\User;
use App\Models\Department;
use App\Http\Requests\StoreUserDetailsRequest;
use App\Http\Requests\UpdateUserDetailsRequest;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.pendaftaran.index', [
            // 'users' => User::all(),
            'user_details' => UserDetails::all()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.pendaftaran.create', [
            'users' => User::all(),
            'user_details' => UserDetails::all(),
            'departments' => Department::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserDetailsRequest $request)
    {
                // Validasi form menggunakan request yang sudah dibuat
                $validatedData = $request->validated();

                // Simpan gambar jika ada
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('user-photos');
                    $validatedData['image'] = $imagePath;
                }
        
                if ($request->hasFile('cv')) {
                    $cvPath = $request->file('cv')->store('siswa-photos');
                    $validatedData['cv'] = $cvPath;
                }
        
                // Simpan data siswa
                User::create([
                    'username' => $validatedData['username'],
                    'email' => $validatedData['email'],
                    'image' => $validatedData['image'],
                    'password' => $validatedData['password'],
                    'nama' => $validatedData['nama'],
                    'nama_sekolah' => $validatedData['nama_sekolah'],
                    'nama_pembimbing' => $validatedData['nama_pembimbing'],
                    'nomor_telepon' => $validatedData['nomor_telepon'],
                    'kelas' => $validatedData['kelas'],
                    'jurusan' => $validatedData['jurusan'],
                    'tanggal_bergabung' => $validatedData['tanggal_bergabung'],
                    'department_id' => $validatedData['department_id'],
                    // 'password' => bcrypt('password'),
                ]);
                
                UserDetails::create([
                    // 'user_id' => $validatedData['user_id'],
                    'alamat' => $validatedData['alamat'],
                    'tanggal_lahir' => $validatedData['tanggal_lahir'],
                    'jenis_kelamin' => $validatedData['jenis_kelamin'],
                    'cv' => $validatedData['cv'],
                ]);
                
                return redirect('/pendaftaran')->with('success', 'Data berhasil disimpan!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetails $userDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserDetailsRequest $request, UserDetails $userDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $userDetails)
    {
        //
    }
}
