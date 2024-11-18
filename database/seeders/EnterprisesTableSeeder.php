<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnterprisesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('enterprises')->insert([
            [
                'code' => '1',
                'title' => 'АТ НАК "Нафтогаз України"',
                'employees' => 50,
                'industry' => 'імпорт та продаж природного газу',
                'address' => 'вул. Богдана Хмельницького',
            ],
            [
                'code' => '2',
                'title' => 'ТОВ "АТБ-Маркет"',
                'employees' => 150,
                'industry' => 'Продаж продуктів',
                'address' => 'вул. Капушанська',
            ],
            [
                'code' => '3',
                'title' => 'ТОВ "Епіцентр К"',
                'employees' => 30,
                'industry' => 'Продаж будівельних матеріалів',
                'address' => 'вул. Цвітна',
            ],
        ]);
    }
}
