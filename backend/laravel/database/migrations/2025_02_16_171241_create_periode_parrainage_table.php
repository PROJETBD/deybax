<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('periode_parrainage', function (Blueprint $table) {
            $table->id('id_periode');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->enum('etat', ['ouverte', 'fermée'])->default('fermée');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periode_parrainage');
    }
};