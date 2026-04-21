<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Level;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'level_id' => 1, // pastikan level admin sudah ada
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'nama' => 'Admin',
            'password' => Hash::make('admin123'), // ganti password sesuai keinginan
        ]);
    }
}

class LevelSeeder extends Seeder
{
    public function run()
    {
        Level::create([
            'level_id' => 1,
            'level_kode' => 'admin',
            'level_nama' => 'Administrator',
        ]);
    }
}