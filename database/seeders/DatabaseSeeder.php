<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@basschool.com',
            'password' => Hash::make('1234567'),
            'siswa_id' => 1,
            'is_admin' => 1,
        ]);

        DB::table('siswas')->insert([
            'nis' => '1234567',
            'full_name' => 'admin',
            'first_name' => 'admin',
            'last_name' => null,
            'jurusan' => 'Administrator',
            'slug' => 'administrator-1234567',
            'email' => 'admin@basschool.com',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '01-01-2001',
            'avatar' => 'avatar.jpg',
            'mobile' => '0812345678',
        ]);
    }
}
