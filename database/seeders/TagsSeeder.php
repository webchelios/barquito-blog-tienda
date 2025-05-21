<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tag_id' => 1,
                'name' => 'Infantil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 2,
                'name' => 'Historia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 3,
                'name' => 'Interesante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 4,
                'name' => 'Fácil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 5,
                'name' => 'Arquitectura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 6,
                'name' => 'Arte',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 7,
                'name' => 'Diseño',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 8,
                'name' => 'Psicología',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
