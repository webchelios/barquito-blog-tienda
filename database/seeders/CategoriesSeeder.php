<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'name' => 'Tutoriales'
            ],
            [
                'category_id' => 2,
                'name' => 'Inspiración'
            ],
            [
                'category_id' => 3,
                'name' => 'Decoración'
            ],
            [
                'category_id' => 4,
                'name' => 'Libros y suministros'
            ],
            [
                'category_id' => 5,
                'name' => 'Off-Topic'
            ],
            [
                'category_id' => 6,
                'name' => 'Premium'
            ],
        ]);
    }
}
