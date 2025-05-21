<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Dios',
                'role' => 'admin',
                'email' => 'dios@gmail.com',
                'password' => Hash::make('4445'), // Encriptación del password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Juan Novato',
                'role' => 'normal',
                'email' => 'juan@gmail.com',
                'password' => Hash::make('4445'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Origami Master',
                'role' => 'normal',
                'email' => 'origamimaster@gmail.com',
                'password' => Hash::make('4445'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Carlitos',
                'role' => 'normal',
                'email' => 'carlitos@gmail.com',
                'password' => Hash::make('4445'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);

            DB::table('users_have_books')->insert([
                [
                    'user_id' => 1,
                    'book_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 2,
                    'book_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 2,
                    'book_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 2,
                    'book_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 3,
                    'book_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 4,
                    'book_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ]);
    }
}
