<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            [
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 2,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 2,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 5,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 6,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 6,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 7,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 7,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
            [
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 8,
                'start_date' => Carbon::create(2025, 5, 20)->toDateString(),
                'end_date' => Carbon::create(1995, 5, 29)->toDateString(),
                'total_price' => 48888900,
                'user_give_back' => false,
                'car_return_deadline' => false,
            ],
        ]);
    }
}
