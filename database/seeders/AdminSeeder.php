<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([

        'name'=>'Kənan Ağayev',
        'email'=>'kenanaga1020@gmail.com',
        'password'=>bcrypt('tehsil2022'),
        'permission'=>'1'

      ]);  
        
    }
}
