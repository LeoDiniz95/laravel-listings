<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Title test',
        //     'tags' => 'test, title',
        //     'company' => 'Acme',
        //     'location' => 'Americana, SP',
        //     'email' => 'example@email.com',
        //     'website' => 'https://www.outlook.com',
        //     'description' => 'Nostrud ut excepteur dolore aliqua nulla labore cupidatat labore minim elit. Aliqua dolore aute enim amet id id reprehenderit Lorem dolore esse occaecat labore dolore. Cillum sunt dolore sit veniam laboris in proident aliqua est anim nostrud. Mollit enim sint esse nulla consectetur.'
        // ]);

        // Listing::create([
        //     'title' => 'Title test2',
        //     'tags' => 'test, title',
        //     'company' => 'Wayne Company',
        //     'location' => 'Americana, SP',
        //     'email' => 'example2@email.com',
        //     'website' => 'https://www.outlook.com',
        //     'description' => 'Nostrud ut excepteur dolore aliqua nulla labore cupidatat labore minim elit. Aliqua dolore aute enim amet id id reprehenderit Lorem dolore esse occaecat labore dolore. Cillum sunt dolore sit veniam laboris in proident aliqua est anim nostrud. Mollit enim sint esse nulla consectetur.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
