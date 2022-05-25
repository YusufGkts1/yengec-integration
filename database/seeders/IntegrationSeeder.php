<?php

namespace Database\Seeders;

use App\Models\Integration\Integration;
use Illuminate\Database\Seeder;

class IntegrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Integration::factory()->times(10)->create();

    }
 
}
