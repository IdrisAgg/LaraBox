<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurents', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string("horaireDebut")->nullable();
            $table->string("horaireFin")->nullable();
            $table->string("numero")->nullable();
            $table->string("adresse")->nullable();
            $table->string("ville")->nullable();
            $table->text("localisation")->nullable();
            $table->string("image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurents');
    }
};
