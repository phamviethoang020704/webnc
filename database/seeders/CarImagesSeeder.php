<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class CarImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_Images')->insert([
            //audi/a4-2024
            [
                'car_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a4-2024/a4-2024-1.jpg',
            ],
            [
                'car_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a4-2024/a4-2024-2.webp',
            ],
            [
                'car_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a4-2024/a4-2024-3.jpg',
            ],
            [
                'car_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a4-2024/a4-2024-4.webp',
            ],
            [
                'car_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a4-2024/a4-2024-5.webp',
            ],
            //audi-a6-2025
            [
                'car_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a6-2025/a6-2025-1.jpg',
            ],
            [
                'car_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a6-2025/a6-2025-2.jpg',
            ],
            [
                'car_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a6-2025/a6-2025-3.jpg',
            ],
            [
                'car_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a6-2025/a6-2025-4.jpg',
            ],
            [
                'car_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a6-2025/a6-2025-5.webp',
            ],
            //audi/a7-2022
            [
                'car_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a7-2022/a7-2022-1.jpg',
            ],
            [
                'car_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a7-2022/a7-2022-2.webp',
            ],
            [
                'car_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a7-2022/a7-2022-3.png',
            ],
            [
                'car_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a7-2022/a7-2022-4.jpg',
            ],
            [
                'car_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a7-2022/a7-2022-5.png',
            ],
            //audi/q2-2021
            [
                'car_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q2-2021/q2-2021-1.jpg',
            ],
            [
                'car_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q2-2021/q2-2021-2.jpg',
            ],
            [
                'car_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q2-2021/q2-2021-3.jpg',
            ],
            [
                'car_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q2-2021/q2-2021-4.jpg',
            ],
            [
                'car_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q2-2021/q2-2021-5.jpg',
            ],
            //audi/q3-2024
            [
                'car_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q3-2024/q3-2024-1.jpg',
            ],
            [
                'car_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q3-2024/q3-2024-2.jpg',
            ],
            [
                'car_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q3-2024/q3-2024-3.jpg',
            ],
            [
                'car_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q3-2024/q3-2024-4.jpg',
            ],
            [
                'car_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q3-2024/q3-2024-5.jpg',
            ],
            //audi/q5-2021
            [
                'car_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q5-2021/q5-2021-1.jpg',
            ],
            [
                'car_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q5-2021/q5-2021-2.webp',
            ],
            [
                'car_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q5-2021/q5-2021-3.jpg',
            ],
            [
                'car_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q5-2021/q5-2021-4.jpg',
            ],
            [
                'car_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/q5-2021/q5-2021-5.jpg',
            ],

            //bentley/bentayga-2021
            [
                'car_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentayga-2021/bentayga-2021-1.jpg',
            ],
            [
                'car_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentayga-2021/bentayga-2021-2.jpg',
            ],
            [
                'car_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentayga-2021/bentayga-2021-3.jpg',
            ],
            [
                'car_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentayga-2021/bentayga-2021-4.jpg',
            ],
            [
                'car_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentayga-2021/bentayga-2021-5.jpg',
            ],
            //bentley/Bentley-Bentayga-W12-2017
            [
                'car_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-bentayga-w12-2017/bentley-bentayga-w12-2017-1.jpg',
            ],
            [
                'car_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-bentayga-w12-2017/bentley-bentayga-w12-2017-2.jpg',
            ],
            [
                'car_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-bentayga-w12-2017/bentley-bentayga-w12-2017-3.jpg',
            ],
            [
                'car_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-bentayga-w12-2017/bentley-bentayga-w12-2017-4.jpg',
            ],
            [
                'car_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-bentayga-w12-2017/bentley-bentayga-w12-2017-5.jpg',
            ],
            //bentley/Bentley-Continental-Gt-2008
            [
                'car_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gt-2008/bentley-continental-gt-2008-1.jpeg',
            ],
            [
                'car_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gt-2008/bentley-continental-gt-2008-2.jpeg',
            ],
            [
                'car_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gt-2008/bentley-continental-gt-2008-3.webp',
            ],
            [
                'car_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gt-2008/bentley-continental-gt-2008-4.jpeg',
            ],
            [
                'car_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gt-2008/bentley-continental-gt-2008-5.webp',
            ],
            //bentley/Bentley-Continental-GTS-V8-2023
            [
                'car_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gts-v8-2023/bentley-continental-gts-v8-2023-1.jpg',
            ],
            [
                'car_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gts-v8-2023/bentley-continental-gts-v8-2023-2.jpeg',
            ],
            [
                'car_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gts-v8-2023/bentley-continental-gts-v8-2023-3.jpg',
            ],
            [
                'car_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gts-v8-2023/bentley-continental-gts-v8-2023-4.jpg',
            ],
            [
                'car_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/bentley-continental-gts-v8-2023/bentley-continental-gts-v8-2023-5.jpg',
            ],
            //bentley/Continental-2023
            [
                'car_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/continental-2023/continental-2023-1.jpg',
            ],
            [
                'car_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/continental-2023/continental-2023-2.jpg',
            ],
            [
                'car_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/continental-2023/continental-2023-3.jpg',
            ],
            [
                'car_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/continental-2023/continental-2023-4.jpg',
            ],
            [
                'car_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/continental-2023/continental-2023-5.jpg',
            ],
            //bentley/Flying-Spur-2021
            [
                'car_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/flying-spur-2021/flying-spur-2021-1.jpg',
            ],
            [
                'car_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/flying-spur-2021/flying-spur-2021-2.jpg',
            ],
            [
                'car_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/flying-spur-2021/flying-spur-2021-3.jpg',
            ],
            [
                'car_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/flying-spur-2021/flying-spur-2021-4.jpg',
            ],
            [
                'car_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/flying-spur-2021/flying-spur-2021-5.jpg',
            ],

            //bmw/Series-3-2021
            [
                'car_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-3-2021/series-3-2021-1.jpg',
            ],
            [
                'car_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-3-2021/series-3-2021-2.jpg',
            ],
            [
                'car_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-3-2021/series-3-2021-3.jpg',
            ],
            [
                'car_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-3-2021/series-3-2021-4.jpg',
            ],
            [
                'car_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-3-2021/series-3-2021-5.jpg',
            ],
            //bmw/Series-5-2021
            [
                'car_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-5-2021/series-5-2021-1.jpg',
            ],
            [
                'car_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-5-2021/series-5-2021-2.jpg',
            ],
            [
                'car_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-5-2021/series-5-2021-3.jpg',
            ],
            [
                'car_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-5-2021/series-5-2021-4.jpg',
            ],
            [
                'car_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/series-5-2021/series-5-2021-5.jpg',
            ],
            //bmw/X1-2021
            [
                'car_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x1-2021/x1-2021-1.webp',
            ],
            [
                'car_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x1-2021/x1-2021-2.jpg',
            ],
            [
                'car_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x1-2021/x1-2021-3.webp',
            ],
            [
                'car_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x1-2021/x1-2021-4.webp',
            ],
            [
                'car_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x1-2021/x1-2021-5.jpg',
            ],
            //bmw/X3-2021
            [
                'car_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x3-2021/x3-2021-1.webp',
            ],
            [
                'car_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x3-2021/x3-2021-2.jpg',
            ],
            [
                'car_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x3-2021/x3-2021-3.jpg',
            ],
            [
                'car_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x3-2021/x3-2021-4.jpg',
            ],
            [
                'car_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x3-2021/x3-2021-5.jpg',
            ],
            //bmw/X4-2022
            [
                'car_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x4-2022/x4-2022-1.jpg',
            ],
            [
                'car_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x4-2022/x4-2022-2.webp',
            ],
            [
                'car_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x4-2022/x4-2022-3.jpg',
            ],
            [
                'car_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x4-2022/x4-2022-4.jpg',
            ],
            [
                'car_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/x4-2022/x4-2022-5.webp',
            ],
            //bmw/Z4-Roadster-2021
            [
                'car_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/z4-roadster-2021/z4-roadster-2021-1.webp',
            ],
            [
                'car_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/z4-roadster-2021/z4-roadster-2021-2.webp',
            ],
            [
                'car_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/z4-roadster-2021/z4-roadster-2021-3.jpg',
            ],
            [
                'car_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/z4-roadster-2021/z4-roadster-2021-4.jpg',
            ],
            [
                'car_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/z4-roadster-2021/z4-roadster-2021-5.webp',
            ],

            //RR/Rolls-Royce-Cullinan
            [
                'car_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-cullinan/rolls-royce-cullinan-1.jpg',
            ],
            [
                'car_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-cullinan/rolls-royce-cullinan-2.jpg',
            ],
            [
                'car_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-cullinan/rolls-royce-cullinan-3.jpg',
            ],
            [
                'car_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-cullinan/rolls-royce-cullinan-4.jpg',
            ],
            [
                'car_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-cullinan/rolls-royce-cullinan-5.png',
            ],
            //RR/Rolls-Royce-Ghost
            [
                'car_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost/rolls-royce-ghost-1.jpg',
            ],
            [
                'car_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost/rolls-royce-ghost-2.jpg',
            ],
            [
                'car_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost/rolls-royce-ghost-3.jpg',
            ],
            [
                'car_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost/rolls-royce-ghost-4.jpg',
            ],
            [
                'car_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost/rolls-royce-ghost-5.jpg',
            ],
            //RR/Rolls-Royce-Phantom
            [
                'car_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-phantom/rolls-royce-phantom-1.jpg',
            ],
            [
                'car_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-phantom/rolls-royce-phantom-2.jpg',
            ],
            [
                'car_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-phantom/rolls-royce-phantom-3.jpg',
            ],
            [
                'car_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-phantom/rolls-royce-phantom-4.webp',
            ],
            [
                'car_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-phantom/rolls-royce-phantom-5.jpg',
            ],
            //RR/Rolls-Royce-Ghost-Black-Badge
            [
                'car_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-black-badge/rolls-royce-ghost-black-badge-1.webp',
            ],
            [
                'car_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-black-badge/rolls-royce-ghost-black-badge-2.webp',
            ],
            [
                'car_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-black-badge/rolls-royce-ghost-black-badge-3.jpg',
            ],
            [
                'car_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-black-badge/rolls-royce-ghost-black-badge-4.webp',
            ],
            [
                'car_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-black-badge/rolls-royce-ghost-black-badge-5.jpg',
            ],
            //RR/Rolls-Royce-Ghost-EWB
            [
                'car_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-ewb/rolls-royce-ghost-ewb-1.jpg',
            ],
            [
                'car_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-ewb/rolls-royce-ghost-ewb-2.jpeg',
            ],
            [
                'car_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-ewb/rolls-royce-ghost-ewb-3.jpg',
            ],
            [
                'car_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-ewb/rolls-royce-ghost-ewb-4.jpg',
            ],
            [
                'car_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-ghost-ewb/rolls-royce-ghost-ewb-5.jpg',
            ],
            //RR/Rolls-Royce-Wraith
            [
                'car_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-wraith/rolls-royce-wraith-1.jpg',
            ],
            [
                'car_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-wraith/rolls-royce-wraith-2.jpg',
            ],
            [
                'car_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-wraith/rolls-royce-wraith-3.jpg',
            ],
            [
                'car_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-wraith/rolls-royce-wraith-4.jpg',
            ],
            [
                'car_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rolls-royce-wraith/rolls-royce-wraith-5.jpg',
            ],

            //jaguar/JaguarF-Pace2021
            [
                'car_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguarf-pace2021/jaguarf-pace2021-1.jpg',
            ],
            [
                'car_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguarf-pace2021/jaguarf-pace2021-2.jpg',
            ],
            [
                'car_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguarf-pace2021/jaguarf-pace2021-3.jpg',
            ],
            [
                'car_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguarf-pace2021/jaguarf-pace2021-4.jpg',
            ],
            [
                'car_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguarf-pace2021/jaguarf-pace2021-5.jpg',
            ],
            //jaguar/Jaguar-XE
            [
                'car_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xe/jaguar-xe-1.jpeg',
            ],
            [
                'car_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xe/jaguar-xe-2.jpeg',
            ],
            [
                'car_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xe/jaguar-xe-3.jpeg',
            ],
            [
                'car_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xe/jaguar-xe-4.jpeg',
            ],
            [
                'car_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xe/jaguar-xe-5.jpeg',
            ],
            //jaguar/Jaguar-XF
            [
                'car_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xf/jaguar-xf-1.jpg',
            ],
            [
                'car_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xf/jaguar-xf-2.jpg',
            ],
            [
                'car_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xf/jaguar-xf-3.webp',
            ],
            [
                'car_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xf/jaguar-xf-4.webp',
            ],
            [
                'car_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xf/jaguar-xf-5.jpg',
            ],
            //jaguar/Jaguar-XJ
            [
                'car_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xj/jaguar-xj-1.webp',
            ],
            [
                'car_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xj/jaguar-xj-2.webp',
            ],
            [
                'car_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xj/jaguar-xj-3.png',
            ],
            [
                'car_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xj/jaguar-xj-4.png',
            ],
            [
                'car_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xj/jaguar-xj-5.png',
            ],
            //jaguar/Jaguar-XJL
            [
                'car_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xjl/jaguar-xjl-1.webp',
            ],
            [
                'car_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xjl/jaguar-xjl-2.webp',
            ],
            [
                'car_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xjl/jaguar-xjl-3.webp',
            ],
            [
                'car_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xjl/jaguar-xjl-4.webp',
            ],
            [
                'car_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/jaguar-xjl/jaguar-xjl-5.webp',
            ],

            //land/land-cruiser-prado-2021
            [
                'car_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2021/land-cruiser-prado-2021-1.jpg',
            ],
            [
                'car_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2021/land-cruiser-prado-2021-2.jpg',
            ],
            [
                'car_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2021/land-cruiser-prado-2021-3.jpg',
            ],
            [
                'car_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2021/land-cruiser-prado-2021-4.jpg',
            ],
            [
                'car_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2021/land-cruiser-prado-2021-5.webp',
            ],
            //land/Land-cruiser-prado-2024
            [
                'car_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2024/land-cruiser-prado-2024-1.jpg',
            ],
            [
                'car_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2024/land-cruiser-prado-2024-2.jpg',
            ],
            [
                'car_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2024/land-cruiser-prado-2024-3.jpg',
            ],
            [
                'car_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2024/land-cruiser-prado-2024-4.webp',
            ],
            [
                'car_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-prado-2024/land-cruiser-prado-2024-5.webp',
            ],
            //land/Land-cruiser-v8
            [
                'car_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-v8/land-cruiser-v8-1.jpg',
            ],
            [
                'car_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-v8/land-cruiser-v8-2.jpg',
            ],
            [
                'car_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-v8/land-cruiser-v8-3.webp',
            ],
            [
                'car_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-v8/land-cruiser-v8-4.jpg',
            ],
            [
                'car_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-cruiser-v8/land-cruiser-v8-5.jpg',
            ],
            //land/Land-Rover-Defender-2025
            [
                'car_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-defender-2025/land-rover-defender-2025-1.jpg',
            ],
            [
                'car_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-defender-2025/land-rover-defender-2025-2.jpg',
            ],
            [
                'car_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-defender-2025/land-rover-defender-2025-3.jpg',
            ],
            [
                'car_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-defender-2025/land-rover-defender-2025-4.jpg',
            ],
            [
                'car_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-defender-2025/land-rover-defender-2025-5.jpg',
            ],
            //land/Land-Rover-Range-Rover-2010
            [
                'car_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-range-rover-2010/land-rover-range-rover-2010-1.jpg',
            ],
            [
                'car_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-range-rover-2010/land-rover-range-rover-2010-2.jpg',
            ],
            [
                'car_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-range-rover-2010/land-rover-range-rover-2010-3.jpg',
            ],
            [
                'car_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-range-rover-2010/land-rover-range-rover-2010-4.jpg',
            ],
            [
                'car_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/land-rover-range-rover-2010/land-rover-range-rover-2010-5.jpg',
            ],

            //lexus/es-2021
            [
                'car_id' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/es-2021/es-2021-1.jpg',
            ],
            [
                'car_id' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/es-2021/es-2021-2.jpg',
            ],
            [
                'car_id' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/es-2021/es-2021-3.jpg',
            ],
            [
                'car_id' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/es-2021/es-2021-4.jpg',
            ],
            [
                'car_id' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/es-2021/es-2021-5.jpg',
            ],
            //lexus/GX-2024
            [
                'car_id' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/gx-2024/gx-2024-1.jpg',
            ],
            [
                'car_id' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/gx-2024/gx-2024-2.webp',
            ],
            [
                'car_id' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/gx-2024/gx-2024-3.jpg',
            ],
            [
                'car_id' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/gx-2024/gx-2024-4.jpg',
            ],
            [
                'car_id' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/gx-2024/gx-2024-5.jpg',
            ],
            //lexus/IS-2021
            [
                'car_id' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/is-2021/is-2021-1.jpg',
            ],
            [
                'car_id' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/is-2021/is-2021-2.jpg',
            ],
            [
                'car_id' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/is-2021/is-2021-3.jpg',
            ],
            [
                'car_id' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/is-2021/is-2021-4.jpg',
            ],
            [
                'car_id' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/is-2021/is-2021-5.jpg',
            ],
            //lexus/LM-2024
            [
                'car_id' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/lm-2024/lm-2024-1.jpg',
            ],
            [
                'car_id' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/lm-2024/lm-2024-2.png',
            ],
            [
                'car_id' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/lm-2024/lm-2024-3.jpg',
            ],
            [
                'car_id' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/lm-2024/lm-2024-4.webp',
            ],
            [
                'car_id' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/lm-2024/lm-2024-5.webp',
            ],
            //lexus/NX-2022
            [
                'car_id' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/nx-2022/nx-2022-1.jpg',
            ],
            [
                'car_id' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/nx-2022/nx-2022-2.jpg',
            ],
            [
                'car_id' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/nx-2022/nx-2022-3.jpg',
            ],
            [
                'car_id' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/nx-2022/nx-2022-4.jpg',
            ],
            [
                'car_id' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/nx-2022/nx-2022-5.jpg',
            ],
            //lexus/RX-2023
            [
                'car_id' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rx-2023/rx-2023-1.webp',
            ],
            [
                'car_id' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rx-2023/rx-2023-2.webp',
            ],
            [
                'car_id' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rx-2023/rx-2023-3.jpg',
            ],
            [
                'car_id' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rx-2023/rx-2023-4.webp',
            ],
            [
                'car_id' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/rx-2023/rx-2023-5.jpg',
            ],
            //mer/a-class
            [
                'car_id' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a-class/a-class-1.jpg',
            ],
            [
                'car_id' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a-class/a-class-2.jpg',
            ],
            [
                'car_id' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a-class/a-class-3.jpg',
            ],
            [
                'car_id' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a-class/a-class-4.jpg',
            ],
            [
                'car_id' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/a-class/a-class-5.jpg',
            ],
            //mer/c-class
            [
                'car_id' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/c-class/c-class-1.jpg',
            ],
            [
                'car_id' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/c-class/c-class-2.jpg',
            ],
            [
                'car_id' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/c-class/c-class-3.jpg',
            ],
            [
                'car_id' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/c-class/c-class-4.jpg',
            ],
            [
                'car_id' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/c-class/c-class-5.jpg',
            ],
            //mer/g-class
            [
                'car_id' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/g-class/g-class-1.jpg',
            ],
            [
                'car_id' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/g-class/g-class-2.jpg',
            ],
            [
                'car_id' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/g-class/g-class-3.jpg',
            ],
            [
                'car_id' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/g-class/g-class-4.jpg',
            ],
            [
                'car_id' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/g-class/g-class-5.jpg',
            ],
            //mer/s-class
            [
                'car_id' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/s-class/s-class-1.jpg',
            ],
            [
                'car_id' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/s-class/s-class-2.jpg',
            ],
            [
                'car_id' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/s-class/s-class-3.jpg',
            ],
            [
                'car_id' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/s-class/s-class-4.jpg',
            ],
            [
                'car_id' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/s-class/s-class-5.jpg',
            ],
            //mer/v-class
            [
                'car_id' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/v-class/v-class-1.jpg',
            ],
            [
                'car_id' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/v-class/v-class-2.jpg',
            ],
            [
                'car_id' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/v-class/v-class-3.jpg',
            ],
            [
                'car_id' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/v-class/v-class-4.jpg',
            ],
            [
                'car_id' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image_url' => 'carImages/v-class/v-class-5.jpg',
            ],
        ]);
    }
}
