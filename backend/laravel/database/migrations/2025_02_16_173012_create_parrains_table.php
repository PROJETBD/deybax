<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('parrains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('electeur_id')->constrained('electeurs')->onDelete('cascade');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('code_authentification')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parrains');
    }
};
