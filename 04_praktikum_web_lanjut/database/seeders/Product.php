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
        DB::table('product')->insert([
            $data=[[
                'id' => 123,
                'nama_Product' => 'Album Love Yourself',
            ],[
                'id' => 234,
                'nama_Product' => 'Album Face The Sun',
            ],[
                'id' => 456,
                'nama_Product' => 'Album NoEasy',
            ],[
                'id' => 678,
                'nama_Product' => 'Album Born Pink',
            ],[
                'id' => 8910,
                'nama_Product' => 'Album BE',
            ]]
        ]);              
        DB::table('product')->insert($data);
    }
}
