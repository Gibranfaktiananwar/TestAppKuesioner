<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat user superadmin
        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin'),
            'role' => 'superadmin', 
        ]);

        // Membuat user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        // Membuat user Responden
        User::create([
            'name' => 'RespondenSekolah',
            'email' => 'respondensekolah@gmail.com',
            'password' => Hash::make('respondensekolah'),
            'role' => 'respondensekolah',
        ]);


        // Membuat user Responden
        User::create([
            'name' => 'RespondenGuru',
            'email' => 'respondenguru@gmail.com',
            'password' => Hash::make('respondenguru'),
            'role' => 'respondenguru',
        ]);

        // Membuat user Responden
        User::create([
            'name' => 'RespondenMurid',
            'email' => 'respondenmurid@gmail.com',
            'password' => Hash::make('respondenmurid'),
            'role' => 'respondenmurid',
        ]);

        // Membuat user mahasiswa
        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('mahasiswa'),
            'role' => 'mahasiswa',
        ]);
    }
}
