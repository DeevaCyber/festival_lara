<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribution;

class AttributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Attribution::create([
        'etablissements_idEtab'=>'1',
        'equipes_idEquipe'=>'1',
      ]);
    }
}
