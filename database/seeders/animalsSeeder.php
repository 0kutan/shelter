<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'image_url' => '',
            'message' => ''
    ]); 
    DB::table('animals')->insert([
            'name' => '大和',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' => '5歳',
            'image_url' => '',
            'message' => ''
            ]);
    
        DB::table('animals')->insert([
            'name' => 'むさし',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' =>'8歳',
            'image_url' => '',
            'message' => ''
            ]);
            
        DB::table('animals')->insert([
            'name' => 'まる',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' => '10歳',
            'image_url' => '',
            'message' => ''
            
            ]);
            
        DB::table('animals')->insert([
            'name' => 'ショコラ',
            'breed' => '',
            'sex' => '男の子',
            'mass' => '',
            'birthday' => '8歳',
            'image_url' => '',
            'message' => ''
            ]);
            
        DB::table('animals')->insert([
            'name' => 'ノア',
            'breed' => '',
            'sex' => '女の子',
            'mass' => '',
            'birthday' => '5歳',
            'image_url' => '',
            'message' => ''
            ]);
    }
}
    