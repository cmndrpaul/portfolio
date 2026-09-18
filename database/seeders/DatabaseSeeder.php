<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TechStackSeeder::class,
            ProjectSeeder::class,
            CertificateSeeder::class,
            ChatMessageSeeder::class,
        ]);
    }
}
