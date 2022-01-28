<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kesiswaan',
            'email' => 'kesiswaan@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Kesiswaan'
        ]);
        DB::table('users')->insert([
            'name' => 'Pembina PMR',
            'email' => 'pembina_pmr@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Pembina_PMR'
        ]);
        DB::table('users')->insert([
            'name' => 'Pembina PRAMUKA',
            'email' => 'pembina_pramuka@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Pembina_PRAMUKA'
        ]);
        DB::table('users')->insert([
            'name' => 'Pembina ROHIS',
            'email' => 'pembina_rohis@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Pembina_ROHIS'
        ]);
        DB::table('users')->insert([
            'name' => 'Ketua PMR',
            'email' => 'ketua_pmr@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Ketua_PMR'
        ]);
        DB::table('users')->insert([
            'name' => 'Ketua PRAMUKA',
            'email' => 'ketua_pramuka@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Ketua_PRAMUKA'
        ]);
        DB::table('users')->insert([
            'name' => 'Ketua ROHIS',
            'email' => 'ketua_rohis@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Ketua_ROHIS'
        ]);
        DB::table('users')->insert([
            'name' => 'Anggota PMR',
            'email' => 'anggota_pmr@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Anggota'
        ]);
        DB::table('users')->insert([
            'name' => 'Anggota PRAMUKA',
            'email' => 'anggota_pramuka@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Anggota'
        ]);
        DB::table('users')->insert([
            'name' => 'Anggota ROHIS',
            'email' => 'anggota_rohis@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'Anggota'
        ]);
    }
}
