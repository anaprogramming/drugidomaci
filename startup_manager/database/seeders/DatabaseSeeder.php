<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\InvesticijeSeeder;
use Database\Seeders\InvestitorSeeder;
use Database\Seeders\StartupSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $ProjekatSeeder = new StartupSeeder;
        $ProjekatSeeder->run();

        $InvestitorSeeder = new InvestitorSeeder;
        $InvestitorSeeder->run();

        $InvesticijaSeeder = new InvesticijeSeeder;
        $InvesticijaSeeder->run();

    }
}
