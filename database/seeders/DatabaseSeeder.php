<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\service::factory()->count(15)->create();
        \App\Models\Blog::factory()->count(15)->create();
        \App\Models\faq::factory()->count(15)->create();
        \App\Models\contact::factory()->count(15);
    }
}
