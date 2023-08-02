<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Types extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'kode_tipe' => 'SN',
                'nama_tipe' => 'Sneakers'
            ],
            [
                'kode_tipe' => 'SN',
                'nama_tipe' => 'Sneakers'
            ],
            [
                'kode_tipe' => 'SN',
                'nama_tipe' => 'Sneakers'
            ],
            [
                'kode_tipe' => 'MN',
                'nama_tipe' => 'Mount'
            ],
        ]);
    }
}
