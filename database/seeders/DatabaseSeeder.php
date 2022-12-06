<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel JS',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'website' => 'laravel.com',
        //     'email' => 'email@gmail.com',
        //     'description' => 'Lorem'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel JS',
        //     'company' => 'Acme Corp',
        //     'location' => 'Los Angeles, CA',
        //     'website' => 'laravel.com',
        //     'email' => 'ricky@gemail.com',
        //     'description' => 'Lorem'
        // ]);

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@email.com',
            'password' => '123123'
        ]);

        // $user = User::factory()->create([
        //     'name' => 'Jane Doe',
        //     'email' => 'jane@email.com',
        //     'password' => '123123'
        // ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
