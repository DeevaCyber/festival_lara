<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomEtab',25);
            $table->string('adrueEtab',25);
            $table->string('cpEtab',5);
            $table->string('villeEtab',25);
            $table->string('telEtab',10);
            $table->string('mailEtab',25);
            $table->string('nomResponsable',25);
            $table->string('prenomResponsable',25);
            $table->string('nbChambresOffertes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
