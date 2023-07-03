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
        Schema::create('pivot_table_entree_resto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entree_id')->constrained('entrees','id')->onDelete('cascade');
            $table->foreignId('resto_id')->constrained('restaurents','id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_entree_resto');
    }
};
