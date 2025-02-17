<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('parrainages', function (Blueprint $table) {
            $table->id('id_parrainage');
            $table->foreignId('id_parrain')->constrained('parrains')->onDelete('cascade');
            $table->foreignId('id_candidat')->constrained('candidats')->onDelete('cascade');
            $table->string('code_validation', 10)->unique();
            $table->timestamp('date_parrainage')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parrainages');
    }
};
