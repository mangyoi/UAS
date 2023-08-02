<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name_product' => 'Converse 70s',
                'price' => 6500000,
                'image'=> '70s.jpg',
                'type_id'=> 4
            ],
            [
                'name_product' => 'Astroboy',
                'price' => 8000000,
                'image'=> 'astroboy.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'checkboard',
                'price' => 200000,
                'image'=> 'checkboard.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'mountain shoe',
                'price' => 400000,
                'image'=> 'sepatugunung.jpg',
                'type_id'=> 1
            ],
        ]);
    }
}
