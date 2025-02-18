<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('electeurs_temp', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cni')->unique();
            $table->string('numero_electeur')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->enum('sexe', ['M', 'F']);
            $table->string('bureau_vote');
            $table->enum('status_validation', ['en attente', 'validé', 'rejeté'])->default('en attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('electeurs_temp');
    }
};
