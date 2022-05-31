<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->string('name');
//        $table->text('image')->nullable();
//        $table->integer('phone');
//        $table->integer('experience');
//        $table->string('worked');

        $shefs = ['КУХОННЫЙ ОФИЦЕР', 'ВЛАДЕЛЕЦ И МЕНЕДЖЕР', 'СПЕЦИАЛИСТ ПО ПИЦЦЕ'];

        foreach ($shefs as $shef) {
            DB::table('compositions')->insert([
                'name' => $shef,
                'image' => 'image703232254342',
                'phone' => '0703232254342',
                'experience' => '3',
                'worked' => 'restoran',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
