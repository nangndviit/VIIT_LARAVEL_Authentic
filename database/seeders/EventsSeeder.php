<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            ['Ten_Events' => 'Hành trình mang tính biểu tượng của Rolex Pepsi', 'Anh_Events'
            => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/02/Thiet-ke-chua-co-ten-52-2.png'],
            ['Ten_Events' => 'Tương lai của những đôi sneaker được tạo bởi AI sẽ đi về đâu ?', 'Anh_Events'
            => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/Thiet-ke-chua-co-ten-4-6.png'],
            ['Ten_Events' => 'Tại sao mọi người lại thích Nike Kyrie 7 tới vậy ?', 'Anh_Events'
            => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/02/Tai-sao-moi-nguoi-lai-thich-Nike-Kyrie-7-toi-vay-4.png'],
        ]);
    }
}
