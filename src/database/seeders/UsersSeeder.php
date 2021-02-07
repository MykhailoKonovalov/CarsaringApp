<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'phone' => '+380500000001',
            'password' => bcrypt('admin228'),
            'role' => 2
        ],
        [
            'name' => 'User',
            'email' => 'user@test.com',
            'phone' => '+380500000002',
            'password' => bcrypt('secret'),
            'role' => 1
        ]
            ]);
    }
}
