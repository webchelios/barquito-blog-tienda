<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('entries')->insert([
            [
                'id' => 1,
                'title' => 'Cómo crear un sitio en Laravel',
                'category' => 'Tutoriales',
                'content' => 'Hola amigos de youtube como andan? soy su amigo y servidor chelo3p. hoy les voy a enseñar a crear un sitio en laravel',
                'author' => 'chelo3p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Cómo crear un sitio en Vue',
                'category' => 'Tutoriales',
                'content' => 'Hola amigos de youtube como andan? soy su amigo y servidor chelo3p. hoy les voy a enseñar a crear un sitio en Vue',
                'author' => 'chelo3p',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
