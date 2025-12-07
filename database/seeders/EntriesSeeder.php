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
                'title' => 'Cómo crear un sitio en Laravel',
                'content' => 'Hola bienvenidos a mi tutorial, hoy crearemos un sitio en laravel',
                'author' => 'chelo3p',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'title' => 'Cómo crear un sitio en Vue',
                'content' => 'Hola bienvenidos a mi tutorial, hoy crearemos un sitio en vue',
                'author' => 'chelo3p',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 3,
                'title' => 'Cómo posicionar con CSS grid',
                'content' => 'Hola hoy le preguntaremos a deepseek como se posiciona en grid',
                'author' => 'chelo3p',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
