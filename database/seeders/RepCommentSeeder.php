<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class RepCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rep_comments')->insert([
            [
                'review_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 4,
                'content' => 'cảm ơn',
            ],
            [
                'review_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 4,
                'content' => 'xin lỗi vì trải nghiệp không tốt của bạn',
            ],
        ]);
    }
}
