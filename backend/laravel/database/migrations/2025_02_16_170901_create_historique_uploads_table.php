<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('historique_uploads', function (Blueprint $table) {
            $table->id('id_upload');
            $table->integer('utilisateur_id');
            $table->timestamp('date_upload')->useCurrent();
            $table->string('adresse_ip', 45);
            $table->string('empreinte_sha256', 64);
            $table->enum('status', ['succès', 'échec']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historique_uploads');
    }
};