<?php

namespace Database\Seeders;

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
        $this->call([
            OauthClientSeeder::class,
            UserSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            CourseSeeder::class,
            ClassSeeder::class,
        ]);
    }
}
