<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Cars')->insert([
            //audi
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'A4 2024',
            'seat_count' => '4',
            'price_per_day' => '1000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/a4-2024.jpg'
        ],
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'A6 2025',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/a6-2025.jpg'
        ],
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'A7 2022',
            'seat_count' => '4',
            'price_per_day' => '3000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/a7-2022.jpg'
        ],
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Q2 2021',
            'seat_count' => '4',
            'price_per_day' => '4000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/q2-2021.jpg'
        ],
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Q3 2024',
            'seat_count' => '4',
            'price_per_day' => '5000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/q3-2024.jpg'
        ],
        [
            'trademark' => 'Audi',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Q5 2021',
            'seat_count' => '4',
            'price_per_day' => '6000000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/q5-2021.jpg'
        ],
        //Bentley
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'bentayga-2021',
            'seat_count' => '4',
            'price_per_day' => '2500000',
            'quantity' => '3',
            'remaining_quantity' => '3',
            'image_url' => 'cars/bentayga-2021.jpg'
        ],
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Bentley-Bentayga-W12-2017',
            'seat_count' => '4',
            'price_per_day' => '2540000',
            'quantity' => '5',
            'remaining_quantity' => '3',
            'image_url' => 'cars/Bentley-Bentayga-W12-2017.jpg'
        ],
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Bentley-Continental-Gt-2008',
            'seat_count' => '4',
            'price_per_day' => '3540000',
            'quantity' => '5',
            'remaining_quantity' => '3',
            'image_url' => 'cars/Bentley-Continental-Gt-2008.png'
        ],
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Bentley-Continental-GTS-V8-2023',
            'seat_count' => '4',
            'price_per_day' => '2540000',
            'quantity' => '5',
            'remaining_quantity' => '3',
            'image_url' => 'cars/Bentley-Continental-GTS-V8-2023.jpg'
        ],
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Continental-2023',
            'seat_count' => '4',
            'price_per_day' => '1234560',
            'quantity' => '5',
            'remaining_quantity' => '3',
            'image_url' => 'cars/Continental-2023.jpg'
        ],
        [
            'trademark' => 'Bentley',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Flying-Spur-2021',
            'seat_count' => '4',
            'price_per_day' => '1999999',
            'quantity' => '5',
            'remaining_quantity' => '3',
            'image_url' => 'cars/Flying-Spur-2021.jpg'
        ],
        //bmw
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Series-3-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Series-3-2021.jpg'
        ],
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Series-5-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Series-5-2021.jpg'
        ],
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'X1-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/X1-2021.jpg'
        ],
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'X3-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/X3-2021.jpg'
        ],
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'X4-2022',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/X4-2022.jpg'
        ],
        [
            'trademark' => 'BMW',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Z4-Roadster-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Z4-Roadster-2021.jpg'
        ],
        //RR
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Cullinan',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Cullinan.jpg'
        ],
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Ghost',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Ghost.jpg'
        ],
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Phantom',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Phantom.jpg'
        ],
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Ghost-Black-Badge',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Ghost-Black-Badge.jpg'
        ],
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Ghost-EWB',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Ghost-EWB.jpg'
        ],
        [
            'trademark' => 'Rolls-Royce',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Rolls-Royce-Wraith',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Rolls-Royce-Wraith.jpg'
        ],
        //jaguar
        [
            'trademark' => 'Jaguar',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'JaguarF-Pace2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/JaguarF-Pace2021.jpg'
        ],
        [
            'trademark' => 'Jaguar',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Jaguar-XE',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Jaguar-XE.jpeg'
        ],
        [
            'trademark' => 'Jaguar',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Jaguar-XF',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Jaguar-XF.jpg'
        ],
        [
            'trademark' => 'Jaguar',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Jaguar-XJ',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Jaguar-XJ.webp'
        ],
        [
            'trademark' => 'Jaguar',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Jaguar-XJL',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Jaguar-XJL.webp'
        ],
        //land
        [
            'trademark' => 'Land-Rover',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Land-cruiser-prado-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Land-cruiser-prado-2021.webp'
        ],
        [
            'trademark' => 'Land-Rover',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Land-cruiser-prado-2024',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Land-cruiser-prado-2024.jpg'
        ],
        [
            'trademark' => 'Land-Rover',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Land-cruiser-v8',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Land-cruiser-v8.png'
        ],
        [
            'trademark' => 'Land-Rover',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Land-Rover-Defender-2025',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Land-Rover-Defender-2025.webp'
        ],
        [
            'trademark' => 'Land-Rover',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'Land-Rover-Range-Rover-2010',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/Land-Rover-Range-Rover-2010.jpg'
        ],
        //lexus
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'ES-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/ES-2021.jpg'
        ],
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'GX-2024',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/GX-2024.jpg'
        ],
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'IS-2021',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/IS-2021.jpg'
        ],
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'LM-2024',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/LM-2024.jpg'
        ],
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'NX-2022',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/NX-2022.jpg'
        ],
        [
            'trademark' => 'Lexus',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'RX-2023',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/RX-2023.jpg'
        ],
        //mer
        [
            'trademark' => 'Mercedes-Benz',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'a-class',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/a-class.jpg'
        ],
        [
            'trademark' => 'Mercedes-Benz',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'c-class',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/c-class.jpg'
        ],
        [
            'trademark' => 'Mercedes-Benz',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'g-class',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/g-class.jpg'
        ],
        [
            'trademark' => 'Mercedes-Benz',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 's-class',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/s-class.jpg'
        ],
        [
            'trademark' => 'Mercedes-Benz',
            'description' => 'Chiếc xe này có thiết kế thể thao với đường nét sắc sảo, thân xe màu bạc bóng loáng cùng lưới tản nhiệt nổi bật. Đèn pha LED hiện đại cùng cản trước khí động học mang đến vẻ mạnh mẽ và năng động. Bộ mâm 18 inch và lốp bám đường giúp chiếc xe vận hành ổn định và êm ái. Nội thất sang trọng với các chi tiết tinh tế, mang lại trải nghiệm lái thú vị và thoải mái.',
            'name' => 'v-class',
            'seat_count' => '4',
            'price_per_day' => '2000000',
            'quantity' => '5',
            'remaining_quantity' => '5',
            'image_url' => 'cars/v-class.jpg'
        ],
    ]);
    }
}
