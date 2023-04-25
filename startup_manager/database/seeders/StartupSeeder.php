<?php

namespace Database\Seeders;

use App\Models\Startup;
use Illuminate\Database\Seeder;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startup1 = Startup::factory()->create();
        $startup2 = Startup::factory()->create();
    }
}
