<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariffs')->insert([
            [
                "title" => "Стандарт",
                "description" => "Найкраще підходить для коротких поїздок, менше однієї години\n",
                "price" => "4",
                "waiting" => "20",
                "booking" => "1"
            ],
            [
                "title" => "Люкс",
                "description" => "Тариф з накращими авто за доступну ціну\n",
                "price" => "10",
                "waiting" => "30",
                "booking" => "5"
            ],
            [
                "title" => "Добовий",
                "description" => "Для комфортної оренди авто на 24 години\n",
                "price" => "720",
                "waiting" => "0",
                "booking" => "0"
            ],
            [
                "title" => "Погодинний",
                "description" => "Для комфортної оренди авто на декілька годин\n
            Бронювання - 30 хвилин.\n Очікування - 1 грн/хв.\n Поїздка - 75 грн/год\n",
                "price" => "75",
                "waiting" => "20",
                "booking" => "1"
            ]
            ]
        );
    }
}
