<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //- Registra un usuario con mi nombre
        User::create([
            'name' => 'Jan Carlos Jaimes',
            'email' => 'jacajali@gmail.com',
            'password' => bcrypt('carlos0723'),
        ]);
        //User::factory(5)->create(); //Crear 5 usuarios falso
        Post::factory(80)->create();
    }
}
