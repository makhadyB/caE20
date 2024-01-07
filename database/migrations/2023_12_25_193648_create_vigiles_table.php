<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vigiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string("nom");
            $table->string("prenom");
            $table->date("naissance");
            $table->string("sexe");
            $table->double("taille");
            $table->double("poids");
            $table->foreignId('secteur_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vigiles');
    }
};
