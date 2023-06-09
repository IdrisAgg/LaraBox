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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->float("price");
            // $table->foreignId("entree_id")->nullable()->constrained("entrees","id")->onDelete("cascade");
            // $table->foreignId("plat_id")->nullable()->constrained("plats","id")->onDelete("cascade");
            // $table->foreignId("dessert_id")->nullable()->constrained("desserts","id")->onDelete("cascade");
            $table->foreignId("resto_id")->nullable()->constrained("restaurents","id")->onDelete("cascade");
            // $table->foreignId("select_id")->constrained("selections","id")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
