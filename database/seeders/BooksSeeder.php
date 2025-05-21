<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'book_id' => 1,
                'title' => 'El gran libro de origami',
                'description' => 'Un libro que enseña de lo más básico a lo más complejo del origami. Todo lo que necesitas está en este libro. Entretenido e interesante.',
                'price' => 24.99,
                'cover' => 'img/books/el-gran-libro-de-origami.png',
                'cover_description' => 'Portada de gran libro de origami'
            ],
            [
                'book_id' => 2,
                'title' => 'Origami primera infancia',
                'description' => 'Para los más pequeños, aprender origami es un arte fabuloso. Doblar el papel es una actividad para entretener a los más pequeños.',
                'price' => 30,
                'cover' => 'img/books/origami-pimera-infancia.png',
                'cover_description' => 'Portada de Origami primera infancia'
            ],
            [
                'book_id' => 3,
                'title' => 'El arte del origami',
                'description' => 'Un libro que te ayuda a descubrir que el origami es algo más que una manualidad. Creado para descubrir el arte detrás del origami.',
                'price' => 12,
                'cover' => 'img/books/el-arte-del-origami.png',
                'cover_description' => 'Portada de El arte del origami'
            ],
            [
                'book_id' => 4,
                'title' => 'El libro del origami',
                'description' => 'El libro del origami es ideal para aquellos que buscan adentrarse y aprender a como hacer diseños llamativos y hermosos.',
                'price' => 19.99,
                'cover' => 'img/books/el-libro-del-origami.png',
                'cover_description' => 'Portada de El libro del origami'
            ],
            [
                'book_id' => 5,
                'title' => 'Libro de origami para niños',
                'description' => 'Demuestra que hasta los mas chicos pueden divertirse y crear. Esta edición trae diseños adorables para los más chicos.',
                'price' => 30,
                'cover' => 'img/books/libro-de-origami-para-niños.png',
                'cover_description' => 'Portada de Libro de origami para niños'
            ],
            [
                'book_id' => 6,
                'title' => 'Mi primer libro de origami',
                'description' => 'Una aventura introductoria muy resumida pero sin dejar de ser un libro interesante.',
                'price' => 20,
                'cover' => 'img/books/mi-primer-libro-de-origami.png',
                'cover_description' => 'Portada de Mi primer libro de origami'
            ],
            [
                'book_id' => 7,
                'title' => 'Origami: Manualidades para papiroflexia',
                'description' => 'Un enorme libro con abundante contenido didáctico y divertido. Cuenta con cien diseños para armar y papel.',
                'price' => 60,
                'cover' => 'img/books/origami-manualidades-para-papiroflexia.png',
                'cover_description' => 'Portada de Origami: Manualidades para papiroflexia'
            ],
            [
                'book_id' => 8,
                'title' => 'Origami para regalar',
                'description' => 'Un pequeño libro con hojas para crear origamis originales que sirven como un lindo regalo decorativo',
                'price' => 9.50,
                'cover' => 'img/books/origami-para-regalar.png',
                'cover_description' => 'Portada de Origami para regalar'
            ],
            [
                'book_id' => 9,
                'title' => '100 aviones de papel',
                'description' => 'Los entusiastas de las manualidades descubrirán una amplia gama de emocionantes proyectos aéreos, cada uno meticulosamente detallado, llevando la creatividad a nuevas alturas y ofreciendo un centenar de oportunidades para explorar el arte del plegado y lanzamiento de aviones de papel.',
                'price' => 45,
                'cover' => 'img/books/100-aviones-de-papel.png',
                'cover_description' => 'Portada de 100 aviones de papel'
            ],
            [
                'book_id' => 10,
                'title' => '200 aviones de papel',
                'description' => 'Un libro de manualidades que despliega una amplia variedad de intrincados diseños, proporcionando a los entusiastas innumerables horas de diversión y exploración, con detalladas instrucciones para doblar y lanzar 200 cautivadores aviones de papel.',
                'price' => 70,
                'cover' => 'img/books/200-aviones-de-papel.png',
                'cover_description' => 'Portada de 200 aviones de papel'
            ],
            [
                'book_id' => 11,
                'title' => 'Aviones de papel',
                'description' => 'Despliega una creativa colección de instrucciones paso a paso, llenas de color e imaginación, para crear una variedad de aviones de papel, ofreciendo horas de entretenimiento y exploración artística para todas las edades.',
                'price' => 69.99,
                'cover' => 'img/books/aviones-de-papel.png',
                'cover_description' => 'Portada de Aviones de papel'
            ],
            [
                'book_id' => 12,
                'title' => 'Aviones de papel 2',
                'description' => 'La creatividad alcanza nuevas alturas con emocionantes proyectos de manualidades que desafían la gravedad, proporcionando instrucciones detalladas y originales para diseñar una flota única de aviones de papel, convirtiendo la creación artesanal en una aventura extraordinaria.',
                'price' => 69.99,
                'cover' => 'img/books/aviones-de-papel-2.png',
                'cover_description' => 'Portada de Aviones de papel 2'
            ],


            
        ]);
    }
}
