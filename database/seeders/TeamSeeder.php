<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Team::create(['name' => 'Equipo A', 'stadium' => 'Estadio 1', 'city' => 'Ciudad AAA']);
        Team::create(['name' => 'Equipo B', 'stadium' => 'Estadio 2', 'city' => 'Ciudad BBB']);
    }
}
