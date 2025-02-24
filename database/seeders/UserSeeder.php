<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
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
                'name' => 'hoang1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'hoang1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'user'
            ],
            [
                'name' => 'Pham viet hoang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'hoang2@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'user'
            ],
            [
                'name' => 'Dao lan anh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'lanh@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'user'
            ],
            [
                'name' => 'Nguyen van admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'admin'
            ],
            [
                'name' => 'hoang3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'hoang3@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'user'
            ],
            [
                'name' => 'hoang4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email' => 'hoang4@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123123'),
                'phone' => '0123456789',
                'address' => 'ha noi',
                'role' => 'user'
            ],
        ]);
    }
}
