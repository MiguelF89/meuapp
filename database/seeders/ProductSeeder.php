<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Notebook Gamer',
                'price' => 5999.90,
                'description' => 'Notebook gamer com placa RTX e processador i7',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mouse Sem Fio',
                'price' => 149.90,
                'description' => 'Mouse sem fio com 1600 DPI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Teclado Mecânico RGB',
                'price' => 299.90,
                'description' => 'Teclado mecânico com iluminação RGB e switches blue',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
