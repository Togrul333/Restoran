<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompositionsSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['meyve','yumurta','sogan','toyug','bud','terevez'];
        foreach ($categories as $category){
            DB::table('compositions')->insert([
                'name'=>$category,
                'slug'=>Str::slug($category),
                'color'=>'rengi',
                'aciligi'=>'aci',
                'category'=>'icki',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);

    }
    }

}
