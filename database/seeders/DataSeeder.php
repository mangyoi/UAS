<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datas')->insert([
            [
                'nama' => 'rahman',
                'alamat' => 'sumenep',
                'no_wa'=> '0928421912',
                'email' => 'rahmamtoifur@gmail.com',
                

            ],
            [
                'nama' => 'supatli',
                'alamat' => 'sumedang',
                'no_wa'=> '0857888292',
                'email' => 'inicobadeh@gmail.com',
            ],
            [
                'nama' => 'rasid',
                'alamat' => 'surabaya',
                'no_wa'=> '09284212',
                'email' => 'tebakcoba@gmail.com',
            ],
        ]);


    }
}
