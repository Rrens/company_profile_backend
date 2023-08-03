<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('admin'),
                // ''
            ],
            [
                'name' => 'super admin',
                'email' => 'superadmin@admin.com',
                'role' => 'superadmin',
                'password' => Hash::make('admin'),
                // ''
            ],
        ]);
    }
}
