<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'mark' => 'Kia',
                'model' => 'Rio',
                'numbers' => 'ВІ0001ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Kia',
                'model' => 'Rio',
                'numbers' => 'ВІ0002ВТ',
                'color' => 'white',
                'location' => null,
            ],
            [
                'mark' => 'Kia',
                'model' => 'Rio',
                'numbers' => 'ВІ0003ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Kia',
                'model' => 'Rio',
                'numbers' => 'ВІ0004ВТ',
                'color' => 'red',
                'location' => null,
            ],
            [
                'mark' => 'Chevrolet',
                'model' => 'Lacetti',
                'numbers' => 'ВІ0005ВТ',
                'color' => 'silver',
                'location' => null,
            ],
            [
                'mark' => 'Chevrolet',
                'model' => 'Lacetti',
                'numbers' => 'ВІ0006ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Chevrolet',
                'model' => 'Lacetti',
                'numbers' => 'ВІ0008ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Ford',
                'model' => 'Fiesta',
                'numbers' => 'ВІ0009ВТ',
                'color' => 'red',
                'location' => null,
            ],
            [
                'mark' => 'Ford',
                'model' => 'Fiesta',
                'numbers' => 'ВІ0010ВТ',
                'color' => 'red',
                'location' => null,
            ],
            [
                'mark' => 'Hundai',
                'model' => 'Accent',
                'numbers' => 'ВІ0011ВТ',
                'color' => 'gold',
                'location' => null,
            ],
            [
                'mark' => 'Hundai',
                'model' => 'Accent',
                'numbers' => 'ВІ0012ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Honda',
                'model' => 'Accord',
                'numbers' => 'ВІ0013ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Honda',
                'model' => 'Accord',
                'numbers' => 'ВІ0014ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Honda',
                'model' => 'Accord',
                'numbers' => 'ВІ0015ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'BMW',
                'model' => 'X5',
                'numbers' => 'ВІ0016ВТ',
                'color' => 'black',
                'location' => null,
            ],
            [
                'mark' => 'Audi',
                'model' => 'Q7',
                'numbers' => 'ВІ0017ВТ',
                'color' => 'white',
                'location' => null,
            ],
            [
                'mark' => 'Volkswagen',
                'model' => 'Passat',
                'numbers' => 'ВІ0018ВТ',
                'color' => 'black',
                'location' => null,
            ],
        ]);
    }
}
