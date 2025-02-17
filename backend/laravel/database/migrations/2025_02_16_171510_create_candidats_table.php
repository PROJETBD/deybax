<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('electeur_id')->constrained('electeurs')->onDelete('cascade');
            $table->string('nom_parti')->nullable();
            $table->string('slogan')->nullable();
            $table->string('photo')->nullable();
            $table->string('couleurs')->nullable();
            $table->string('url_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidats');
    }
};
