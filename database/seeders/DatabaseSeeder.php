<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
        // Corro el seeder 'categories', es importante que cargue primero para que entries tenga FK
        $this->call(CategoriesSeeder::class);
        // Corro el seeder 'tags'
        $this->call(BooksSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(EntrySeeder::class);
        // Corro el seeder 'books'


        // Corro el seeder 'entries'

    
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
