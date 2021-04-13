<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipe;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Equipe::create([
        'nomEquipe'=>'Fire Cows',
        'responsableEquipe'=>'Selana ROLANA',
        'nombreMembreEquipe'=>'25',
        'paysEquipe'=>'France',
      ]);
    }
}
