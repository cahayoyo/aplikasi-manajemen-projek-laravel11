<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'cahayoyo',
            'email' => 'cahayoyo@gmail.com',
            'password' => bcrypt('Sjbcsjbc1234'),
            'email_verified_at' => time()
        ]);

        Project::factory()->count(30)->hasTasks(30)->create();
    }
}
