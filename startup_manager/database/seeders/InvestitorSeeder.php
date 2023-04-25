<?php

namespace Database\Seeders;

use App\Models\Investitor;
use Illuminate\Database\Seeder;

class InvestitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investitor = Investitor::factory()->create();
    }
}
