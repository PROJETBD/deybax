<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('electeurs', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cni')->unique();//numero carte nationale d'identité
            $table->string('numero_electeur')->unique();//numero electeur
            $table->string('nom');//nom
            $table->string('prenom');//prenom
            $table->date('date_naissance');//date de naissance
            $table->string('lieu_naissance');//lieu de naissance
            $table->enum('sexe', ['M', 'F']);//sexe
            $table->string('bureau_vote');//bureau de vote
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('electeurs');
    }
};
