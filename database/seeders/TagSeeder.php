<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
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
                'name' => 'Papel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 2,
                'name' => 'Cartón',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 3,
                'name' => 'Pliegues',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 4,
                'name' => 'Grulla',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tag_id' => 5,
                'name' => 'Barquito',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
