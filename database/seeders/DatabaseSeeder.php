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
        \App\Models\User::factory([
            'email' => 'admin',
            'number' => '+7(777)777-77-77',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'type' => 1,
        ])->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\Profession::factory(10)->create();
        \App\Models\Test::factory(10)->create();
        \App\Models\University::factory(10)->create();
    }
}
