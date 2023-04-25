<?php

namespace Database\Seeders;

use App\Models\Investicije;
use App\Models\Investitor;
use App\Models\Startup;

use Illuminate\Database\Seeder;

class InvesticijeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investitor = Investitor::factory()->create();
        $startup1 = Startup::factory()->create();
        $startup2 = Startup::factory()->create();

        Investicije::factory(10)->create([
            'investitor_id'=>$investitor->id,
            'startup_id'=>$startup1->id
           ]);

           Investicije::factory(5)->create([
            'investitor_id'=>$investitor->id,
            'startup_id'=>$startup2->id
           ]);
    }
}
