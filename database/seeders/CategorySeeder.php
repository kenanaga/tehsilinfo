<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $categories=['Xəbərlər','Vakansiyalar','Təcrübə Proqramları','Könüllülük','Tədbirlər','Seminarlar','Təlimlər',
        'Müsabiqələr','Konfranslar','Köşə Yazıları','Xaricdə Təhsil'];
        foreach($categories as $category){  
        DB::table('categories')->insert([
            'name'=>$category,
            'slug'=>Str::slug($category,'-')
        ]);
        }
    }
}
