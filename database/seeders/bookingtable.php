<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookingtable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert([
        'name' => 'お名前',
        'password' => 'パスワード',
        'phne number' => '電話番号',
        'animal name' => '会いたい犬・猫のお名前'
        
    ]);
}
}