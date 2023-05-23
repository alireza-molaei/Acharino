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
        \App\Models\service::factory()->create();
        \App\Models\blog::factory()->create();
        \App\Models\faq::factory()->create();
        \App\Models\contact::factory()->create();
    }
}
