<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'firstname' => 'Pierre',
            'lastname' => 'Noël',
            'email' => (ENV('ADMIN_EMAIL')),
            'password'=> bcrypt((ENV('ADMIN_PASSWORD')))
        ]);

        Post::factory(10)->create();
    }
}
