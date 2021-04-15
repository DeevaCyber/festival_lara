<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = ['nomEtab','adrueEtab','cpEtab','villeEtab','telEtab', 'mailEtab','nomResponsable','prenomResponsable','nbChambresOffertes'];
    public function attributions()
    {
      return $this->hasMany(Attribution::class);
    }

}
