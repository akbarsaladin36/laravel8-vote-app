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
        return DB::table('users')->insert([
            'user_username' => 'admin',
            'user_email' => 'admin@test.com',
            'user_password' => Hash::make('admin12345'),
            'user_roles' => 'super-admin',
            'created_at' => now()
        ]);
    }
}
