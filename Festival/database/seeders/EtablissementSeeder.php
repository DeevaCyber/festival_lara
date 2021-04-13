<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etablissement;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Etablissement::create([
        'nomEtab'=>'Charles de Foucauld',
        'adrueEtab'=>'9 rue des Roses',
        'cpEtab'=>'75018',
        'villeEtab'=>'Paris',
        'telEtab'=>'0146077259',
        'mailEtab'=>'cdf@gmail.com',
        'nomResponsable'=>'RICHARD',
        'prenomResponsable'=>'Jean',
        'nbChambresOffertes'=>'50',
      ]);
    }
}
