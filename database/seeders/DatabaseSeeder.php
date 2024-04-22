<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\KoordinatorPKL;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'nama' => 'Muhammad Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        //     'image' => ''
        //     ]);
            
        KoordinatorPKL::create([
            'nama_koor' => 'Muhammad Rudi',
            'username' => 'rudi',
            'department_id' => '1',
            'email' => 'rudi@gmail.com',
            'password' => Hash::make('password'),
            'image' => ''
        ]);
        
        Admin::create([
            'nama_admin' => 'Muhammad admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'image' => ''
            ]);
    }
}
