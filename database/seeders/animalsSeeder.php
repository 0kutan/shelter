<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class animalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'みみ',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' => '11歳',
            'image' => '',
            'message' => '甘えん坊でおもちゃが大好きな子です。'
    ]);
    DB::table('animals')->insert([
            'name' => '大和',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' => '5歳',
            'image' => '',
            'message' => '人が大好きな甘えん坊さんです。'
            ]);
    }
    }