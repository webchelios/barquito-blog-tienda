<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query builder:
        DB::table('entries')->insert([
            [
                'entry_id' => 1,
                'title' => 'Cómo crear una grulla',
                'content' => 'Hola bienvenidos a mi tutorial, hoy crearemos una grulla muy facil',
                'author' => 'chelo3p',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'title' => 'Cómo hacer un barquito de papel',
                'content' => 'Hola bienvenidos a mi tutorial, hoy crearemos un  barquito de papel',
                'author' => 'chelo3p',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 3,
                'title' => 'Como doblar mejor el papel',
                'content' => 'Hola hoy le preguntaremos a deepseek como se dobla bien un papel',
                'author' => 'chelo3p',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('entries_have_tags')->insert([
            [
                'entry_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 1,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 3,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
