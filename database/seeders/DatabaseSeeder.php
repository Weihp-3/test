<?php


namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // PENTING: Untuk enkripsi password


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun ADMIN
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kantin.com',
            'password' => Hash::make('password'), // Passwordnya 'password'
            'role' => 'admin',
            'nisn' => null,     // Admin tidak butuh NISN
            'balance' => 0,
        ]);
        // 2. Buat Akun KASIR
        User::create([
            'name' => 'Petugas Kasir',
            'email' => 'kasir@kantin.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
            'nisn' => null,
            'balance' => 0,
        ]);
        // 3. Buat Akun SISWA (Budi)
        User::create([
            'name' => 'Fulan Fulani',
            'email' => 'siswa@kantin.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'nisn' => '1234567890', // NISN Unik
            'balance' => 50000,     // Kita kasih saldo awal 50.000 buat tes belanja
        ]);
    }
}
