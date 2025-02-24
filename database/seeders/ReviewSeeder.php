<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 2,
                'comment' => 'Chiếc xe này sở hữu thiết kế sang trọng và hiện đại, thu hút mọi ánh nhìn. Động cơ mạnh mẽ, vận hành êm ái, mang đến trải nghiệm lái tuyệt vời. Tiết kiệm nhiên liệu tối ưu nhưng vẫn đảm bảo hiệu suất vượt trội. Nội thất tiện nghi, công nghệ tiên tiến, tạo cảm giác thoải mái trên mọi hành trình. ',
            ],
            [
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 3,
                'comment' => 'Chiếc xe này sở hữu thiết kế sang trọng và hiện đại, thu hút mọi ánh nhìn. Động cơ mạnh mẽ, vận hành êm ái, mang đến trải nghiệm lái tuyệt vời. Tiết kiệm nhiên liệu tối ưu nhưng vẫn đảm bảo hiệu suất vượt trội. Nội thất tiện nghi, công nghệ tiên tiến, tạo cảm giác thoải mái trên mọi hành trình. ',
            ],
            [
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 4,
                'comment' => 'Chiếc xe này sở hữu thiết kế sang trọng và hiện đại, thu hút mọi ánh nhìn. Động cơ mạnh mẽ, vận hành êm ái, mang đến trải nghiệm lái tuyệt vời. Tiết kiệm nhiên liệu tối ưu nhưng vẫn đảm bảo hiệu suất vượt trội. Nội thất tiện nghi, công nghệ tiên tiến, tạo cảm giác thoải mái trên mọi hành trình. ',
            ],
            [
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 5,
                'comment' => 'Chiếc xe này sở hữu thiết kế sang trọng và hiện đại, thu hút mọi ánh nhìn. Động cơ mạnh mẽ, vận hành êm ái, mang đến trải nghiệm lái tuyệt vời. Tiết kiệm nhiên liệu tối ưu nhưng vẫn đảm bảo hiệu suất vượt trội. Nội thất tiện nghi, công nghệ tiên tiến, tạo cảm giác thoải mái trên mọi hành trình. ',
            ],
            [
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 4,
                'comment' => 'tạm ổn',
            ],
            [
                'user_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 3,
                'comment' => 'hơi tệ',
            ],
            [
                'user_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 2,
                'comment' => 'quá tệ',
            ],
            [
                'user_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'car_id' => 1,
                'rating' => 1,
                'comment' => 'không bao giờ có lần 2',
            ],
        ]);
    }
}
