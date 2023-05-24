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
        Schema::create('item_select', function (Blueprint $table) {
            $table->primary(["select_id","items_id"]);
            $table->foreignId("select_id")->constrained("selections","id")->onDelete("cascade");
            $table->foreignId("items_id")->constrained("items","id")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('select_item');
    }
};
